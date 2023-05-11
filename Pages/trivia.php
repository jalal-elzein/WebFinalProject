<?php
// make sure the user is logged in
require_once("../Backend/general.php");
session_start();
assertLogin();
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trivia</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../Styles/trivia.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body  class="backg-blurred" style="height: 100vh;">
        <!-- display navbar from generic functions -->
        <?php displayHeader(); ?>

        <div class="container text-center">
            <!-- page title -->
            <div class="row">
                <h1>Trivia Game</h1>
            </div>  

            <br>
            <br>

            <!-- stats section -->
            <div class="d-flex justify-content-center">
                <!-- score card -->
                <div class="card glass back-blurred" id="scorecard" style="width: 20rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Score</h5>
                        <p class="card-text">
                            <span id="score">0</span>
                            <span>/10</span>
                        </p>
                    </div>
                </div>

                <!-- question num card -->
                <div class="card glass back-blurred" style="width: 20rem;">
                    <div class="card-body text-white">
                        <h5 class="card-title">Question</h5>
                        <p class="card-text">
                            <span id="qnum">0</span>
                            <span>/10</span>
                        </p>
                    </div>
                </div>
            </div>

            <br>

            <!-- game section -->
            <div class="card glass back-blurred text-white" style="padding: 10px 20px;" id="gamecard">
                <!-- question -->
                <div class="row">
                    <h2 id="question"></h2>
                </div>

                <br>
                <br>

                <!-- first row of buttons -->
                <div class="row margin-tb-10">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 answer-btn" value="1" id="btn1"></button>
                    </div>

                    <div class="col">
                        <button class="btn btn-outline-light w-100 answer-btn" value="2" id="btn2"></button>
                    </div>
                </div>

                <!-- second row of buttons -->
                <div class="row margin-tb-10">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 answer-btn" value="3" id="btn3"></button>
                    </div>

                    <div class="col">
                        <button class="btn btn-outline-light w-100 answer-btn" value="4" id="btn4"></button>
                    </div>
                </div>

                <!-- flow buttons -->
                <div class="text-center">
                    <button class="btn bol-inverse w-50 hidden" id="next">Next</button>
                    
                    <button class="btn bol-inverse w-50 hidden" id="lb"
                    onclick="window.location.href = 'trivia-leaderboard.php';">Leaderboard</button>
                    
                    <button class="btn bol-inverse w-50 hidden" id="home"
                    onclick="window.location.href = 'homie  .html';">Home</button>
                    
                    <button class="btn bol-inverse w-50 hidden" id="restart">Restart</button>
                </div>
            </div>

            <!-- start button -->
            <button class="btn bol-inverse w-100" id="start">Start</button>
            <button class="btn bol-inverse w-50" id="lb2"
                onclick="window.location.href = 'trivia-leaderboard.php';">Leaderboard</button>
        </div>

        <!-- score form -->
        <form>
            <input type="hidden" name="score2send" id="score2send">
        </form>

        <!-- linking bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>
    </body>

    <script>
        $(document).ready(function () {
            // hide the gamecard once the page loads
            $("#gamecard").addClass("hidden");

            // reset the questions just in case
            $.ajax({
                url: '../Backend/trivia/reset_questions.php',
                type: 'POST',
                error: function (xhr, status, error) {
                    console.log(error);
                },
                success: function (response) {
                    console.log("reset response: " + response);
                }
            })
        });

        $('.answer-btn').click(function () {
            // validate answer and increase score
            if ($(this).val() == 1) {
                $(this).addClass("correct");
                
                // display +ive feedback to the user
                $("#gamecard").addClass("green-shadow");
                $("#scorecard").addClass("blink-green-bg");
                $("#score").html(parseInt($("#score").html()) + 1);
            } else {

                // display -ive feedback to the user
                $(this).addClass("wrong");
                $("#gamecard").addClass("red-shadow");
            }

            // show correct answer 
            $('.answer-btn').each(function () {
                if ($(this).val() == 1) {
                    console.log($(this).html());
                    $(this).addClass("correct");
                }
            });

            // disable other buttons 
            $(".answer-btn").not(this).prop("disabled", true);

            // increment question count
            if ($("#qnum").html() != "10") {
                $("#next").removeClass("hidden");
            }

            // end quiz if we reached 10 questions done
            else {
                $("#home").removeClass("hidden");
                $("#lb").removeClass("hidden");
                $("#restart").removeClass("hidden");
                $("#score2send").val($("#score").html());
                $("form").submit();
            }
        });

        // loads the next random questions and its answers
        function getNextQuestion() {
            // reset the gamecard style and state
            $(this).addClass("hidden");
            $("#gamecard").removeClass("hidden").removeClass("green-shadow").removeClass("red-shadow");
            $("#scorecard").removeClass("blink-green-bg");0
            $("#lb2").addClass("hidden");

            // send a request to the backend  to retreive new random question and answer
            $.ajax({
                url: '../Backend/trivia/trivia_back.php',
                dataType: 'json',
                success: function (data) {
                    // process data
                    var q = data.q;
                    var a = data.a;

                    $("#question").html(q["text"]);

                    // show answers in buttons
                    // mark correct answer
                    $("#btn1").html(a[0]["text"]);
                    $("#btn1").val(a[0]["correct"])
                    $("#btn2").html(a[1]["text"]);
                    $("#btn2").val(a[1]["correct"])
                    $("#btn3").html(a[2]["text"]);
                    $("#btn3").val(a[2]["correct"])
                    $("#btn4").html(a[3]["text"]);
                    $("#btn4").val(a[3]["correct"])
                },
                error: function (xhr, status, error) {
                    console.log('Error:', error);
                }
            });

            // reset button state and style
            $(".answer-btn").prop("disabled", false);
            $(".answer-btn").removeClass("correct").removeClass("wrong");

            // increase question number
            $("#qnum").html(parseInt($("#qnum").html()) + 1);
        }

        // set button functions
        $("#start").click(getNextQuestion);

        $("#next").click(getNextQuestion);

        // submit score at end of quiz
        $('form').submit(function (event) {
            event.preventDefault();

            // save user score in variable
            var data = $('#score2send').val();

            // send user score to backend via ajax
            $.ajax({
                url: '../Backend/trivia/save_score.php',
                type: 'POST',
                data: { data: data },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        });
        

        $("#restart").click(function () {
            // reset the seen questions
            $.ajax({
                url: '../Backend/trivia/reset_questions.php',
                type: 'POST',
                error: function (xhr, status, error) {
                    console.log(error);
                },
                success: function (response) {
                    console.log("reset response: " + response);
                }
            })

            // reset buttons and gamecard style and state
            $(".answer-btn").prop("disabled", false);
            $(".answer-btn").removeClass("correct").removeClass("wrong");
            $("#qnum").html("0");
            $("#score").html(parseInt("0"));
            $("#home").addClass("hidden");
            $("#lb").addClass("hidden");
            $("#restart").addClass("hidden");
            $("#score2send").val("0");

            // retreive a new random question
            getNextQuestion();
        });
    </script>

</html>

<!-- jalal -->
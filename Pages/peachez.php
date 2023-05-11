<?php
require_once("../Backend/general.php");
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peachez Chat</title>

        <link rel="stylesheet" href="../Styles/peachez.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body>
        <?php displayHeader('yo'); ?>

        <div class="container">

            <div class="container messagebox" id="messages">
            </div>

            <div class="ui container d-flex justify-content-center rounded-top">
                <form class="d-flex w-100" role="message" id="messageform">
                    <input class="form-control me-2 flex-grow-1" type="message" placeholder="Type a Message Here"
                        aria-label="Message" id="messageinput">
                    <button class="btn btn-warning   flex-grow-1" style="color: white;" type="submit" id="sendbtn">Send</button>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

        <script>

            function scrollToBottom() {
                var chatContainer = $('#messages');
                chatContainer.scrollTop(chatContainer.prop("scrollHeight"));
            }

            $(document).ready(function () {

                // initial load of messages
                $("#messages").load("../Backend/chat/load_message.php");

                $("#messageform").submit(function (event) {
                    event.preventDefault();

                    var messageText = $("#messageinput").val();

                    $.ajax({
                        url: "../Backend/chat/send_message.php",
                        type: "POST",
                        data: { messageText: messageText },
                        success: function (response) {
                            console.log("Saved Successfully!");
                            $("#messages").load("../Backend/chat/load_message.php");
                            $("#messageinput").val("");
                            console.log(response);
                            scrollToBottom();
                        },
                        error: function (xhr, status, error) {
                            console.log(error);
                        }
                    })

                })

                // refreshing the page every 1.5 seconds
                setInterval(function () {
                    $("#messages").load("../Backend/chat/load_message.php");
                    scrollToBottom();
                }, 1500);
            })

        </script>
    </body>

</html>
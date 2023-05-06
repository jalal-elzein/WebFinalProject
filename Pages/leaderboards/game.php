<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Game Leaderboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../Styles/trivia_lb.css">
    </head>

    <body>
        <div class="container text-center align-items-center" style="height: 100vh;">
            <br>
        
            <div class="row">
                <h1>Game Leaderboard</h1>
            </div>    

            <div class="row">
                <div class="card glass backg-blurred">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Score</th>
                                <th scope="col">Time (s)</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../../Backend/database/db_functions.php");
                            $db = connectToDB();
                            $numofplayers = 10;
                            $qry = "SELECT * FROM game_scores ORDER BY score DESC LIMIT $numofplayers;";
                            $qry_res = $db->query($qry);
                            for ($i = 1; $i <= $numofplayers; $i++) {
                                $row = $qry_res->fetch();
                                $username = $db->query("SELECT username FROM users WHERE id = " . $row['user_id'] . ";")->fetch()["username"];
                                $score = "<tr class='text-white'>
                                    <th scope='row'>$i</th>
                                    <td>" . $username . "</td>
                                    <td>" . $row["score"] . "</td>
                                    <td>" . $row["time"] . "</td>
                                    <td>" . $row["date"] . "</td>
                                    </tr>";
                                echo $score;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="text-center">
                    <button class="btn bol-inverse w-50 answer-btn" onclick="window.location.href = '../../Game';">Play The Game</button>
                    <button class="btn bol-inverse w-50 hidden" id="home"
                    onclick="window.location.href = '../index.html';">Home</button>
                </div>
            </div>

        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </body>

</html>
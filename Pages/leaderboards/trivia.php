<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trivia Leaderboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-center">
            <h1>Trivia Leaderboard</h1>
            <div class="card">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Score</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../../Backend/database/db_functions.php");
                        $db = connectToDB();
                        $qry = "SELECT * FROM trivia_scores ORDER BY score DESC LIMIT 10;";
                        $qry_res = $db->query($qry);
                        for ($i = 1; $i <= 10; $i++) {
                            $row = $qry_res->fetch();
                            $username = $db->query("SELECT username FROM users WHERE id = " . $row['user_id'] . ";")->fetch()["username"];
                            $score = "<tr>
                                <th scope='row'>$i</th>
                                <td>" . $username . "</td>
                                <td>" . $row["score"] . "</td>
                                <td>" . $row["date"] . "</td>
                                </tr>";
                            echo $score;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    </body>

</html>
<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
?>

<html>
    <head>  
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- <link rel="stylesheet" href="../Styles/homiecss.css"> -->
        <link rel="stylesheet" href="Styles/loginstyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <title>
                Login
            </title>
    </head>
    <body>
                    

        <div class="title">
            <span>Log Into Your Account</h1>
        </div>
        
        <div class="container justify-content-center" style="margin-bottom: 10px;">
            <?php
            // define failure message
            $failure = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Login Failed. Username or Password is incorrect. Try Again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

            if (isset($_SESSION["login_status"])) {
                if ($_SESSION["login_status"] == 0) {
                    echo $failure;
                }
                unset($_SESSION["login_status"]);
            }
            ?>

            <?php
            $success = '<!-- change confirmation -->
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Account Was Created Successfully. Please Use It To Log In.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            if (isset($_SESSION["signup_status"])) {
                if ($_SESSION["signup_status"] == 1) {
                    echo $success;
                }
                unset($_SESSION["signup_status"]);
            }
            ?>
        </div>
        
    
        <div class="paragraph" style="border:0;">
            <form class="form" action="./Backend/login.php" method="POST" name="login-form">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="uninput" class="txtfield">
                <br><br>
                
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="pinput" class="txtfield">
                <br><br>
                
                <button class="btn btn-primary btn btn-danger btn-block text-white" id="login-btn" type="submit">
                  <i class="fas fa-user"></i>
                  Login
                </button>
            </form>

            <img src="./Images/mar3.png" class="jump" id="mario-homepage" height="300px" style="float: right;">
        </div>

        <span id="login" style=" -webkit-text-stroke: 0;margin-right: 10; font-family: sans-serif; position:relative; top:220; left:42%; color: white;">
            Don't have an account? Sign up!
            <br>
        </span>

        <br>
        <button onclick="window.location.href='./Pages/signup.html';" class="btn btn-primary btn btn-danger btn-block text-white" id="signup-btn" type="button" style="top: 200;left: 46.5%;position: relative;">
                <i class="fas fa-user"></i>
                Sign Up
        </button>
        <br>
        <br>
        <button onclick="window.location.href='Pages/homie.php';" class="btn btn-primary btn-danger btn-block text-white" id="guest" type="button" style="top: 200;left: 44.7%;position: relative;">
            Continue As Guest
        </button>
            
                <script>
                function getCookie(name) {
                    var cookies = document.cookie.split(";");
                    for (let i = 0; i < cookies.length; i++) {
                        var tempcook = cookies[i].trim();
                        if (tempcook.startsWith(name + "=")) {
                            return decodeURIComponent(tempcook.substring(name.length + 1));
                        }
                    }
                    return "";
                }

                var un = getCookie("username");
                var ps = getCookie("password");

                if(un && ps) {
                    document.getElementById("uninput").value = un;
                    document.getElementById("pinput").value = ps;
                    document.querySelector("form[name='login-form']").submit();
                }

                var isFirstLoad = true;
                document.addEventListener("DOMContentLoaded", function() {
                    if (isFirstLoad) {
                        document.getElementById("uninput").value = "";
                        document.getElementById("pinput").value = "";
                        isFirstLoad = false;
                    }
                });
            </script>
    </body>
</html>
                        
<!-- jalal & rayane -->       
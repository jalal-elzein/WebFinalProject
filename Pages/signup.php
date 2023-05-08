<!-- color palette:
borders: #f44336
text: #595858
-->
<html style="background-image: url(../Images/signupbg.png);">
    
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!-- <link rel="stylesheet" href="../Styles/homiecss.css"> -->
        <link rel="stylesheet" href="../Styles/loginstyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <title>
            Sign Up
        </title>
    </head>

    <body >
        
        <div class="title">
            <h1>Sign Up Now!</h1>
        </div>

        <?php
            session_start();

            // define failure message
            $failure = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Account Was Not Created! Please try again or contact customer support if the problem persists.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';

            $already = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    User Already Exists. Please try a different username.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';

            if (isset($_SESSION["signup_status"])) {
                if ($_SESSION["signup_status"] == 0) {
                    echo $already;
                }
                if ($_SESSION["signup_status"] == 2) {
                    echo $failure;
                }
                unset($_SESSION["signup_status"]);
            }

        ?>


        <div class="paragraph" style="border:0; top: 100px;">
            <form class="form" action="../BE/signup.php" method="POST" name="signup-form">
                <label for="un">First Name</label>
                <br>
                <input type="text" name="firstname" class="txtfield">
                <br>
                <label for="un">Last Name</label>
                <br>
                <input type="text" name="lastname" class="txtfield">
                <br>
                <label for="un">Username</label>
                <br>
                <input type="text" name="username" class="txtfield">
                <br>
                <label for="un">Email</label>
                <br>
                <input type="text" name="email" class="txtfield">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="pass" class="txtfield">
                <br>
                <label for="pass">Confirm Password</label>
                <br>
                <input type="password" name="confirmPassword" class="txtfield">
                <br><br>
                <input type="checkbox" name="cbcaptcha" id="cbcaptcha">
                <label for="cbcaptcha">I am human</label>
                <br>
                <br>
                <button onclick="window.location.href='homie.html';" class="btn btn-primary btn btn-danger btn-block text-white" id="news-button" type="button" onclick="SignUp()>
                    <i class="fas fa-user"></i>
                    Sign Up
                </button>
                <button onclick="window.location.href='signup.html';" class="btn btn-primary btn btn-danger btn-block text-white" id="news-button" type="button" onclick="ClearForm()>
                    <i class="fas fa-user"></i>
                    Cancel
                </button>
            </form>
        </div>

        <script>
            function SignUp() {
                var mForm = document.querySelector("form[name='signup-form']");
                var fn = mForm.elements["firstname"].value;
                var ln = mForm.elements["lastname"].value;
                var email = mForm.elements["email"].value;
                var pass = mForm.elements["pass"].value;
                var confPass = mForm.elements["confirmPassword"].value;
                var captcha = mForm.elements["cbcaptcha"].checked;
                console.log("fn:" + fn);
                console.log("ln:" + ln);
                console.log("email:" + email);
                console.log("pass:" + pass);
                console.log("confPass:" + confPass);
                console.log("captcha:" + captcha);

                if ((pass != confPass) || (pass == ""))
                    alert("Passwords must be equal.");
                else
                    mForm.submit();
            }
            function ClearForm() {
                var mForm = document.querySelector("form[name='signup-form']");
                mForm.elements["firstname"].value = "";
                mForm.elements["lastname"].value = "";
                mForm.elements["email"].value = "";
                mForm.elements["pass"].value = "";
                mForm.elements["confirmPassword"].value = "";
                mForm.elements["username"].value = "";
                mForm.elements["cbcaptcha"].checked = false;
            }
        </script>
        <br>
        <span id="login" style=" -webkit-text-stroke: 0;margin-right: 10; font-family: sans-serif; position:relative; top: 400;; left:42%; color: white;">
            Already have an account? Login!
        </span>
        <br><br>
        <button onclick="window.location.href='../index.php';" class="btn btn-primary btn btn-danger btn-block text-white" id="news-button" type="button" style="top: 390;left: 47%;position: relative;">
            <i class="fas fa-user"></i>
            Login
        </button>
       
    </body>

</html>
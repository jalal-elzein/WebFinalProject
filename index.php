

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
        
    
        <div class="paragraph" style="border:0;">
            <form class="form" action="./backend/login.php" method="POST" name="login-form">
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" id="uninput" class="txtfield">
                <br><br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="pinput" class="txtfield">
                <br><br>
                <button onclick="window.location.href='./Pages/homie.html';" class="btn btn-primary btn btn-danger btn-block text-white" id="news-button" type="button">
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
        <button onclick="window.location.href='./Pages/signup.html';" class="btn btn-primary btn btn-danger btn-block text-white" id="news-button" type="button" style="top: 200;left: 46.5%;position: relative;">
                <i class="fas fa-user"></i>
                Sign Up
        </button>

        
                
            

        
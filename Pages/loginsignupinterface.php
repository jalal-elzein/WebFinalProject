<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../Styles/interface.css">
    <title>Account</title>
</head>
<body>
  <!-- nav bar using bootstap -->
    <nav class="navbar navbar-expand-lg bg-carbon navbar-dark">
        <div class="container-fluid my-white-text">
          <a class="navbar-brand" href="./homie.php">MarioUltimate</a>
        </div>
    </nav>
    <!-- container class bootstap -->
    <div class="container" >
        <div id="con">
        <span style="color: white; font-weight: bolder;">
          Sign in to your Account
        </span>
        <span style="color: white; font-weight: bolder;">
          or create a new account.
        </span>
        <br>
        <br>
        <div>
          <h3 style="color: white; font-weight: bolder;">
            For existing users
          </h3>
          <a href="../index.php">
          <button type="button" class="btn btn-danger">Log in</button>
          </a>
        </div>
        <div>
          <h3 style="color: white; font-weight: bolder;">
            Don't have an account?
          </h3>
          <a href="./signup.html">
          <button type="button" class="btn btn-danger">Sign Up</button>
        </a>
        </div>
        </div>
    </div>
    <nav class="navbar bg-carbon navbar-dark" style="height: 200px;">
        <img src="../Images/super-mario-run-2017-11-07.png" style="height: 100%;">
          <ul class="navbar-nav my-nav-item">
            <li class="nav-item" id="bottomy">
              <a class="nav-link active" id="bottomy" aria-current="page" href="./terms.txt">Terms</a>
            </li>
            <li class="nav-item my-nav-item" id="bottomy">
              <a class="nav-link" id="bottomy" href="./cookies.txt">CookiesPolicy</a>
            </li>

            <li class="nav-item my-nav-item" id="bottomy">
              <a class="nav-link" id="bottomy" href="./privacy.txt">PrivacyPolicy</a>
            </li>
          </ul>
       <img src="../Images/mariopg.jpg" style="height: 100%; margin-left: 300px; float: right;">
</nav>
</body>
</html>
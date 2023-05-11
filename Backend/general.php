<?php

function assertLogin()
{
  if (!isset($_SESSION["username"])) {
    header("location:../index.php"); 
  }
}

function displayHeader() {
  // nav class using bootstrap
  $headerHTML = '<nav class="navbar navbar-expand-lg bg-carbon navbar-dark">
      <div class="container-fluid my-white-text">
        <a class="navbar-brand" href="homie.php">MarioUltimate</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <div class="container-fluid">
            <div class="row">
              <div class="col-9 d-flex justify-content-around">
                <ul class="navbar-nav my-nav-item">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="homie.php">Home</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./peachez.php">Peachezz</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./lore.php">Wiki</a>
                  </li>
                  
                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./news.html">News</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="meme.php">Memes</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./trivia.php">Trivia</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="../Game2/">The Game</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                  </li>

                </ul>
              </div>

              <div class="col-3 d-flex justify-content-end">

                <button onclick="window.location.href=\'loginsignupinterface.php\';" class="btn btn-outline-danger" type="button">
                  <i class="fas fa-user"></i>
                  Login/Sign Up
                </button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </nav>';
  
  $headerHTML2 = '<nav class="navbar navbar-expand-lg bg-carbon navbar-dark">
      <div class="container-fluid my-white-text">
        <a class="navbar-brand" href="#">MarioUltimate</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <div class="container-fluid">
            <div class="row">
              <div class="col-9 d-flex justify-content-around">
                <ul class="navbar-nav my-nav-item">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="homie.php">Home</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./peachez.php">Peachezz</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./lore.php">Wiki</a>
                  </li>
                  
                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./news.html">News</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="meme.php">Memes</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="./trivia.php">Trivia</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="../Game2/">The Game</a>
                  </li>

                  <li class="nav-item my-nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>';

    if (isset($_SESSION["username"])) {
      echo $headerHTML2;
    } else {
      echo $headerHTML;
    }
}

// jalal and amal
?>

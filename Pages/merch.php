<?php
require_once("../Backend/general.php");
assertLogin();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Merch</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="../Styles/jalalshomie.css">
    

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-tZ8a+ZHYTtXd+10QmJsfaGyX9tWpyk3p3D3qBJdZb8jJN4YnLYOnI4oFElv/8CQWn1kwPOeSgzSXCZlL0lWJYg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body style="background-image:url(../Merch/452036-Super-Mario-Super-Mario-Bros.-video-games-video-game-art.jpg); background-size: contain; background-position: center top;">
    <?php displayHeader('yo'); ?>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg bg-carbon navbar-dark" style="background-image: repeating-linear-gradient(-45deg, #320000, #590000 6px, #8d1800 0, #b50000 12px);">
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
                      <a class="nav-link active" aria-current="page" href="homie.php">Home</a>
                    </li>
  
                    <li class="nav-item my-nav-item">
                      <a class="nav-link" href="peachez.html">Peachezz</a>
                    </li>
  
                    <li class="nav-item my-nav-item">
                      <a class="nav-link" href="#">Wiki</a>
                    </li>
  
                    <li class="nav-item my-nav-item">
                      <a class="nav-link" href="meme.html">Memes</a>
                    </li>
  
                    <li class="nav-item my-nav-item">
                      <a class="nav-link" href="#">Trivia</a>
                    </li>
  
                    <li class="nav-item my-nav-item">
                      <a class="nav-link" href="../Backend/profile.php">Profile</a>
                    </li>
                  </ul>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <button onclick="window.location.href='signup.html';" class="btn btn-primary btn btn-danger btn-block text-white" type="button">
                      <i class="fas fa-user"></i>
                      Login/Sign Up
                    </button>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </nav>
        <br><br>
        <span class="merchtitle overlay">
            Merch
        </span > 
        <br>

      <div class="row" style="margin:20px">
        <!-- search -->
        <div class="col">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-key">
            <button type="button" class="btn btn-primary btn btn-danger btn-block text-white" onclick="search()">Search</button>
          </form>
        </div> 

        <!-- sort -->
        <form method="post" action="../backend/direcotry.php">
          <div class="col" >
            <label for="filter-by" style="text-shadow: 2px 2px black; color:white; font-size: large;">Sort By:</label><br>
            <select class="form-select" aria-label="multiple select example" id="sort-by" name="sort-by">
              <option value="default">-- Select an option --</option>
              <option value="name-asc">Name (A-Z)</option>
              <option value="name-desc">Name (Z-A)</option>
              <option value="length-asc">Size (cm) (Low to High)</option>
              <option value="length-desc">Size (cm) (High to Low)</option>
              <option value="availability">Availability</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn btn-danger btn-block text-white">Submit</button><br>
        </form> 

        <!-- filter -->
        <form method="POST" action="../backend/filter.php">
          <div class="col">
            <label for="filter-by" style="text-shadow: 2px 2px black; color:white; font-size: large;">Filter By:</label><br>
            <select class="form-select" id="filter-by" name="filter-by">
              <option value="default">-- Select an option --</option>
              <option value="Color">Color</option>
              <option value="Shirts">Shirts</option>
              <option value="Games">Games</option>
              <option value="Accessories">Accessories</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn btn-danger btn-block text-white">Submit</button><br>
        </form>
      </div>
    </div> <br>

    <!-- grid -->
    <!-- replace by php to render from db -->
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/107912769_max.png" class="card-img-top">
            <div class="card-body">
              <p class="card-text">Bowser Shirt</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/114846-mattel-uno-super-mario-bros-package-1200x675.avif" class="card-img-top" alt="wide chain">
            <div class="card-body">
              <p class="card-text">Super Mario Themed Uno</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/315652.png" class="card-img-top" alt="Red Pendant">
            <div class="card-body">
              <p class="card-text">Super Mario Mug</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/best-1UP-Mushroom---Super-Mario-Nintendo-T-Shirt_-Kelly-Green-Apparel-merch-1660517229_400x.jpg.webp" class="card-img-top" alt="Rainbow Crystal">
            <div class="card-body">
              <p class="card-text">1-Up Mushroom Shirt</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/K54044-Super-Mario-Boy_s-Cap5_1200x1528.jpg.webp" class="card-img-top" alt="Butterfly Earrings">
            <div class="card-body">
              <p class="card-text">Super Mario Cap</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/MERCH-Super-Mario-Raccoon-Cosplay-Hat-large-image.jpg" class="card-img-top" alt="Gold Earrings">
            <div class="card-body">
              <p class="card-text">Raccoon Cosplay Hat</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/merch1.png.jpeg" class="card-img-top" alt="Pink Crystals">
            <div class="card-body">
              <p class="card-text">Super Mario Figurine</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/super-mario-bros-nintendo-super-mario-jumping-rubb.jpg" class="card-img-top" alt="Red Ring">
            <div class="card-body">
              <p class="card-text">Super Mario Keychain</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/super-mario-cushion-36309474607330.jpg.webp" class="card-img-top" alt="Silver Ring">
            <div class="card-body">
              <p class="card-text">Super Mario Pillow</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/super-mario-wall-clock-39020436226274.jpg.webp" class="card-img-top" alt="Pearls">
            <div class="card-body">
              <p class="card-text">Super Mario Clock</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="card">
            <img src="../Merch/SuperMario_LittleGecko_bb3b6387-c895-40e6-8924-b78b32c67368_1200x.png.webp" class="card-img-top" alt="Gold Chain">
            <div class="card-body">
              <p class="card-text">Mario And Luigi Socks</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
    <script>
      function search() {
        var query = document.getElementById("search-key").value;
        alert("Performing search for query: " + query);
      }
    </script>
  </body>

</html>
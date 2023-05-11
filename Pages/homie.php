<?php
require_once("../Backend/general.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- <link rel="stylesheet" href="../Styles/homiecss.css"> -->
    <link rel="stylesheet" href="../Styles/homie2.css">
    <link rel="stylesheet" href="../Styles/homie3.css">
    <link rel="stylesheet" href="../Styles/jalalshomie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>

  <body>
    <!-- nav bar called from general.php -->
    <?php displayHeader(); ?>
    <br>
    <br>
    <!-- div container ensures that the carousel and image are wrapped using bootstrap -->
  <div class="container" id="wmmak">
    <div class="container-fluid">
    <div class="row">
      <!-- carousel takes up to 9 columns  -->
      <div class="col-md-9 p-3" style="border-radius: 10%; border: solid black 2px; background-color: black;">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <!-- buttons from each slide to the next using bootstrap -->
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <!-- inner segment of the carousel slide -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- class card inside the carousel contains image, body and text as well -->
            <div class="card" id="cardcor">
              <img src="../Images/hisotry1.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Super Mario Bros. Released: Oct. 18, 1985</h3>
                <p class="card-text">One day the kingdom of the peaceful mushroom people was invaded by the Koopa, a tribe of
                  turtles famous for their black magic.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history2.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Super Mario Bros. 2 Released: Oct. 9, 1988</h3>
                <p class="card-text">The dream Mario has becomes real, with princess peach and toad he embarks to discover it spreads out before them!</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history3.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Selected game:Super Mario Bros. 3 Released: Feb. 12, 1990</h3>
                <p class="card-text">Mario and Luigi must recover the royal magic wands from Bowser’s 7 kids to return the kings to their true forms. “Goodbye and good luck!” said the Princess and Toad as Mario and Luigi set off on their journey deep into the Mushroom World.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history4.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Super Mario World Released: Aug. 13, 1991</h3>
                <p class="card-text"> Apparently, Bowser hasnt learned his lesson, so it appears that his minions have yet again kidnapped Princess Peach and Yoshis friends!.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history5.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">New Super Mario Bros. Released: May 15, 2006</h3>
                <p class="card-text"> Looks like Mario’s going to need all the Mega Mushrooms he can find to get to the bottom of princess Peach kidnapping this time.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history6.png" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Super Mario Maker Released: Sept. 11, 2015 / Dec. 2, 2016</h3>
                <p class="card-text">Combine parts—Blocks, Goombas, Pipes and more—to create your own Super Mario Bros. courses! Then you can share them online, play courses others have made!</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card" id="cardcor">
              <img src="../Images/history7.jpg" class="card-img-top" alt="...">
              <div class="card-body" id="cardbodycor">
                <h3 class="card-title">Super Mario Kart Deluxe Released: 2017	</h3>
                <p class="card-text">Help Mario who lost the Golden Special Cup that was stolen by Cosmic Bowser through fair racing!</p>
              </div>
            </div>
          </div>
          
        </div>
        <!-- Carousel controls using bootstrap -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="padding: 30px;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="padding: 30px;"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
      <!-- img taking 3 columns of space  -->
        <div class="col-md-3">
          <img src="../Images/mar3.png" class="jump" id="mario-homepage" style="float: right; height: 300px;">
        </div>
  </div>
  </div>
</div>

    <br>
    <!-- paragrpah indicating a new segment in the web -->
    <p class="fs-1 fw-bold text-center text-danger bg-dark"> Mario Recent! </p>
    <!-- bootstrap ensures three cards in the same row -->
    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 2px;">
      <div class="col">
        <!-- linked class card bootstrap -->
        <a href="https://www.forbes.com/sites/markhughes/2023/04/20/the-super-mario-bros-movie-topping-massive-830-million-box-office/?sh=61557fc4f6f1" class="card-link">
        <div class="card h-100" style="border: solid black 2px;">
          <img src="../Images/movie.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Super Mario Bros Success</h5>
            <p class="card-text">A breathtaking historic box office run, the film has taken more than $935 million in worldwide receipts so far!</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col">
        <a href="https://www.bbc.com/news/entertainment-arts-65230431" class="card-link">
        <div class="card h-100" style="border: solid black 2px; ">
          <img src="../Images/aetc2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Super Mario Movie's 'sensational' box office takings defy poor reviews </h5>
            <p class="card-text">The new Super Mario Bros Movie has broken box office records, scoring the most successful global opening of all time for an animated film. It left many critics cold!</p>
          </div>
        </div>
        </a>
      </div>
      <div class="col">
        <a href="https://www.eurogamer.net/the-best-super-mario-games-ranked" class="card-link">
        <div class="card h-100" style="border: solid black 2px; margin-right: 10px;">
          <img src="../Images/super-mario-bros-2026fec1a6fc4e1fbbe6f0bbb3adedab.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Popular Super Mario Bros. Games</h5>
            <p class="card-text">In celebration of the movies success, here is a list of the most popular Super Mario games!</p>
          </div>
        </div>
        </a>
      </div>
    </div>
    <br>
    <!-- button using bootstrap with animation  -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <a class="btn btn-primary btn btn-danger btn btn-lg btn-block text-white" id="news-button" href="../Pages/news.html" role="button">See More News ></a>
    </div>
    <br>
    <!-- container class bootstrap -->
    <div class="container text-center">
      <div class="row">
        <div class="col align-self-start">
          <a href="./characters.php">
            <div class="card" style="width: 30rem; border-radius: 10%; border: solid rgb(0, 0, 0) 10px">
              <img src="../Images/homiechracter.jpg" class="card-img-top" style="border-radius: 10%;">
              <div class="card-body">
                <h1 class="card-text" id="homie-head">Meet the Gang!!</h1>
              </div>
            </div>
          </a>
        </div>
        <div class="col align-self-center">
          <img src="../Images/test.png" class="meow">
        </div>
      </div>
    </div>
    
    <br>
    <div class="container text-center">
      <div class="row">
        <div class="col align-self-start">
          <img src="../Images/mariohomie.png" class="meow1">
        </div>
        <div class="col align-self-center">
          <a href="./peachez.html">
            <div class="card" style="width: 30rem; border-radius: 10%; border: solid rgb(0, 0, 0) 10px">
              <img src="../Images/feelingpeachy.png" class="card-img-top" style="border-radius: 10%;">
            </div>
          </a>
        </div>
      </div>
    </div>
    
<!-- nav bar bottom using bootstrap -->
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
    
  
    <script src="../js/bootstrap.js"></script>
  </body>

</html>
<?php
require_once("../Backend/general.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../Styles/character.css">
    <link rel="stylesheet" href="../Styles/jalalshomie.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="../jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Characters</title>
    <style>

        .small-image {
            width: 60%; /* Adjust this value as needed */
            height: auto; /* Maintain aspect ratio */
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body style="background-image:url(../Images/hh.jpg)">
  <?php displayHeader(); ?>
    <br><br>
    <h1 class="colortitle"> All Characters!</h1>
    <br><br>
    <!-- container class using bootstrap takes up all 12 columns-->
  <div class="cards-container">
    <div class="container transition custom-card" id="card" style="background-color: red; border-radius: 10%; background-image: linear-gradient(45deg, #b11818 25%, transparent 25%, transparent 50%, #9f2727 50%, #e41111 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(255, 0, 0, 0.2), 0 6px 20px 0 rgba(255, 0, 0, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/mimi.png" class="img-fluid" id="mario-image" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text" style="font-size: 80px; font-weight: bolder;">Mario</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card1" style="background-color: rgb(9, 156, 9); border-radius: 10%; background-image: linear-gradient(45deg, #39dc18 25%, transparent 25%, transparent 50%, #00ff15 50%, #17bb11 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(0, 255, 42, 0.3), 0 6px 20px 0 rgba(9, 255, 0, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/em.png" class="img-fluid" id="mario-image1" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text1" style="font-size: 100px; font-weight: bolder; color: rgb(44, 16, 128);">Luigi</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card2" style="background-color: rgb(255, 1, 192); border-radius: 10%; background-image: linear-gradient(45deg, #fd247b 25%, transparent 25%, transparent 50%, #ff0080 50%, #f81c74 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(255, 0, 157, 0.3), 0 6px 20px 0 rgba(255, 0, 93, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/peach1resized.png" class="img-fluid" id="mario-image2" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text2" style="font-size: 100px; font-weight: bolder; color: gold;">Princess Peach</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card3" style="background-color: rgb(24, 9, 156); border-radius: 10%; background-image: linear-gradient(45deg, #1870dc 25%, transparent 25%, transparent 50%, #008cff 50%, #117abb 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(0, 213, 255, 0.3), 0 6px 20px 0 rgba(0, 187, 255, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/toadresized4.png" class="img-fluid" id="mario-image3" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text3" style="font-size: 150px; font-weight: bolder;">Toad</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card4" style="background-color: rgb(255, 251, 1); border-radius: 10%; background-image: linear-gradient(45deg, #deb520 25%, transparent 25%, transparent 50%, #ffe100 50%, #eeaf10 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgb(255, 251, 0), 0 6px 20px 0 rgba(255, 251, 0, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/daisy1.png" class="img-fluid" id="mario-image4" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text4" style="font-size: 150px; font-weight: bolder; color: #7a4b0c;">Daisy</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card5" style="background-color: rgb(156, 9, 146); border-radius: 10%; background-image: linear-gradient(45deg, #f310c6 25%, transparent 25%, transparent 50%, #e210cd 50%, #bb11a4 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(255, 0, 221, 0.3), 0 6px 20px 0 rgba(255, 0, 212, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/wario1.png" class="img-fluid" id="mario-image5" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text5" style="font-size: 150px; font-weight: bolder; color: yellow;">Wario</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card6" style="background-color: rgb(0, 255, 8); border-radius: 10%; background-image: linear-gradient(45deg, #46dc18 25%, transparent 25%, transparent 50%, #09a719 50%, #62c703 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(0, 255, 26, 0.3), 0 6px 20px 0 rgba(0, 255, 17, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/yoshi1.png" class="img-fluid" id="mario-image6" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text6" style="font-size: 150px; font-weight: bolder; color: red">Yoshi</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container transition custom-card" id="card7" style="background-color: rgb(182, 130, 9); border-radius: 10%; background-image: linear-gradient(45deg, #a17212 25%, transparent 25%, transparent 50%, #7a4b0c 50%, #be6a20 75%, transparent 75%, transparent); box-shadow: 0 4px 16px 0 rgba(255, 170, 0, 0.3), 0 6px 20px 0 rgba(255, 157, 0, 0.7);">
      <div class="row">
        <div class="col-sm-12 col-md-4 image-container">
          <img src="../Images/brow1.png" class="img-fluid" id="mario-image7" style="margin-right: auto; margin-left: auto; display: block;" alt="your-image-description">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 id="mario-text7" style="font-size: 150px; font-weight: bolder; color: rgb(187, 37, 37);">Browser</h1>
          <p>Click on the image or the text to reveal</p>
        </div>
      </div>
    </div>
    <br>
    <br>
  </div>
  <script>
    // function to change and alternate between the image views using js
 function handleCardClick(cardId, imageId, textId, newImageSrc, newText) {
  var oldImage = $(imageId).attr('src');
  var oldText = $(textId).text();
// launch current variables
  $(cardId).click(function() {
    var currentImage = $(imageId).attr('src');
    var currentText = $(textId).text();
    if (currentImage === oldImage) {
      // set the new image and apply its css
      $(cardId).css({'border-radius': '5%'});
      $(imageId).fadeOut(1000, function() {
        $(this).attr('src', newImageSrc).fadeIn(1000)
               .addClass('small-image center-image');
        currentImage = $(this).attr('src');
      });
      $(textId).fadeOut(1000, function() {
        $(this).text(newText).css({
          'white-space': 'pre-line',
          'font-size': 'x-large',
          'color': 'white',
          'padding': '50px'
          
        }).fadeIn(1000);
      });
    } else {
      // if new image is currently displayed go back to the old one
      $(cardId).css({'border-radius': '10%'});
      $(imageId).fadeOut(1000, function() {
        $(this).attr('src', oldImage).fadeIn(1000)
               .removeClass('small-image center-image');
        currentImage = $(this).attr('src');
      });
      $(textId).fadeOut(1000, function() {
        $(this).text(oldText).css({
          'font-size' : '100px',
          'font-weight': 'bolder',
        }).fadeIn(1000);
      });
    }
  });
}
  $(document).ready(function() {
  // apply functin
  handleCardClick('#card', '#mario-image', '#mario-text', '../Images/emmak.png','The main hero of the Mushroom Kingdom. \n\nMario is always bright and cheerful and instantly recognizable with his blue overalls, red cap, and trademark moustache.\n\nHis brother is Luigi and he is best friends with all the members of Mushroom Kingdom!');
  handleCardClick('#card1', '#mario-image1', '#mario-text1', '../Images/luginew.png', 'Marios brother and fellow hero of the Mushroom Kingdom. \n\nLuigi is instantly recognizable in his trademark green hat and green shirt.\n \nLuigi is kind but can be a bit nervous, especially around ghosts. \n\n Luigi is taller and can jump higher than Mario, his moustache is more goofy too!');
  handleCardClick('#card2', '#mario-image2', '#mario-text2', '../Images/peachnew.png', "The beloved princess of the Mushroom Kingdom.\n\n She's extremely kind and is always working to create a world where everyone can live together happily. \n\nHer signature pink dress is quite lovely.\n\n She is also Marios love interest!");
  handleCardClick('#card3', '#mario-image3', '#mario-text3', '../Images/toad2.png', "A resident of the Mushroom Kingdom who works in service of Princess Peach.\n\n Toad has red spots on his head, though others of his kind come in a variety of colors.\n\n He always puts himself in dnager to save the others, hes very loyal and kind-hearted!");
  handleCardClick('#card4', '#mario-image4', '#mario-text4', '../Images/daisy2.png', "The princess of Sarasaland. \n\n Her trademark style includes her yellow dress and flowery accessories. \n\nDaisy is cheerful, energetic, and loves the sun. \n\nShe enjoys playing a variety of sports with Mario and friends.");
  handleCardClick('#card5', '#mario-image5', '#mario-text5', '../Images/wario2.png', "The self-professed archrival of Mario. \n\nWario wears purple overalls, a yellow hat, and has an instantly recognizable zigzag moustache.\n\n Wario and Mario have known each other since they were babies.\n\n Wario loves garlic and making money!");
  handleCardClick('#card6', '#mario-image6', '#mario-text6', '../Images/yoshi2.png', "Mario's dependable companion who hails from Yoshi's Island. \n\nYoshi is kind and carefree.\n Yoshi is green but othes like yoshi can be different colors \n\n He uses his long tongue to gobble up fruit and enemies, which he can turn into eggs for throwing");
  handleCardClick('#card7', '#mario-image7', '#mario-text7', '../Images/brow2.png', "The King of the Koopas. Bowser is Mario's archrival and is always causing trouble in the Mushroom Kingdom. \n Whenever he sets his sights on the Mushroom Kingdom, his plans are often foiled by Mario and friends. \n\n Bowser is a mighty foe who possesses incredible strength and can even breathe fire");
});
</script>
  </body>
</html>
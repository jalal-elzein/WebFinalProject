<?php
require_once("../Backend/general.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Mario Lore</title>
    <link rel="stylesheet" href="../Styles/lore.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<body>
  <!-- calling nav bar from general -->
  <?php displayHeader(); ?>
    <!-- header sections inside every div for new part just html/css-->
    <div class="introbbg">
        <header>
            <h1 style="border: dashed #219ef357 10px; color: #fff; text-align: center;
            padding: 1rem;
            color: black;
            font-size: xxx-large;
            font-weight: bolder;">
            Super Mario LORE</h1>
        </header>
        <br>
        <section id="intro">
            <h2 id="memetitle">Introduction</h2>
            <p>
                Super Mario is a video game series created by Nintendo, featuring their mascot, Mario, as the main character. The games follow Mario's adventures in the Mushroom Kingdom as he attempts to rescue Princess Peach from the primary antagonist, Bowser.
                <br>
                <br>
                There have been over 20 games in the Super Mario series, with at least one game released for every major Nintendo video game console.
                <br>
                <br>
                Throughout his adventures, Mario is joined by his friends and his brother, Luigi, as they explore various worlds and defeat enemies.
            </p>
        </section>
    
        <section>
            <header>
                <h1 style="border: dashed #219ef357 10px; color: #fff; text-align: center;
                padding: 1rem;
                color: black;
                font-size: xxx-large;
                font-weight: bolder;">
                    More on Mario!
                </h1>
            </header>
            <br>
            <br>
            <p>
                Mario is the overall protagonist of the long-running and highly successful Nintendo video game franchise of the same name.
                <br> 
                <br>
                He is a mustached Italian plumber who lives in the Mushroom Kingdom. Mario also sometimes rules his own land, Mario Land.
                <br>
                <br>
                 As confirmed in DiC Cartoons, Mario and his twin brother, Luigi, used to live in Brooklyn as plumbers. 
                 <br>
                 <br>
                Mario mainly fulfills the role of rescuing Princess Peach and other innocents from the clutches of power-hungry villains such as Bowser, the ever-persistent King of the Koopas, in Super Mario games.
                 <br>
                 <br>
                While not adventuring, Mario participates in a variety of parties, races, sporting events and even works as his alter-ego, Dr. Mario.
            </p>
        </section>
        <section style="font-size: large; background-color: #219ef357; border: dashed #9c27b040;border-radius: 5%;  box-shadow: 2px 2px 4px rgba(187, 33, 207, 0.3)">
            Games have usually portrayed Mario as a silent, straightforward character. According to Nintendo's philosophy, this allows Mario to fit in many different genres and roles. In nearly all of his spinoff appearances, Mario is defined as an all-around character.
        </section>
        <br>
        <br>
        <section id="mc">
            <h2 style="font-weight: bolder;
            font-size: 50px; box-shadow: 2px 2px 4px rgba(33, 100, 207, 0.3); ">Main Characters</h2>
            <!-- unordered list -->
            <ul>
                <li><strong>Mario</strong> - The main protagonist and a legendary hero in the Mushroom Kingdom.</li>
                <li><strong>Luigi</strong> - Mario's younger brother, who often assists him in his adventures.</li>
                <li><strong>Princess Peach</strong> - The kind and fair ruler of the Mushroom Kingdom, frequently kidnapped by Bowser.</li>
                <li><strong>Bowser</strong> - The primary antagonist, a powerful Koopa who often kidnaps Princess Peach and attempts to conquer the Mushroom Kingdom.</li>
            </ul>
            <!-- linked btn using bootstrap -->
            <a href="./characters.html">
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn btn-info " type="button">For   more   Characters!</button>
            </div>
            </a>
        </section>
        <br>
        <br>
        <section id="mc">
            <h2 style="font-weight: bolder;
            font-size: 50px; box-shadow: 2px 2px 4px rgba(187, 33, 207, 0.3);">Power-Ups</h2>
            <p>
                Throughout the Super Mario series, Mario and Luigi can collect various power-ups to aid them in their adventures. Some of the most iconic power-ups include:
            </p>
            <ul>
                <li><strong>Super Mushroom</strong> - Transforms Mario or Luigi into their Super form, making them larger and able to break certain blocks.</li>
                <li><strong>Fire Flower</strong> - Grants the ability to throw fireballs, allowing them to defeat enemies from a distance.</li>
                <li><strong>Super Star</strong> - Grants temporary invincibility, allowing them to defeat most enemies upon contact.</li>
            </ul>
        </section>
        <br>
        <br>
        <section id="mc">
            <h2 style="font-weight: bolder;
            font-size: 50px; box-shadow: 2px 2px 4px rgba(33, 100, 207, 0.3);">Notable Games</h2>
            <ol>
                <li>Super Mario Bros. (1985)</li>
                <li>Super Mario Bros. 3 (1988)</li>
                <li>Super Mario World (1990)</li>
                <li>Super Mario 64 (1996)</li>
                <li>Super Mario Sunshine (2002)</li>
                <li>Super Mario Galaxy (2007)</li>
                <li>Super Mario Odyssey (2017)</li>
            </ol>
        </section>
    </div>
 
</body>
</html>

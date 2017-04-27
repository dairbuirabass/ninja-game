<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ninja Game</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Jquery, Scrollify and p5 CDN -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.14/jquery.scrollify.min.js></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/p5.js"></script>

    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/profilecard.css" />
    <link rel="stylesheet" href="style/animate.css" />

    <link rel="stylesheet" href="style/dialog.css" />
    <link href="https://fonts.googleapis.com/css?family=Bungee|Bungee+Shade|Roboto:400,400i" rel="stylesheet">

    <script language="javascript" type="text/javascript" src="p5/libraries/p5.sound.js"></script>
    <script src="p5/libraries/p5.play.js"></script>
    <script src="p5/libraries/p5.dom.js"></script>

    <script src="js/ninja-game-main.js"></script>
    <script src="js/Ninja.js"></script>
    <script src="js/Collider.js"></script>
    <script src="js/Pickup.js"></script>
    <script src="js/Enemy.js"></script>
    <script src="js/CustomPrompt.js"></script>
    <script src="script/main.js"></script>


</head>

<body>
    <section class="panel home" data-section-name="home">
      <a target="_blank" href="http://www.oamk.fi/fi/"><img id="logo" src="assets/oamk_logo.png" alt="oamk logo"></a>
      <div class="inner">
            <div class="vertical-center">
                <h1 class="animated fadeInDownBig">Ninja Game</h1>
                <p>A simple web based 2D endless running game</p>
                <p>made with <span class="fa fa-heart"></span> by a bunch of OAMK students as a first yeart project</p>
                <a href="#play" class="scroll"></a>
            </div>
        </div>

        <ul class="pagination">
            <li><a href="#home" class="active"><span class="hover-text">Home</span></a></li>
            <li><a href="#instruction"><span class="hover-text">Instructions</span></a></li>
            <li><a href="#play"><span class="hover-text">Play</span></a></li>
            <li><a href="#stats"><span class="hover-text">Stats</span></a></li>
            <li><a href="#credits"><span class="hover-text">Credits</span></a></li>
            <li><a href="#about"><span class="hover-text">About Us</span></a></li>
        </ul>
    </section>

    <section class="panel instruction" data-section-name="instruction">
        <div class="inner">
            <div class="vertical-center">
                <h2>Instructions</h2>
                <table>
                    <tr>
                        <th>Movement</th>
                        <th>Key</th>
                    </tr>
                    <tr>
                        <td>Up</td>
                        <td><b>W</b></td>
                    </tr>
                    <tr>
                        <td>Down</td>
                        <td><b>S</b></td>
                    </tr>
                    <tr>
                        <td>Left</td>
                        <td><b>A</b></td>
                    </tr>
                    <tr>
                        <td>Right</td>
                        <td><b>D</b></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="panel play" data-section-name="play">
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
            <div>
                <div id="dialogboxhead"></div>
                <div id="dialogboxbody"></div>
                <div id="dialogboxfoot"></div>
            </div>
        </div>

        <div class="inner">
            <div class="vertical-center" id="canvas-holder">
            </div>
        </div>
    </section>

    <section class="panel stats" data-section-name="stats">
        <div class="inner">
            <div class="vertical-center">
                <?php
                    include "php/connection.php";
                ?>

                    <h2>High scores</h2>
                    <table border="1">
                        <tr>
                            <TH>Name</TH>
                            <TH>Score</TH>
                        </tr>

                        <?php

                        $myquery="SELECT name, score FROM scores order by score desc limit 10";
                        $high_scores=$db->query($myquery);
                        foreach ($high_scores as $row) {
                            echo '<tr><td>'.$row['name'].'</td><td>'.$row['score'].'</td>';
                            echo '</tr>';
                        }
                ?>
                    </table>
            </div>
        </div>
    </section>

    <section class="panel credits" data-section-name="credits">
        <div class="inner">
            <div class="vertical-center">
                <h2>Credits</h2>
                <h3>Special thanks to all people who unknowingly contributed to our project </h3>
          <ul class="credits-list">
            <li class="credits-list-li"><a class="credits-list-a" target="_blank" href="https://p5js.org">p5 Community </a>and its founder <a class="credits-list-a" target="_blank" href="http://lauren-  mccarthy.com/">Lauren McCarthy</a></li>
            <li class="credits-list-li"><a class="credits-list-a" target="_blank" href="https://opengameart.org/users/dezrasdragons">DezrasDragon</a> from opengameart.org community for lovely Ninja animations</li>
            <li class="credits-list-li"><a class="credits-list-a" target="_blank" href="https://opengameart.org/users/ansimuz">ansimuz</a> for breath-taking backgrounds</li>
            <li class="credits-list-li"><a class="credits-list-a" target="_blank" href="https://opengameart.org/users/sacio">sacio</a> and <a class="credits-list-a" target="_blank" href="https://opengameart.org/users/kungfu4000">kungfu4000</a> for awesome game assets and animations</li>
            <li class="credits-list-li">Special thanks to <a class="credits-list-a" target="_blank" href="https://opengameart.org">opengameart</a>community</li>
            <li class="credits-list-li">Custom alert code is inspired by <a class="credits-list-a" target="_blank" href="http://www.developphp.com/video/JavaScript/Custom-Prompt-Box-Programming-Tutorial">developphp.com tutorials</a></li>
            <li class="credits-list-li">If you want to download the soundtrack, feel free to email at <a class="credits-list-a" href="mailto:dair.baidauletov@gmail.com">dair.baidauletov@gmail.com</a></li>
          </ul>
            </div>
        </div>
    </section>

    <section class="panel about" data-section-name="about">
        <div class="inner profiles">
            <div class="vertical-center">
                <h2>About Us</h2>
                <figure class="profileCard">
                    <div class="profile-image"><img src="assets/profile/dair.jpg" alt="sample47" /></div>
                    <figcaption>
                        <h3>Dair Baidauletov</h3>
                        <div class="icons"><a href="https://www.facebook.com/dair.baidauletov"><i class="fa fa-facebook-official"></i></a>
                            <a href="https://github.com/dairbuirabass"> <i class="fa fa-github"></i></a>
                            <a href="mailto:dair.baidauletov@gmail.com"> <i class="fa fa-envelope"></i></a>
                        </div>
                    </figcaption>
                </figure>
                <figure class="profileCard">
                    <div class="profile-image"><img src="assets/profile/fayjus.jpg" alt="sample47" /></div>
                    <figcaption>
                        <h3>Fayjus Salehin</h3>
                        <div class="icons"><a href="https://www.facebook.com/fayjusss"><i class="fa fa-facebook-official"></i></a>
                            <a href="https://github.com/fayjusss"> <i class="fa fa-github"></i></a>
                            <a href="mailto:fsalehin@live.com"> <i class="fa fa-envelope"></i></a>
                        </div>
                    </figcaption>
                </figure>
                <figure class="profileCard">
                    <div class="profile-image"><img src="assets/profile/hung.jpg" alt="sample47" /></div>
                    <figcaption>
                        <h3>Hung Dao</h3>
                        <div class="icons"><a href="https://www.facebook.com/hung.dao.nt"><i class="fa fa-facebook-official"></i></a>
                            <a href="https://github.com/hungntdao"> <i class="fa fa-github"></i></a>
                            <a href="#about"> <i class="fa fa-envelope"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
</body>

</html>

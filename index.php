<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ninja Game</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="style/main.css" />

    <!-- Jquery, Scrollify and p5 CDN -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js" integrity="sha256-VAvG3sHdS5LqTT+5A/aeq/bZGa/Uj04xKxY8KM/w9EE=" crossorigin="anonymous"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.14/jquery.scrollify.min.js></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.8/p5.js"></script>

	 <script language="javascript" type="text/javascript" src="p5/libraries/p5.sound.js"></script>
    <script src="p5/libraries/p5.play.js"></script>
    <script src="p5/libraries/p5.dom.js"></script>

    <script src="js/ninja-game-main.js"></script>
    <script src="js/Ninja.js"></script>
    <script src="js/Collider.js"></script>
    <script src="js/Pickup.js"></script>
    <script src="js/Enemy.js"></script>
    <script src="script/main.js"></script>

</head>

<body>
    <div class="header">
        <p>Ninja Game</p>
    </div>

    <section class="panel home" data-section-name="home">
        <div class="inner">
            <div class="vertical-center">
                <h1>Home</h1>
            </div>
        </div>
        <ul class="pagination">
            <li><a href="#home" class="active"><span class="hover-text">Home</span></a></li>
            <li><a href="#play"><span class="hover-text">Play</span></a></li>
            <li><a href="#stats"><span class="hover-text">Stats</span></a></li>
            <li><a href="#about"><span class="hover-text">About</span></a></li>
        </ul>
    </section>

    <section class="panel play" data-section-name="play">
        <div class="inner">
            <div class="vertical-center" id="canvas-holder">
            </div>
        </div>
    </section>

    <section class="panel stats" data-section-name="stats">
        <div class="inner">
            <div class="vertical-center">
                <h2>Stats</h2>
            </div>
        </div>
    </section>

    <section class="panel about" data-section-name="about">
        <div class="inner">
            <div class="vertical-center">
                <h2>About</h2>
            </div>
        </div>
    </section>

    <div class="footer">
        <p>Footer</p>
    </div>
</body>

</html>

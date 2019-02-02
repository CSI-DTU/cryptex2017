<?php
require_once("../core.php");
require_once("../functions.php");

if (!isset($_SESSION["access_token"])) {
  header('Location: '.LOGINLINK);
}

if (!isset($_SESSION["email"])) {
  add_user();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Congrats</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    </head>
    <body>
        <div class="site" id="page">

            <!-- Options headline effects: .rotate | .slide | .zoom | .push | .clip -->
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="hero-section__option">
                        <img src="assets/images/index.jpg" alt="Hero section image">
                    </div>
                    <!-- .hero-section__option -->

                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-2 col-lg-8">
                                <div class="title-01 title-01--11 text-center">
                                    <h2 class="title__heading">
                                        <!-- <span>CONGRATULATIONS</span> -->
                                        <!-- <span>CONGRAT</span> -->
                                        <strong class="hero-section__words">
                                            <span class="title__effect is-visible">CONGRATULATIONS</span>
                                            <span class="title__effect"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; else echo "Buddy" ?></span>
                                        </strong>
                                        <!-- <span>Prince Piyush</span>  -->
                                    </h2>
                                    <div class="title__description">You have completed all levels of Cryptex 2019</div>

                                    <!-- Options btn color: .btn-success | .btn-info | .btn-warning | .btn-danger | .btn-primary -->
                                    <div class="title__action"><a href="../leaderboard.php#me" class="btn btn-success">Leaderboard</a></div>
                                    </br>
                                    <div class="title__action"><a href="<?php echo APPLINK; ?>" target="_blank" class="btn btn-success">FB Forum</a></div>
                                </div> <!-- .title-01 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- JS -->
        <script src="assets/js/plugins/animate-headline.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

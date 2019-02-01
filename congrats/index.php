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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="csi-logo.png" />
    <title>CSI-DTU</title>
    <!-- For tab coloring in-->
    <!--chrome firefox OS Opera-->
    <meta name="theme-color" content="#626A6D" />
    <!--Windows Phone-->
    <meta name="msapplication-navbutton-color" content="#626A6D" />
    <!--iOS Safari-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
  </head>
  <body>
    <canvas id="canvas"></canvas>
    <script src="effect.js" type="text/javascript"></script>
    <h1 id="text">
      C<span><img src="csi-logo.png" width="50px"/></span>ngratulations
    </h1>
  </body>
</html>

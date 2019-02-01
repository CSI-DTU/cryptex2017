<?php 
  require('../../core.php');
  require('../../functions.php');
  if((isset($_SESSION['access_token']) && !empty($_SESSION['access_token'])) && 
    (isset($_SESSION['userID']) && !empty($_SESSION['userID']))){
      header('Location: '.REDIRECTLINK);
  }
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cryptex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styleaudio.css">
  </head>

  <body data-vide-bg="video/ocean">
    <!-- Facebook API -->
    <script>
      function statusChangeCallback(response){
        if(response.status === 'connected'){
          $.post( "session.php",
                  { access_token: response.authResponse.accessToken ,
                    userID: response.authResponse.userID 
                  });
        }
      }

      function checkLoginStatus(){
        FB.getLoginStatus(res=>{
          statusChangeCallback(res);
          if(res.status === 'connected'){
            console.log("FB login success");
            window.location.href = '<?php echo REDIRECTLINK; ?>'
          }
        })
      }
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?php echo FBAPPID;?>',
          cookie     : true,
          xfbml      : true,
          version    : 'v3.2'
        });
        checkLoginStatus()
      };

      (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- MAIN TEXT -->
    <svg viewBox="0 0 800 600">
      <symbol id="s-text">
        <text text-anchor="middle"
              x="50%"
              y="25%"
              class="text--line"
              >
          CRYPTEX
        </text>
        <text text-anchor="middle"
              x="50%"
              y="68%"
              class="text--line2"
              >
          2019
        </text>
      </symbol>
      <g class="g-ants">
        <use xlink:href="#s-text"
          class="text-copy"></use>
        <use xlink:href="#s-text"
          class="text-copy"></use>
        <use xlink:href="#s-text"
          class="text-copy"></use>
        <use xlink:href="#s-text"
          class="text-copy"></use>
        <use xlink:href="#s-text"
          class="text-copy"></use>
      </g>
    </svg>
    <!-- LOGIN BUTTON -->
    <center>
      <br />
      <!-- <div class="fb-login-button" scope="public_profile,email,user_friends"
      onlogin="checkLoginState();" data-size="large" data-show-faces="false"
      data-auto-logout-link="true" value="LOGIN"></div> -->
      <div  
        class="fb-login-button" 
        scope="public_profile,email,user_friends" 
        data-size="large" 
        data-button-type="login_with" 
        data-auto-logout-link="true" 
        data-use-continue-as="false"
        onlogin="checkLoginStatus();"
      ></div>
    </center>
    <!-- SCRIPTS -->
    <script>window.jQuery || document.write('<script src="../dist/jquery.min.js"><\/script>')</script>
    <script src="../src/jquery.vide.js"></script>
    <script>
      
    </script>
  </body>
</html>

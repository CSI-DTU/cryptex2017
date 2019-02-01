<?php
  require('../core.php');
  require('../functions.php');
  if((isset($_SESSION['access_token']) && !empty($_SESSION['access_token'])) && 
    (isset($_SESSION['userID']) && !empty($_SESSION['userID']))){
      header('Location: '.REDIRECTLINK);
  }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>Welcome</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/cry.png">
		<!--CSS-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/bootstrap-light.css">
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!--/CSS-->

		<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery.plugin.js"></script>
		<script src="js/jquery.countdown.js"></script>
		<!--/JS-->

	</head>

	<body>
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
    <!-- /Facebook API -->

    <!--DARK OVERLAY-->
    <div class="overlay"></div>
    <!--/DARK OVERLAY-->

    <!--WRAP-->
    <div id="wrap">
      <!--CONTAINER-->
      <div class="container">
        <img src="images/logo.png" alt="Csi-dtu" class="image-align" />
        <h1>
          <span>Present`s</span><br/>
          <span class="yellow">CRYPTEX 2019</span>
        </h1>
        <?php 
          if(time() >= LAUNCH){
            ?>
            <center>
              <div  
                class="fb-login-button" 
                scope="public_profile,email,user_friends" 
                data-size="large" 
                data-button-type="login_with" 
                data-auto-logout-link="false" 
                data-use-continue-as="false"
                onlogin="checkLoginStatus();"
              ></div>
            </center>
            <?php 
          }else{
            ?>
            <p><strong>Coming Soon</strong> </p>
            <?php 
          } 
        ?>
        <!--<div id="defaultCountdown"></div>-->
        <p class="copyright">Proudly designed by <a target="_blank">CSI-DTU</a></p>
      </div>
      <!--/CONTAINER-->
    </div>
    <!--/WRAP-->

	</body>
</html>

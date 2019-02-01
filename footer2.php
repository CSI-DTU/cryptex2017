
 <footer class="android-footer mdl-mega-footer">
  <div class="mdl-mega-footer--top-section">
    <div class="mdl-mega-footer--left-section">
      <div class="mdl-typography--font-light">CRYPTEX 2018</div>
      <div class="mdl-typography--font-light">Copyright © 2018 CSI DTU</div>
      <div class="mdl-typography--font-light" ><a href="webteam.php">CSI Web Development Team</a></div>
    </div>
    <div class="mdl-mega-footer--right-section">
      <a class="mdl-typography--font-light" href="#top">
        Back to Top
        <i class="material-icons">expand_less</i>
      </a>
    </div>
    <div class="mdl-mega-footer--center-section">
      <center><img src="images/csilogo.png"><center>
    </div>
  </div>
  <div class="mdl-mega-footer--bottom-section">
    <a class="android-link mdl-typography--font-light" target="_blank" href="<?php echo DTUSITE;?>" >Visit CSI DTU Site</a>
    <a class="android-link mdl-typography--font-light" target="_blank" href="<?php echo COGENESISSITE;?>" >Visit Invictus Site</a>
    <a class="android-link mdl-typography--font-light" href="webteam.php">View Team</a>
    <a class="mdl-navigation__link" href="leaderboard.php">
    Your Rank: 
      <?php 
        if(isset($_SESSION['varname']))
          $var_value = $_SESSION['varname'];
        else
          $var_value = "loading...";
        echo $var_value; 
      ?>
    </a>
  </div>
</footer>

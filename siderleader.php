      <div class="android-drawer mdl-layout__drawer ">
        <header class="demo-drawer-header mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
          <img 
            src=" 
              <?php
                if(isset($_SESSION['pic']) && !empty($_SESSION['pic'])){
                  echo $_SESSION['pic'];
                }else{
                  echo "images/user.jpg";
                }
              ?>" 
            class="demo-avatar">
          <span>
            <?php echo $_SESSION["name"]; ?>
          </span>
        </header>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php">Home</a>
          <a class="mdl-navigation__link" href="leaderboard.php#me">LeaderBoard</a>
          <a class="mdl-navigation__link" href="leaderboard.php#me">Your Rank:   
            <?php 
              if(isset($_SESSION['varname']))
                $var_value = $_SESSION['varname'];
              else
                $var_value = "loading...";
              echo $var_value; 
            ?>
            </a>
          <a class="mdl-navigation__link" href="rules.php">Rules</a>
        </nav>
      </div>

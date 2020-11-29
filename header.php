
<header>
      <div class="logo"><a href="index.php">libera</a></div>
      <nav>
        <ul class="navigation">
          <li><a href="indexWithPHP.php">Downloads</a></li>
          <li><a href="#">Language</a></li>
          <li><a href="#">cart</a></li>
          <?php
          if(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"]){
            ?><li><a href="index.php"><?= $_SESSION["member"]->email?></a></li>
            <li>  <a href="logout.php"><b>Log out</b></a></li>
          <?php } else {
            ?><li><a href="signin.php"><b>Sign In</b></a></li><?php
          }
          ?> 
        </ul>
      </nav>
    </header>
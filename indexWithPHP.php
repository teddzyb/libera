<!DOCTYPE html>
<html>
  <head>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="icon" href="favicon.ico">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <script src='script.js' type="text/javascript"></script>
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="logo"><h5>GoLaundry</h5></div>
      <nav>
        <ul class="navigation">
          <li><a href="#"><b>Log In</b></a></li>
        </ul>
      </nav>
    </header>

    <!-- BODY -->

    <div class="main-body">
      <div class="left-body">
        
      </div>
      <div class="right-body">
        <div class="floating-div">
          <form action="Sign Up.html">
            <div class="signup">
              <button type="submit" name="signup">Sign Up!</button>
            </div>
          </form>
          <h4>The laundry you<br>need, we deliver.</h4>
          <p class="floating-div-p1">Enter your street and house number</p>
          <form action="validate.php" method="POST">
            <div id="input">
              <input type="text" name="add" id="address" placeholder="123-B Kilid-Kilid St. Cebu City">
              <button type="submit" name="dd" id="submitAddress">Order Now!</button>
              <?php if(isset($error)){ ?>
              <p style="color: red; position: absolute; top: 435px;left:960px;font-size: 10px"><?=$error ?></p>
              <?php }?>
            </div>
          </form>
          <p class="floating-div-p2">Or search location via</p>
          <span class="iconify" data-inline="false" data-icon="ri:gps-fill"></span><br>
          <span class="iconify" data-inline="false" data-icon="zmdi:google-maps"></span>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
  </body>

  <!-- FOOTER -->

  <footer>
    <div class="footmain">
      <h5 id="foot_logo">COMP NAME</h5>
      <a href="#">Info</a>&nbsp•&nbsp
      <a href="#">Support</a><br>
      <a href="#">Terms of Use</a>&nbsp•&nbsp<a href="#">Privacy Policy</a>
      <div class="reserve">@2020 COMP NAME ALL RIGHTS RESERVED</div>
    </div>
  </footer>

</html>

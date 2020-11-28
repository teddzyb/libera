<html>
            <head>
                <?php include "htmlhead.php";?>
            </head>
            <body>
                 <!-- HEADER -->
    <header>
      <div class="logo">CompLOGO</div>
      <nav>
        <ul class="navigation">
          <li><a href="indexWithPHP.php">Downloads</a></li>
          <li><a href="#">Language</a></li>
          <li><a href="#">cart</a></li>
          <li><a href="#"><b>Sign in</b></a></li>
        </ul>
      </nav>
    </header>

    <!-- BODY -->

    <div class="main-body">
      <div class="left-body">
        
      </div>
      <div class="right-body">
        <div class="floating-div">
          <div class="signup">
            <button type="button" name="signup">Sign Up!</button>
          </div>
          <h4>The laundry you<br>need, we deliver.</h4>
          <p class="floating-div-p1">Order a laundry service</p>
          <form action="index.php" method="get">
            <div id="input">
              <input type="text" name="city" id="address" placeholder="Enter street and house number">
              <button type="submit" name="submitAddress" id="submitAddress">Order Now!</button>
            </div>
          </form>
          <p class="floating-div-p2">Or search location via</p>
          <span class="iconify" id="icon1" data-inline="false" data-icon="ri:gps-fill"></span>
          <h5 id="GPS">GPS</h5>
          <span class="iconify" id="icon2" data-inline="false" data-icon="zmdi:google-maps"></span>
          <h5 id="Maps">Maps</h5>
        </div>
      </div>
    </div>
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
            </body>
        </html>
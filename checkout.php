<?php include "db.php"?>
<?php
  try{
    if(!isset($_GET["city"])){
      throw new Exception("shop information not found");
    }
  ?>
  <html>
  <?php include "htmlhead.php"?>
  <title>libera — home</title>
  <link rel="stylesheet" href="checkout.css" type="text/css">
  
  <body>

    <!-- HEADER -->
    <header>
      <div class="logo"><a href="index.html">libera</a></div>
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
    <img src="images/shop.jpg" id="cover">
    <div class="main-body">
      <div class="leftdiv">
        <h2><?=$_GET['city']?></h2>
        <span class="iconify blue" data-inline="false" data-icon="ic:baseline-location-on"></span>
        <p>I. Villa St, Apas, Cebu City</p><br>
        <span class="iconify blue" data-inline="false" data-icon="bx:bx-purchase-tag-alt"></span>
        <p>P29/kilo</p>
        <h3>Delivery Information</h3>
        <span class="iconify" data-inline="false" data-icon="bx:bx-user"></span>
        <input required type="text" value=""><br>
        <span class="iconify" data-inline="false" data-icon="ph:house"></span>
        <input readonly type="text" value="address" id="address"><br>
        <span class="iconify" data-inline="false" data-icon="bx:bx-phone"></span>
        <input required type="text" value="">
        <h5>Additional Notes:</h5>
        <textarea type="text" value="" id="notes" class="indent" rows="4" cols="50"></textarea><br>

      </div>
      <div class="rightdiv">
        <p id="spaceaboveman">Order Summary</p>
        <div class="topright">
          <div class="loads">
            <img src="images/small.png">
            <p>Small Load</p>
            <input type="radio" value="" class="number"><br>
            <img src="images/medium.png">
            <p>Medium Load</p>
            <input type="radio" value="" class="number"><br>
            <img src="images/large.png">
            <p>Large Load</p>
            <input type="radio" value="" class="number">
          </div>
          <hr class="solid">
          <div class="prices">
            <p>Subtotal</p><p class="right">P0.00</p><br>
            <p>Delivery Fee</p><p class="right">P0.00</p><br>
            <p>Discount</p><p class="right">P0.00</p><br>
            <p>Total</p><p class="right">P0.00</p>
          </div>
        </div>
        <div class="bottomright">
          <h5 id="nomargin">Payment Method</h5>
          <input type="radio">
          <p>Online Payment</p><br>
          <input type="radio">
          <p>COD</p>
        </div>
        <form action="sad.php">
        <input type="submit" value="Confirm Order" class="indent" id="confirm">
  </form>
      </div>
      
    </div>



  </body>

  <!-- FOOTER -->

  <footer>
    <div class="footmain">
      <h5 id="foot_logo">libera</h5>
      <a href="#">Info</a>&nbsp•&nbsp
      <a href="#">Support</a><br>
      <a href="#">Terms of Use</a>&nbsp•&nbsp<a href="#">Privacy Policy</a>
      <div class="reserve">@2020 LIBERA&nbsp ALL RIGHTS RESERVED</div>
    </div>
  </footer>

</html>
<?php
  }catch (Exception $e){
    echo $e->getMessage();
}
?>

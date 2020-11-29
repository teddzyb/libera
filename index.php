<?php include_once "db.php";?>

<?php
try{
    if(isset($_GET["city"])){
        $filter = preg_replace("/[^a-zA-Z]/","",$_GET["city"]);
        $filter = strtolower($filter);
        $query = " SELECT * FROM city WHERE ";
        $param = [];
        if(!empty($_GET["city"])){
            $query .= " city=:city ";
            $param[":city"] = $filter;
        }
        $statement = $connection->prepare($query);
        $result = $statement->execute($param);
        $city = $statement->fetchObject();
        if(!$result){
           throw new Exception("<script>alert('Please enter something'); window.location.href = 'index.php';</script>");
        } elseif ($statement->rowCount()==0){
            throw new Exception("<script>alert('City not found. Please enter values from the examples in textbox'); window.location.href = 'index.php';</script>");
        }
        ?>
        <?php include "laundryshop.php"?>
        <?php
    }
    else{
        ?>
        <html>
            <head>
                <?php include "htmlhead.php";?>
                <link rel="stylesheet" href="index1.css" type="text/css">
            </head>
            <body>
                 <!-- HEADER -->
    <?php include "header.php"?>
    <!-- BODY -->
    <div class="main-body">
      <div class="left-body">
        
      </div>
      <div class="right-body">
        <div class="floating-div">
          <h2>The laundry you<br>need, we deliver.</h2>
          <p class="floating-div-p1">Order a laundry service</p>
          <form action="index.php" method="get">
            <div id="input">
              <input type="text" name="city" id="address" placeholder="Enter City e.g. Manila, Lapu-Lapu, Cebu">
              <button type="submit" name="submitAddress" id="submitAddress"><b>Book a Laundry Service!</b></button>
            </div>
          </form>
          <p class="floating-div-p2">Or search location via</p>
          <span class="iconify" id="icon1" data-inline="false" data-icon="ri:gps-fill"></span>
          <p id="GPS">GPS</p>
          <span class="iconify" id="icon2" data-inline="false" data-icon="zmdi:google-maps"></span>
          <p id="Maps">Maps</p>
        </div>
      </div>
    </div>
    <div class="main_body">
      <div class="body_rows">
        <div class="body_col1">
          <img src="location.svg" alt="clip art" class="clip_art">
        </div>
        <div class="body_col2">
          <h3>Make a Booking</h3>
          <aside class="clip_descrip">Book now and we’ll collect your laundry at your chosen time and location.</aside>
        </div>
      </div>

      <div class="body_rows" id="row2">
        <div class="body_col2" id="bod_row2">
          <h3>We deliver</h3>
          <aside class="clip_descrip">We deliver your fresh clean clothes back at your doorstep at your chosen time.</aside>
        </div>
        <div class="body_col1" id="bod_row2">
          <img src="deliver.svg" alt="clip art" class="clip_art">
        </div>
      </div>

      <div class="body_rows">
        <div class="body_col1">
          <img src="delivered.svg" alt="clip art" class="clip_art">
        </div>
        <div class="body_col2">
         <h3>Suit Up</h3>
          <aside class="clip_descrip">Wear your freshly laundered clothes and look the best you can be.</aside>
        </div>
      </div>

    </div>

    <div class="interested">
      <div class="iheader_section">
        <h1>Interested?</h1>
        <p>Fill in the form below to become our partner</p>
      </div>
      <div class="desc_section">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>


      <div class="main_fill_out">
        <form method="#">
          <div id="fill_out">
            <input type="text" class="shop_input" name="shop_name" id="shop_name" placeholder="Shop Name">
          </div>
          <div id="fill_out">

            <input type="text" class="shop_input" name="shop_city" id="shop_city" placeholder="City">
          </div>
          <div id="fill_out">

            <textarea id="shop_desc" name="shop_desc" rows="5" cols="85" placeholder="Description">

            </textarea>
          </div>
          <div id="fill_out">
            <button type="submit" name="submitAddress" id="submit_fill_out"><b>JOIN US NOW!</b></button>
          </div>
        </form>
      </div>
    </div>
  </body>

  <!-- FOOTER -->
  <?php include "footer.php"?>
        </body>
        </html>
<?php
    }
}catch (Exception $e){
    echo $e->getMessage();
}



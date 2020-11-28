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
        if(!$result){
           throw new Exception("<script>alert('Unable to search'); window.location.href = 'index.php';</script>");
        } elseif ($statement->rowCount()==0){
            throw new Exception("<script>alert('City not found'); window.location.href = 'index.php';</script>");
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
                <link rel="stylesheet" href="index.css" type="text/css">
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
              <input type="text" name="city" id="address" placeholder="Enter City">
              <button type="submit" name="submitAddress" id="submitAddress"><b>Order Now!</b></button>
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
        <section class="body_col2">
         <h2>H2 Headline</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </section>
      </div>
      <div class="body_rows">
        <div class="body_col1">
          <h2>H2 Headline</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <section class="body_col2">
          <img src="deliving.svg" alt="clip art" class="clip_art">
        </section>
      </div>
      <div class="body_rows">
        <div class="body_col1">
          <img src="delivered.svg" alt="clip art" class="clip_art">
        </div>
        <section class="body_col2">
         <h2>H2 Headline</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </section>
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



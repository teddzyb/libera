<?php include_once "db.php";?>

<?php
  try {
    $query = "SELECT * FROM city ";
    $query .= "WHERE city=:city";
    $statement = $connection->prepare($query);
    $statement->execute([
      ":city" => $filter
    ]);
  } catch (Exception $e){
    echo $e->getMessage();
  }
  //var_dump($city->id);
?>
  <head>
    <?php include "htmlhead.php"?>
    <title>Pick Store!</title>
    <link rel="stylesheet" href="shop.css" type="text/css">
  </head>
  <body>
    <?php include "header.php"?>
    <div class="mainrow1">
      <div class="pick_search">
        <h1 id="pick">
          Pick a laundry shop <?php 
          if(isset($_SESSION["is_logged_in"]) && $_SESSION["is_logged_in"]){
            $parts=explode("@", $_SESSION["member"]->email); 
            $username = $parts[0]; 
            echo $username;
          }?>
        </h1>
        <input type="text" placeholder="   Search Laundry Shop">
        <h3 class="shop_category">
          Exclusive for <?=$city->output_city?>
        </h3>
      </div>
      <div class="exclusive_shops">
        <?php include "divloop.php";?>
      </div>
    <div class="mainrow2">
      <div class="all_shop">
        <h3 class="shop_category">
          <br>All Shops
        </h3>
      </div>
      <div class="exclusive_shops">
        <?php include "divloop.php";?>
    </div>
    <div class="paragraph">
      <div class="sub_par">
        <p>
          <h2>
            Lorem Ipsum
          </h2>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="sub_par">
        <h2>
          Lorem Ipsum
        </h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>

  </body>

  <?php include "footer.php"?>
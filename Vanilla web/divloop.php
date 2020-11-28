    <?php
    $query = "SELECT
    (shop1 IS NOT NULL) +
    (shop2 IS NOT NULL) +
    (shop3 IS NOT NULL) +
    (shop4 IS NOT NULL) +
    (shop5 IS NOT NULL) +
    (shop6 IS NOT NULL) +
    (shop7 IS NOT NULL) +
    (shop8 IS NOT NULL) +
    (shop9 IS NOT NULL) +
    (shop10 IS NOT NULL) AS Number
    FROM city
    WHERE city = :city";
    $statement = $connection->prepare($query);
    $statement->execute([
      ":city" => $_GET["city"],
    ]);
    $number = $statement->fetchObject();
    $max = $number->Number;
    for($i=1;$i<=$max;$i++){
        $shop = "shop";
        $hold = $city->{$shop . $i};
        if($hold === NULL){
        continue;
        }else{
            echo "<div class='shop'>
            <div class='image'></div>
            <div class='shop_name'>" . $hold . "
              <div class='subhead'>
                Lorem Ipsum
              </div>
            </div>
            <hr>
            <div class='shop_description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
            </div>";
        }
    }
    ?>
          
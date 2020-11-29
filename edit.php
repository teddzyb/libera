<?php
include_once "db.php";
include_once "header.php";
?>
<html>
<head><link rel="stylesheet" href="index1.css" type="text/css"></head>
<?php
try{
    if(!isset($_GET["id"])){
        throw new Exception("id information not found");
    }
}catch(Exception $e){
    echo $e->getMessage();
}
include_once "footer.php";
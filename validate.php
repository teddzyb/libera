<?php
    $address ="";
    $error = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $address = $_POST['add'];
        if(!empty($address)){  
            header("Location: laundryshop.html");
            exit;
        } else {
            $error = '* Please enter address *';
        }
    }
    include('anotherindex.php');
?>

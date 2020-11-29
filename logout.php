<?php
    include_once "db.php";
    include_once "header.php";
    $_SESSION["is_logged_in"] = false;
    unset($_SESSION["member"]);
    echo "<script>alert('Successfully Logged Out!'); window.location.href = 'index.php';</script>";
    include_once "footer.php";

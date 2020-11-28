<?php
$DB_Name = "maps";
$DB_User = "root";
$DB_Pass = "";
$DB_Host = "localhost";

$connection = new PDO("mysql:host=$DB_Host;dbname=$DB_Name",$DB_User,$DB_Pass);
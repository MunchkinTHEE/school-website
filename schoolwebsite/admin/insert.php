<?php
//CONNECTION TO DB
require_once("connection.php")

//COLLECTING VALUE
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$sql="INSERT INTO "
?>
<?php

$firstName = $_POST["fn"];
$lastName = $_POST["ln"];
$mobile = $_POST["m"];
$password = $_POST["p"];
$city = $_POST["c"];

$dbms = new mysqli("localhost","root","Watchdogs09,","chat_app","3306");
$q = "INSERT INTO user(`first_name`,`last_name`,`mobile`,`password`,`city`) VALUE('".$firstName."','".$lastName."','".$mobile."','".$password."','".$city."');";

$dbms->query($q);

?>

<script src="script.js"></script>
<script>goToSignIn();</script>

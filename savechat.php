<?php

session_start();

$form = $_SESSION["id"];
$to = $_POST["t"];
$content = $_POST["co"];
$date = date("Y-m-d H:i:s");

$dbms = new mysqli("localhost","root","Watchdogs09,","chat_app","3306");
$q1 = "INSERT INTO chat(`content`,`user_from`,`user_to`,`date_time`) VALUE ('".$content."','".$form."','$to','".$date."');";
$dbms->query($q1);

?>
<script src="script.js"></script>
    <script>
        goToIndex();
    </script>

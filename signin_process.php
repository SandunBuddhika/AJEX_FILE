<?php

session_start();

$mobile = $_POST["m"];
$password = $_POST["p"];

$dbms = new mysqli("localhost", "root","Watchdogs09,","chat_app", "3306");
$q = "SELECT * FROM user WHERE `mobile`='" . $mobile . "' AND `password`='" . $password . "';";

$resultset = $dbms->query($q);

if ($resultset->num_rows == 1) {
    
    $r = $resultset->fetch_assoc();

    $id = $r["id"];
    $firstName = $r["first_name"];
    $lastName = $r["last_name"];
    $city = $r["city"];

    $_SESSION["id"] = $id;
    $_SESSION["fn"] = $firstName;
    $_SESSION["ln"] = $lastName;
    $_SESSION["city"] = $city;
    $_SESSION["mobile"] = $mobile;
?>
    <script src="script.js"></script>
    <script>
        goToIndex();
    </script>
<?php
} else {

?>
    <script src="script.js"></script>
    <script>
        goToSignIn();
    </script>
<?php
}
?>
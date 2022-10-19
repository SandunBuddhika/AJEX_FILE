<?php

session_start();

$dbms = new mysqli("localhost", "root", "Watchdogs09,", "chat_app", "3306");
$q = "SELECT * FROM chat WHERE `user_from`='" . $_SESSION['id'] . "' OR `user_to`='" . $_SESSION['id'] . "' ;";
$resultset = $dbms->query($q);
$r = $resultset->num_rows;

for ($x = 0; $x < $r; $x++) {
    $d = $resultset->fetch_assoc();
    $first1 = $d["user_from"];


    $q1 = "SELECT * FROM user WHERE `id`='" . $first1 . "';";
    $resultset1 = $dbms->query($q1);
    $d1 = $resultset1->fetch_assoc();



?>
    <p><?php echo $d["content"]; ?> :<span class="span1"><?php echo $d1["first_name"]; ?></span></p>
<?php

}
?>
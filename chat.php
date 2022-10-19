<?php

session_start();

if (isset($_SESSION["id"])) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="chat_css.css" />
    </head>

    <body onload="n();">
        <h1>Hi <?php echo $_SESSION["fn"] . " " . $_SESSION["ln"]; ?></h1>
        <h2><?php echo $_SESSION["mobile"]; ?></h2>
        <h2><?php echo $_SESSION["city"]; ?></h2>

        <form action="savechat.php" method="POST">
            <select class="s1" name="t">
                <?php
                $dbms = new mysqli("localhost", "root", "Watchdogs09,", "chat_app", "3306");
                $q = "SELECT * FROM user WHERE `id`!='" . $_SESSION['id'] . "' ORDER BY `first_name` ASC;";
                $resultset = $dbms->query($q);
                $r = $resultset->num_rows;

                for ($i = 0; $i < $r; $i++) {
                    $d = $resultset->fetch_assoc();
                ?>
                    <option value="<?php echo $d['id'] ?>"><?php echo $d["first_name"] . " " . $d["last_name"]; ?></option>
                <?php
                }

                ?>
            </select>

            <div class="d1" id="d">
                <?php
                $dbms = new mysqli("localhost", "root", "Watchdogs09,", "chat_app", "3306");
                $q = "SELECT * FROM chat WHERE `user_from`='" . $_SESSION['id'] . "' OR `user_to`='" . $_SESSION['id'] . "' ;";
                $resultset = $dbms->query($q);
                $r = $resultset->num_rows;
                
                for ($x = 0; $x < $r; $x++) {
                    $d = $resultset->fetch_assoc();
                    $first1 = $d["user_from"];


                    $q1 = "SELECT * FROM user WHERE `id`='" . $first1. "';";
                    $resultset1 = $dbms->query($q1);
                    $d1 = $resultset1->fetch_assoc();

                    

                ?>
                    <p><?php echo $d["content"]; ?>  :<span class="span1"><?php echo $d1["first_name"]; ?></span></p>
                <?php

                }

                ?>
            </div>
            <input class="t1" type="text" name="co" />

            <button class="b1" type="submit">Send</button>
        </form>
        <script src="script.js"></script>
    </body>


    </html>

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
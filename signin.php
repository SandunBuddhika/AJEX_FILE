<?php

session_start();

if (isset($_SESSION["id"])) {
?>
    <script src="script.js"></script>
    <script>
        goToIndex();
    </script>
<?php
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Chat App - Sign In</title>
    </head>

    <body>

        <form action="signin_process.php" method="POST">
            <h1>Sign In</h1>
            <span >Mobile</span>
            <input type="text" name="m" />

            <br /><br />

            <span>password</span>
            <input type="password" name="p" />

            <br /><br />

            <button type="submit">Sign In</button>
        </form>
        <button onclick="goToSignUp();">New User? Sign Up</button>

        
        <script src="script.js"></script>
    </body>
    
    
    </html>
<?php
}
?>
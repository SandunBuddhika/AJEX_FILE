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
    <DOCTYPE html>

    <html>

    <head>
        <title>Chat App - Sign Up</title>
    </head>

    <body>

        <form action="signup_process.php" method="POST">
            <h1>Sign Up</h1>

            <Span>First Name</Span>
            <input type="text" name="fn" />

            <span>Last Name</span>
            <input type="text" name="ln" />

            <br /><br />

            <span>Mobile</span>
            <input type="text" name="m" />

            <br /><br />

            <span>Password</span>
            <input type="password" name="p" />

            <br /><br />

            <span>City</span>
            <select name="c">
                <option>Colombo</option>
                <option>Kandy</option>
            </select>

            <br /><br />

            <button type="submit">Sign Up</button>
        </form>
        <button onclick="goToSignIn();">Sign In</button>


        <script src="script.js"></script>
    </body>

    </html>
<?php
}
?>
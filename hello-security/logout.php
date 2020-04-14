<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
    </head>
    <body>
    <a href="index.php"> Take me home, country roads ... </a> <br>
        <?php
            session_start();
            session_unset();
            session_destroy();

            echo("Logged out.");
        ?>
    </body>
</html>

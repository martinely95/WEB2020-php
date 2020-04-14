<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello security</title>
</head>
<body>
<a href="signup.html"> sign up </a> <br>
<a href="login.html"> login </a> <br>
<a href="list-users.php"> list users </a> <br>
<a href="logout.php"> logout </a> <br>

<?php
session_start();
if (isset($_SESSION["email"])) {
    echo("You are authenticated as user: " . $_SESSION["email"]);
} else {
    echo("You are not authenticated");
}
?>

</body>
</html>

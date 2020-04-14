<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<a href="index.php"> Take me home, country roads ... </a> <br>
<?php
include "db-connection.php";
$conn = openCon();

$sql = "SELECT * from person where email = '" . htmlentities($_POST["email"]) . "' and password = '" . htmlentities($_POST["password"]) . "';";

$resultSet = $conn->query($sql) or die("Failed to query from DB!");

$firstrow = $resultSet->fetch(PDO::FETCH_ASSOC) or die ("Not valid credentials.");

echo("Hello " . $firstrow['firstname'] . " you are now logged in.");

session_start();
$_SESSION["email"] = $firstrow['email'];

?>
</body>
</html>

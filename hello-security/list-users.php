<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<a href="index.php"> Take me home, country roads ... </a> <br>
<?php
session_start();
if (!isset($_SESSION["email"])) {
    die("Only authenticated users are allowed");
}

include "db-connection.php";
$conn = openCon();

$sql = "SELECT * from person where email = '" . $_SESSION["email"] . "';";
$resultSet = $conn->query($sql) or die("Failed to query from DB!");
$firstrow = $resultSet->fetch(PDO::FETCH_ASSOC) or die ("User not found.");

$sql = "SELECT * from person;";

$resultSet = $conn->prepare($sql);
$resultSet->execute();

echo("The users in the system are: <br>");
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
    echo $row['email'] . " " . $row['firstname'] . " " . $row['role'];
    echo "<br>";
}
?>
</body>
</html>

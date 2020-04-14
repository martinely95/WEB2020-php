<?php
include "db-connection.php";
$conn = openCon();

$sql = "SELECT * from person where email = '" . htmlentities($_POST["email"]) . "' and password = '" . htmlentities($_POST["password"]) ."';" ;

echo "$sql";

$resultSet = $conn -> query($sql) or die("Failed to query from DB!");

$firstrow = $resultSet->fetch(PDO::FETCH_ASSOC) or die ("Not valid credentials.");

echo ("Hello " . $firstrow['firstname']. " you are now logged in.");

session_start();
$_SESSION["email"] = $firstrow['email'];

?>

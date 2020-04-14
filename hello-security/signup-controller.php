<?php
include "db-connection.php";

$conn = openCon();

$sql = "INSERT INTO person (email, firstname, password, role) values ('"
  . htmlentities($_POST["email"]) . "', '" 
  . htmlentities($_POST["firstname"]). "', '"
  . htmlentities($_POST["password"]) . "', '"
  . htmlentities($_POST["role"]) . "');";
// echo ("sql: " . $sql);  
if (!$conn -> query($sql)) {
  echo("Error description: " . $conn -> error);
} else {
	echo("You are registered as: " . $_POST["email"] . " with role: " .  $_POST["role"]);
}
?>




<?php
function openCon()
{
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "hello-security";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    return $conn;
}

?>
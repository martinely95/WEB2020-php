<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
    <title>Get ready to hack</title>
</head>
<body>

<?php
function executeQuery($sql = "select 1;")
{
    // usually this is configured in configuration files and not directly used in code
    // just don't publish passwords in a public repository, please
    $conn = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo $row[0];
        echo "<br>";
    }
}

executeQuery();

echo "<br>";

executeQuery("SELECT table_name FROM information_schema.tables;");

?>

</body>
</html>

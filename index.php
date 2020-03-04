<!DOCTYPE html>
<html>
<head>
<meta content="text/html" http-equiv="Content-Type">
<title>Solution task1</title>
</head>

<body>
<h1> Solution </h1>

<?php
echo "<table>";
for ($i = 1; $i < 10; $i++) {
	echo "<tr>";
	echo "<th>$i</th>";
	
	for ($j = 2; $j < 10; $j++) {
		if ($i == 1) {
			echo "<th>$j</th>";
		}
		else {
			echo "<td>".($i * $j)."</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

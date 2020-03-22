<!DOCTYPE html>
<html>
<head>
	<title>Multiplication table</title>
	
	<style>
		body
		{
			text-align: center;
		}
		th, td
		{
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
		table
		{
			text-align: center;
			border: 2px solid black;
		}
		th
		{
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<h1>Multiplication table</h1>
	<br>
	<table align="center">
		<?php
			echo "<tr>";
			for($i = 1; $i <= 9; $i++)
			{
				echo "<tr>";
				
				for($j = 1; $j <= 9; $j++)
				{
					$product = $i*$j;
					
					if($i == 1 || $j == 1)
					{
						echo "<th>$product</th>";
					}
					else
					{
						echo "<td>$product</td>";
					}
				}
			}
		?>
	</table>
</body>
</html>
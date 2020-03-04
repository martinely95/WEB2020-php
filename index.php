<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<title>Get ready to hack</title>
	
	<style>
		body
		{
			display: flex;
			justify-content: center;
		}
		
		th, td 
		{
			border: 1px solid black;
		}
		
		table
		{
			border: 2px solid black;
			text-align: center;
		}
		
		td
		{
			width: 50px;
			height: 50px;
		}
		
		th
		{
			width: 50px;
			height: 50px;
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<table>
		<?php
		
			for($i = 1; $i <=9; $i++)
			{
				echo "<tr>";
				
				for($j = 1; $j <=9; $j++)
				{
					// echo "<td ";
					
					// if($i == 1 || $j == 1)
					// {
						// echo 'style="background-color: lightgray"';
					// }
					// echo ">" . $i*$j . "</td>";
					
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
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>

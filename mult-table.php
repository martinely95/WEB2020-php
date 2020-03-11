<?php

echo '<p>Hello fmi. Get ready to hack.</p>';

echo '<p>Pssst.. any fmi ideas go <a href="https://fss.fmi.uni-sofia.bg/za-nas/kutiq-za-idei/" target="_blank">here</a></p>';

echo "<table>";

for($i = 1; $i < 10; $i++)
{
	echo "<tr>";
	for($j = 1; $j < 10; $j++)
    {
	    if ($i == 1 || $j == 1)
		{
			echo "<th>".($i*$j)."</th>";
		}
		else
		{
			echo "<td>".($i*$j)."</td>";
		}
    }
	echo "</tr>";
}

echo "</table>";

?>
<?php

echo "<table>";
for ($i = 1; $i < 10; $i++){
    echo "<tr>";
    for($j = 1; $j < 10; $j++){
        if ($j == 1 || $i == 1) echo "<th>";
        else echo "<td>";
        $res = $i * $j;
        echo "$res ";
        if($j == 1 || $i == 1 )echo "</th>";
        else echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

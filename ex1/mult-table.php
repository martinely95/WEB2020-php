<?php 

$rows = 10;
$cols = 10;

echo "<table border=\"2\">";

        for ($row =1; $row < $rows; $row++){

            echo'<tr>';

            for ($col = 1; $col < $cols; $col++) {
                if ($row === 1 || $col == 1) {
                    echo '<th>' .$col*$row.'</th>';
                } else {
                echo '<td>' .$col*$row.'</td>';
                }
            }
           echo'<tr>';

        }

  echo"</table>";

?>
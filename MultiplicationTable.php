<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html" http-equiv="Content-Type" />
        <title>Multiplication table</title>
    </head>
    <body>
        <h1>Multiplication table</h1>
        <?php
        echo "<table>";
            for ($i=1; $i <= 9; $i++) {
            echo "<tr>"; 
            echo "<th>$i</th>";
            for ($j=2; $j <= 9; $j++) { 
                if ($i == 1) {
                    echo "<th>$j</th>";
                }else {
                    echo "<td>".($i*$j)."</td>";
                }
            }
            echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
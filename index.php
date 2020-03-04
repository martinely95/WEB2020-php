<!DOCTYPE html>
<html>
    <head>
        <title> Таблица за умножение </title>
</head>
<body>
    <table border="1">
        
        <thead> 
            <tr>
                <th> 1</th>
                <th> 2</th>
                <th> 3</th>
                <th> 4</th>
                <th> 5</th>
                <th> 6</th>
                <th> 7</th>
                <th> 8</th>
                <th> 9</th>
            </tr>
        </thead>
        <tbody>
           
        <?php
         for ($i=2; $i<10; $i++)
        {
              echo ' <tr>';
                for ($j=1; $j<10; $j++) 
                {
                    $x=$i*$j;
                    if ($j==1) echo "<th>$x</th>";
                    else echo "<td>$x</td>"; 
                }
                
           echo '</tr>';
        }
        ?>
        
        </tbody>
                
    </table>
 </body>
</html>

<?php
  //Task1 - Table
  echo "<table>";

  //row
  for($i=1; $i<10; $i++){  
    echo "<tr>";
    //cow
    for($j=1; $j<10; $j++){
      if($i == 1 || $j == 1){
        echo "<th>" . $i*$j . "</th>";
      } else{
      echo "<td>" . $i*$j . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
  ?>
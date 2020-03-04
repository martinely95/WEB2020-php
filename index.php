<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<title>Get ready to hack</title>
</head>
<body>
	<?php

	echo '<p>Hello fmi. Get ready to hack.</p>';

	echo '<p>Pssst.. any fmi ideas go <a href="https://fss.fmi.uni-sofia.bg/za-nas/kutiq-za-idei/" target="_blank">here</a></p>';

	?>

	<br/>

	<?php
  $myAge = 16;            // a PHP Integer
  $yourAge = 15.5;        // a PHP Float
  $hasHair = true;        // a PHP Boolean
  $greeting = 'Hello';    // a PHP String
  $name = 'Student';

  $added = $myAge + $yourAge;
  $concatenated = $greeting . ' ' . $name;
  $interpolated = "$greeting $name";

  echo "$added <br/>";
  echo "$interpolated <br/>";
  ?>

  <br/>

  <?php
  function sum($first, $second) {
  	return $first + $second;
  }

  function makeCoffee($type = "cappuccino") {
  	return "Making a cup of $type.\n";
  }
  echo makeCoffee();        // Making a cup of cappuccino.
  echo makeCoffee(null);    // Making a cup of .
  echo makeCoffee("mocha"); // Making a cup of mocha.
  ?>
  
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
</body>
</html>

<!DOCTYPE html>
<html lang="en">
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

  <br/>

  <?php
  $arr = array(1, 2, 3, 4); // Indexed array
  $arr = [1, 2, 3, 4];      // same

  foreach ($arr as $value) {
  	echo $value;
  }


  echo "<br/>";

  $array = array(           // Associative array
  	"foo" => "bar",
  	"bar" => "foo",
  );

  foreach ($arr as $key => $value) {
  	echo "$key -> $value\n";
  	echo "<br/>";
  }
  ?>

  <br/>
  <?php
  var_dump($_SERVER);
  echo "<br/>";
  echo "<br/>";
  var_dump($GLOBALS);
  echo "<br/>";
  echo "<br/>";
  var_dump($_SESSION);
  echo "<br/>";
  echo "<br/>";
  var_dump($_GET);
  echo "<br/>";
  echo "<br/>";

  print_r($_SERVER);   

  $colors = array(           // Associative array
  	"roses" => "red",
  	"violets" => "blue",
  );

  $text = <<<EOF
  Roses are {$colors['roses']},
  Violets are {$colors['violets']}.
  I know it is sad,
  but you have homework to do.
EOF;
// do not forget to remove the indentation above... error 500

  echo "<br/>";
  echo "<br/>";

  echo $text;
  echo "<br/>";
  ?>
</body>
</html>

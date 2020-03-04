<!DOCTYPE html>
<html>
<head>
   <meta content="text/html"; charset="UTF-8" http-equiv="Content-Type" />
	<title>Multiplication table</title>
</head>
<body>
<h1>Multiplication table</h1>

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

<form>
    <label for="course-title">Име на предмета</label>
        <input type="text" id="course-title" name="title">
	<br>
	<label for="lecturer">Преподавател</label>
        <input type="text" id="lecturer" name="lecturer">
	<br>
    <label for="description">Описание</label>
        <input type="text" id="description" name="description">
	<br>
	Група
	<br>
	<label> <input type="radio" name="group" value="math">М</label>
	<br>
	<label> <input type="radio" name="group" value="appl-math">ПМ</label>
	<br>
	<label> <input type="radio" name="group" value="base-cs">ОКН</label>
	<br>
	<label> <input type="radio" name="group" value="core-cs">ЯКН</label>
	<br>
	<label for="credits">Кредити</label>
	    <input type="number" id="credits" name="credits">
</form>

<?php
$valid = array();
$errors = array();

if ($_POST) {
$title = $_POST['title'];
$lecturer = $_POST['lecturer'];
$description = $_POST['description'];
$group = $_POST['group'];
$credits = $_POST['credits'];

if (!$title) {
$errors['title'] = 'Име на предмета е задължително поле.';
} elseif (strlen($title) > 150) {
$errors['title'] = 'Името на предмета има максимална дължина 150 символа.';
} else {
$valid['title'] = $title;
}

if (!$lecturer) {
$errors['lecturer'] = 'Преподавател е задължително поле.';
} elseif (strlen($lecturer) > 200) {
$errors['lecturer'] = 'Преподавател има максимална дължина 200 символа.';
} else {
$valid['lecturer'] = $lecturer;
}

if (!$description) {
$errors['description'] = 'Описание е задължително поле.';
} elseif (strlen($description) < 10) {
$errors['description'] = 'Описание има минимална дължина 10 символа.';
} else {
$valid['description'] = $description;
}

if (!$group) {
$errors['group'] = 'Задължително трябва да изберете точно една група.';
}

if (!$credits) {
$errors['credits'] = 'Кредити е задължително поле.';
} elseif ($credits < 0) {
$errors['credits'] = 'Кредити е цяло положително число.';
} else {
$valid['credits'] = $credits;
}

}
?>

</body>
</html>
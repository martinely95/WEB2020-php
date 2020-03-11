<!DOCTYPE html>
<html>
<head>
   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<title>Multiplication table</title>
</head>
<body>
<h1>Multiplication table</h1>

<?php include './mult-table.php';?>

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

<?php include './valid-form.php';?>

</body>
</html>
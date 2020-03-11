<!DOCTYPE html>
<html>
<head>
   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<title>Multiplication table</title>
</head>
<body>
<h1>Multiplication table</h1>

<?php include './mult-table.php';?>

<form action="./valid-form.php" method="POST">
    <label for="course-title">Име на предмета</label>
    <input type="text" id="course-title" name="title">
	<br>
	<label for="lecturer">Преподавател</label>
	<input type="text" id="lecturer" name="lecturer">
	<br>
    <label for="description">Описание</label>
    <input type="text" id="description" name="description">
	<br>
	<label for="group">Група:</label>
	<select id="group" name="group">
            <option value="math">М</option>
            <option value="appl-math">ПМ</option>
            <option value="base-cs">ОКН</option>
            <option value="core-cs">ЯКН</option>
    </select>
	<br>
	<label for="credits">Кредити</label>
	<input type="number" id="credits" name="credits">
	<input type="submit" value="Submit">
</form>

</body>
</html>
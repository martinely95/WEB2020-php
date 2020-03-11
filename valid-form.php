<?php

$logfile = fopen("logfile.txt", "w");

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
$valid['group'] = $group;
}

if (!$credits) {
$errors['credits'] = 'Кредити е задължително поле.';
} elseif ($credits < 0) {
$errors['credits'] = 'Кредити е цяло положително число.';
} else {
$valid['credits'] = $credits;
}

fwrite($logfile, "Errors:\n");
foreach($errors as $err)
{
	fwrite($logfile, $err."\n");
}

fwrite($logfile, "Valid operations:\n");
foreach($valid as $val)
{
	fwrite($logfile, $val."\n");
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документик</title>
</head>
<body>
<?php
$names = array("дефолт","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"); // массив с днями
foreach ($names as $k => $val) { // выводим массив
	if ($k>=1) { // оператор
	echo " $val - 
		день под номером $k <br>";//выводим дни
}}
?>
</body>
</html>
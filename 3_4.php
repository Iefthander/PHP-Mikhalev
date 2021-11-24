<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
<?php
$day = 8; //переменная с днем
	switch($day){ // оператор
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		echo "Это рабочий день"; // рабочие дни
		break;
		case 6:
		case 7:
		echo "Это выходной день"; // выходные дни
		break;
		default: // если нет нужного значения
	echo "Нет такого дня";} 
?>
</body>
</html>
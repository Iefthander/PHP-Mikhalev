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
$day = 1; //переменная с днем
	if ($day==1 or $day==2 or $day==3 or $day==4 or $day==5){ // условие для буднего дня
echo "Это будний день";
	}
	if ($day==6 or $day==7){ // условие для выходного дня
		echo "Это выходной день";
	}
	if ($day>7 or $day<1){ // условие для несуществующего дня
	echo "Нет такого дня";
	}
?>
</body>
</html>
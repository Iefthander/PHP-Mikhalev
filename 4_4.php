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
	$s=0; // начальное значение
	while($i<20){ // условие
		$i++; // прибавляем по 1
		if ($i%2) { // пропуск нечетных
			continue; // сам пропуск
		}
		echo $i. " "; // вывод
	};
?>
</body>
</html>
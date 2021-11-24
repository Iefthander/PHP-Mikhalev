<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1; // начальное значение
	while ($a<=9){ // цикл до 9
		echo ($a*$a." "); // возводим в квадрат
		$a++; // получаем новое значение при прибавлении
	}
?>
</body>
</html>
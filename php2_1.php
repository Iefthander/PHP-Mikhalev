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
    $table = array( // задаем массив
    1 => array( //задаем подмассив
    	1 => "1",
    	2 => "2",
    	3 => "3",
    	4 => "4",
    	5 => "5",
    	6 => "6",
    	7 => "7",
    	8 => "8",
    	9 => "9",
    	10 => "10"),
    2 => array( //задаем подмассив для умножения на двойку
    	1 => "2",
    	2 => "4",
    	3 => "6",
    	4 => "8",
    	5 => "10",
    	6 => "12",
    	7 => "14",
    	8 => "16",
    	9 => "18",
    	10 => "20"),
    3 => array( //задаем подмассив для умножения на тройку
    	2 => "6",
    	3 => "9",
    	4 => "12",
    	5 => "15",
    	6 => "18",
    	7 => "21",
    	8 => "24",
    	9 => "27",
    	10 => "30"),
);
    echo $table[/*значение*/][/*значение*/]; //вывод
?>
</body>
</html>
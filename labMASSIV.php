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
    $laba = array( // задаем массив
    1 => array( //задаем подмассив имен
    	1 => "Иван Иванович",
    	2 => "Борис Олегович",
    	3 => "Илья Константинович",
    	4 => "Руслан Андреевич"),
    2 => array( //задаем подмассив событий
    	1 => "день открытых дверей",
    	2 => "день закрытых дверей",
    	3 => "день полуоткрытых дверей",
    	4 => "день не до конца закрытых дверей",
    	5 => "дверь открытых концов"),
); 
    echo "Уважаемый (ая), "; echo $laba[1][4]; //выводим по форме
    echo "<br>";
    echo "Приглашаем Вас на "; echo $laba[2][5];
    echo "<br>";
    echo "Дата события:"; echo 12; echo " мая.";
    echo "<br>";
    echo "С уважением, Василий.";
?>
</body>
</html>
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
	$menu = array( // ассоциативный массив
        'Home' => 'home.php', // Элементы массива
        'About' => 'about.php', // Элементы массива
        'Contact' => 'contact.php' // Элементы массива
);
 
foreach($menu as $key => $value){ // выводим данные из массива
   echo "<a href=" . $value .">" . $key . "</a><br>"; // отображение данных массива

}
?>
</body>
</html>
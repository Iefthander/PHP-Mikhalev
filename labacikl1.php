<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица умножения</title>
</head>
<body>
<?php
	$rows=9; // начальные значения
    $cols=9;
 
echo '<table border="1">'; // границы таблицы
 
for ($tr = 1; $tr <= $rows; $tr++) { // цикл со строками
    echo '<tr>'; //вывод строк
    for ($td = 1; $td <= $cols; $td++) { // цикл со столбцами
        echo '<td>' . $tr * $td . '</td>'; //вывод столбцов
    }
    echo '</tr>';
}
 
echo '</table>';
?>
</body>
</html>
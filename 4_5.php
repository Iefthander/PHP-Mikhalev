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
	$fruits[0]=1; // делаем числовой массив и ставим значения
	$fruits[1]=1;
	$fruits[2]=1;
	$fruits[3]=1;
if ($fruits[0]<0 or $fruits[1]<0 or $fruits[2]<0 or $fruits[3]<0){ // теперь если хотя бы один пункт массива имеет отрицательное значение, то пишется есть, иначе - нет
echo "Есть";
}
else{
	
echo "Нет";
}
?>
</body>
</html>
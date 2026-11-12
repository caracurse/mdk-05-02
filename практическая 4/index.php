<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1>Массивы и функции</h1>
<h2>Задание 1</h2>
    <?php 
        $array = [3, 1, 8, 33, 24, 57, 9];

        $max = $array[0];
        foreach ($array as $key => $value) {
            if ($value > $max) {
                $max = $value;
            }
        }
        echo "Максимум<br>Номер: $key<br>Значение: $max<br><br>";


        $min = $array[0];
        foreach ($array as $key => $value) {
            if ($value < $min) {
                $min = $value;
            }
        }
        echo "Минимум<br>Номер: $key<br>Значение: $min<br><br>";
    ?>
    <hr>
<h2>Задание 2</h2>
    <?php 
        $massive = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $sum = 0;
        $pr = 1;

        foreach ($massive as $value) {
            $sum += $value;
            $pr *= $value;
        }
        echo "Сумма: $sum<br>";
        echo "Произведение: $pr"
    ?>
    <hr>
<h2>Задание 3</h2>
    <?php
        $massive = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        foreach ($massive as $value) {
            $sum += $value;
            $len = count($massive);
            $sra = $sum / $len;
        }
        
        echo "Среднее арифметическое: $sra";
    ?>
    <hr>
<h2>Задание 4</h2>
        <?php
            $numbers = [1.9, -2.8, 3.7, 4.6, -5.5, 6.4, -7.3, 8.2, -9.1];
            $transformed = [];

            foreach ($numbers as $value) {
                $transformed[] = $value > 0 ? $value * $value : abs($value);
            }
        ?>

        <p>Оригинал: 
        <?php foreach ($numbers as $v): ?>
        <?= number_format($v, 2) ?>
        <?php endforeach; 
        ?></p>

        <p>Конечный:
        <?php foreach ($transformed as $v): ?>
        <?= number_format($v, 2) ?>
        <?php endforeach; 
        ?></p>
<hr>
<h2>Задание 5</h2>
<?php 
 ?>
</center>
</body>
</html>
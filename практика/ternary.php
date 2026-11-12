<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Тернарный оператор</h1>
    <?php 
    $a = 42;
    $b = 23;
    $res = $a < $b ? 'a меньше b' : 'а больше или равно b';
    echo $res;
    ?>
    <h2>Пример 2</h2>
    <?php
    $res1 = $a > $b ? $a : $b;
    echo " Максимальное число: $res1";
    ?>  
    <h2>Оператор match</h2>
    <?php 
    $c = 1;
    $res3 = match ($c) {
        1 => "с = 1",
        2 => "с = 2",
        3 => "с = 3",
        4 => "с = 4",
    };
    echo $res3;
    ?>
</body>
</html>
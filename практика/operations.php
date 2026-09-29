<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Операции</h1>
    <h2>Арифметические операции</h2>
    <p>+ - * / ** %</p>
    <p>Инкремент и декремент</p>
    <?php 
        $i = 5;   //$i++; //++$i;
        echo $i;
    ?>
    <h2>Операция со строками - конкатенация (склеивание)</h2>
    <?php
        $str1 = 'Hello, ';
        $str2 = 'world!';
        echo $str1 . $str2;         //echo $str1 . 55;  | echo $str1 . true;   (склейка есть)
    ?>
    <h2>Операции сравнения</h2>
    <p> < > == != <= >=</p>
    <?php 
        $a = (5 == 5);
        echo $a;
    ?>
        <h2>Операции строгого сравнения</h2>
    <p>=== !==</p>
    <?php 
        $b = (5 == '5');
        $c = (5 === '5');
        echo 'b = $b, c = $c';
    ?>
    <h2>Логические операции</h2>
    <p>И (and или &) ИЛИ (|| или or) НЕ (!)</p>
    <?php 
        $x = (true && false);
        $y = (true || false);
            echo $x, $y;
    ?>
    <h2>Операции присваивания</h2>
    <p>=</p>
    <?php 
        $a = 'Hello';
        $b = 10;
    ?>
    <h2>Приоритет операций</h2>
    <p>**, (++ --), !, (* / %), (+ - .) (<> <= >=), (== != === !==) && || ( =+= ...) </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Типы данных</h1>
    <h2>int - целые числа</h2>
    <?php 
        $number = 478;
        $number = 0x3E;
        echo $number;
    ?>
    <h2>float - числа с плавающей точкой</h2>
    <?php 
        $a = 1.2; // 1.2
        $b = 3.4e5; // 340.000
        $c = 5e-3; // 0.005
        echo "a = $a<br> b = $b<br> c = $c";
    ?>
    <h2>bool - логический тип</h2>
    <?php 
        $isNumber = true;
        $isNull = false;
        echo "isNumber = $isNumber, isNull = $isNull";
    ?>
    <h2>string - строковый тип</h2>
        <?php
            $str = 'Hello';
            echo $str;
        ?>
    <h2>null - пустое значение</h2>
    <?php 
        $nothing  = null;
        echo "Null = $nothing";
    ?>
</body> 
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <center>
        <h1>Изучение PHP</h1>
        <h2>Вывод на экран</h2>
        <p><b>Команда echo</b></p>
        <?php
            echo 'Это PHP';
        ?>
        <br>
        <p><b>Сокращённый echo</b></p>
        <?= 'Это PHP 2.0' ?>
        <br>
        <p><b>Вывод чисел:</b> <?= 333 ?></p>


        <h2>Переменные</h2>
        <p>Объявление переменной</p>
        <?php 
            $num = 55;
            $n = $num + 33;
            // echo $n;
            echo "n = $n, num = $num";
            ?>
        <h2>Арифметические операции</h2>
        <p><?='+ - * / ** %'  ?></p>

        <h2>Использование скобок</h2>
        <p>Приоритет операций</p>
        <?= 
            (5+5)*5
        ?>
        <h2>Пример:</h2>
        <p>(a+b)/c при а=10, b=20, c=15</p>
        <?php
            $a=10;
            $b=20;
            $c=15;
            $result = ($a+$b)/$c;
            echo "Результат: $result";
        ?>
    </center>
</body>
</html>
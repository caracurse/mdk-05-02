<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Работа со строками</h1>
    <h2>Создание строк</h2>
    <?php
    $str1 = "Hello";
    $str2 = "world";
    ?>

    <h2>Соединение строк</h2>
    <?php
    echo $str1 . ', ' . $str2 . '!';
    ?>

    <h2>Обращение к строке по индексу</h2>
    <?php
    $sym = $str1[2];
    // $str1[0] = 'W';
    echo $sym;
    // echo '<br>';
    // echo $str1;
    ?>

    <h2>Получение длины строки</h2>
    <?php
    $len = strlen($str1) + strlen($str2); // общая  длина строк 1 и 2
    echo $len;
    ?>
</body>

</html>
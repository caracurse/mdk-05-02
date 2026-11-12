<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Функции PHP</h1>
    <h2>Задание 1</h2>
    <?php
    function getLen($radius) {
        $len = 2 * $radius * 3.14;
        echo "Длина окружности = $len";
    }
    getLen(4)
    ?>
</body>
</html>
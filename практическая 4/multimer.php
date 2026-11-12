<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
    <h1>Многомерные массивы</h1>

    <h2>Задание 1</h2>
    <?php
    $array = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 12]
    ];

    echo "<table border='1'>";
    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <hr>
    <h2>Задание 2</h2>
    <?php
    $size = 9;
    $start = 10;
    $array = [];

    for ($i = 0; $i < $size; $i++) {
        $row = [];
        for ($j = 0; $j < $size; $j++) {
            $num = $start + ($i * $size + $j);
            $row[] = $num * $num;
        }
        $array[] = $row;
    }

    echo "<table border='1'>";

    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <hr>
    <h2>Задание 3</h2>
    <?php
    $array = [
        [3, 15, 7, 2],
        [10, -5, 20, 8],
        [4, 9, 0, 13],
        [25, 6, -1, 11],
        [17, 3, 19, 1]
    ];

    $min = $array[0][0];
    $max = $array[0][0];
    $minPos = ['row' => 0, 'col' => 0];
    $maxPos = ['row' => 0, 'col' => 0];

    foreach ($array as $i => $row) {
        foreach ($row as $j => $value) {
            if ($value < $min) {
                $min = $value;
                $minPos = ['row' => $i, 'col' => $j];
            }
            if ($value > $max) {
                $max = $value;
                $maxPos = ['row' => $i, 'col' => $j];
            }
        }
    }

    echo "Минимальный элемент: $min (строка: {$minPos['row']}, столбец: {$minPos['col']})<br>";
    echo "Максимальный элемент: $max (строка: {$maxPos['row']}, столбец: {$maxPos['col']})";
?>
    <hr>
    <h2>Задание 4</h2>
    <?php
        $n = 5;

        $array = [];

        for ($i = 0; $i < $n; $i++) {
            $row = [];
            for ($j = 0; $j < $n; $j++) {
                $row[] = abs($i - $j);
            }
            $array[] = $row;
        }

        foreach ($array as $row) {
            echo implode(' ', $row) . "<br>";
        }
    ?>
    <hr>
    <?php
        $shop = [
            'Велоспорт' => [
                'Giant' => ['Горный велосипед', 'Шоссейный велосипед'],
                'Trek' => ['Гравийный велосипед']
            ],
            'Бег' => [
                'Nike' => ['Кроссовки для асфальта', 'Кроссовки для трейла'],
                'Asics' => []
            ],
            'Плавание' => [
                'Speedo' => ['Купальник', 'Очки для плавания']
            ],
            'Теннис' => []
        ];

    echo "<h2>Задание 5<h2>";
        foreach ($shop as $category => $brands) {
            echo "<h3>$category</h3>";

            $hasItems = false;

            foreach ($brands as $brand => $products) {
                foreach ($products as $product) {
                    echo "~ $brand: $product<br>";
                    $hasItems = true;
                }
            }

            if (!$hasItems) {
                echo "Здесь пока нет товаров<br>";
            }
        }
    echo "<hr>";
    echo "<h2>Задание 6</h2><br>";
        $yoga = 'Йога';

        $shop[$yoga] = []; 

        var_dump($shop);

    echo  '<h2>Задание 7<h2><br>';
    
?>
</center>
</body>

</html>
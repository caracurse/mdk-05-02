<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 3</title>
</head>
<body>
    <center>
    <?php
        echo "<h1>Практическая 3</h1><hr>";
        echo '<h2>Задача 1</h2>';
        $a = 5;
        $b = 10;

        echo "a = $a, b = $b<br>";

        if ($a < $b) {
            echo 'Ответ: ', $a + $b;
        } else {
            echo 'Ответ:', $a * $b;
        }
        echo "<br>";

        echo '<h2>Задача 2</h2>';
        
        $a = 50;
        $b = 60;
        $c = 180 - $a - $b;

        echo "a = $a, b = $b, c = $c<br>";

        if ($a > 0 && $b > 0 && $c > 0) {
            echo "Треугольник существует. ";
            if ($a == 90 || $b == 90 || $c == 90) {
                echo "Прямоугольный.";
            } else {
                echo "Не прямоугольный.";
            }
        } else {
            echo "Треугольник не существует.";
        }
        echo "<br>";

        echo '<h2>Задача 3</h2>';
        $age = 4;

        echo "Возраст: $age<br>";

        if ($age <= 1) {
            $ageGroup = "Котята";
        } elseif ($age <= 3) {
            $ageGroup = "Молодые коты";
        } elseif ($age <= 7) {
            $ageGroup = "Коты средних лет";
        } else {
            $ageGroup = "Почтенные коты";
        }
        echo $ageGroup;
        echo "<br>";

        echo '<h2>Задача 4</h2>';
        $a = 3;
        $b = 4;
        $c = 5;

        echo "a = $a, b = $b, c = $c<br>";

        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo "Треугольник существует.";
        } else {
            echo "Треугольник не существует.";
        }
        echo "<br>";

        echo '<h2>Задача 5</h2>';
        $n = 2024;

        echo "Год: $n<br>";

        if ($n % 400 == 0) {
            echo "Високосный";
        } elseif ($n % 100 == 0) {
            echo "Не високосный";
        } elseif ($n % 4 == 0) {
            echo "Високосный";
        } else {
            echo "Не високосный";
        }
        echo "<br>";

        echo '<h2>Задача 6</h2>';
        $a = 20000;
        $b = 20000;
        $sum = $a + $b;
        
        echo "a = $a, b = $b<br>";

        if ($sum > 32767) {
            echo "Переполнение!";
        } else {
            echo $sum;
        }
        echo "<br>";

        echo '<h2>Задача 7</h2>';
        $a = 10;
        $b = 20;

        $x = 5;
        $y = 15;
        $z = 25;
        
        echo "a = $a, b = $b, c = $c<br>x = $x, y =$y, z = $z<br>";

        if (
            ($x <= $a && $y <= $b) || ($x <= $b && $y <= $a) ||
            ($x <= $a && $z <= $b) || ($x <= $b && $z <= $a) ||
            ($y <= $a && $z <= $b) || ($y <= $b && $z <= $a)
        ) {
            echo "Кирпич пройдёт.";
        } else {
            echo "Кирпич не пройдёт.";
        }
        echo "<br>";

        echo '<h2>Задача 8</h2>';
        $n = 100; // _POST
        
        echo "Номер дня: $n<br>";

        if ($n <= 31) {
            $month = 1;
            $day = $n;
        } elseif ($n <= 59) {
            $month = 2;
            $day = $n - 31;
        } elseif ($n <= 90) {
            $month = 3;
            $day = $n - 59;
        } elseif ($n <= 120) {
            $month = 4;
            $day = $n - 90;
        } elseif ($n <= 151) {
            $month = 5;
            $day = $n - 120;
        } elseif ($n <= 181) {
            $month = 6;
            $day = $n - 151;
        } elseif ($n <= 212) {
            $month = 7;
            $day = $n - 181;
        } elseif ($n <= 243) {
            $month = 8;
            $day = $n - 212;
        } elseif ($n <= 273) {
            $month = 9;
            $day = $n - 243;
        } elseif ($n <= 304) {
            $month = 10;
            $day = $n - 273;
        } elseif ($n <= 334) {
            $month = 11;
            $day = $n - 304;
        } else {
            $month = 12;
            $day = $n - 334;
        }

        echo "Месяц: $month, день: $day";

        echo "<h2>Задание 9</h2>";
        $num = 10; // _POST

        echo "Число: $num<br>";

        if ($num % 4 == 0 && $num % 6 == 0) {
            echo "Число делится на 4 и 6";
        } elseif ($num % 4 == 0 and $num % 6 != 0) {
            echo "Число делится только на 4";
        } elseif ($num % 4 != 0 && $num % 6 == 0) {
            echo "Число делится только на 6";
        } else {
            echo "Число не делится на 4 и 6";
        }
        
        echo "<h2>Задание 10</h2>";
        $x = 3; // _POST
        $y = 4; // _POST
        $r = 5; // _POST
        
        echo "x = $x, y = $y, r = $r<br>";

        if ($x*$x + $y*$y <= $r*$r) {
            echo "Точка лежит внутри круга (включая границу)";
        } else {
            echo "Точка не лежит внутри круга (включая границу)";
        }
?>
</center>
</body>
</html>
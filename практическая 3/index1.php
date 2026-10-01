<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Практическая работа. Циклы.</h1>
    <?php 
        echo "<h2>Задача 1</h2>";
            
        $startNumber = 1;
        $multiplier = 2;
        $quantity = 7;

        echo "Начальное значение = $startNumber; множитель = $multiplier; количество = $quantity<br><br>";

        for ($i = 0; $i < $quantity; $i++ ) {
            $startNumber *= $multiplier;
            $total = 1;
            $total *= $startNumber;  
            echo "<b>$total </b>";
        }
        echo "<hr>";
    
    ?>

    <?php
        echo "<h2>Задача 2</h2>";
        $lastNumber = 100;
        $sum = 0;

        echo "Начальное число - 1; конечное число - $lastNumber<br><br>";

        for ($i = 0; $i <= $lastNumber; $i++) {
            $sum += $i;
        }

        echo "<b>$sum</b>";
        echo "<hr>"
    ?>

    <?php 
        echo "<h2>Задача 3</h2>";

        $startNumber = 1;
        $lastNumber = 10;
        $multiplicationResult = 1;

        echo "Начальное число - 1; конечное число - $lastNumber<br><br>";

        for ($i = 1; $i <= $lastNumber; $i++) {
            if ($i % 2 == 0) {
                $multiplicationResult *= $i;
            }  
                
        }
        echo "<b>$multiplicationResult</b><hr>";
    ?>

    <?php 
        echo "<h2>Задача 4</h2>";
        $distance = 10; 
        $days = 7;
        $totalDistance = 0;
        
        echo "Начальные данные: 10 км, 7 дней<br><br>";

        for ($i = 1; $i <= $days; $i++) {
            $currentDistance = $distance * (1 + 0.1 * ($i - 1));
            $totalDistance += $currentDistance;
            $distance = $currentDistance;
            $result = (int) $totalDistance;
        }

        echo "За $days дней спортсмен пробежит: <b>$result км.</b><hr>";
    ?>
    </center>
</body>
</html>
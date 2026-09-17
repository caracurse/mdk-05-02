<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 2</title>
</head>
<body>
    <center>
        <h2>Формула 1: (a/c)*(b/d)- (a*b-c)/(c*d)</h2>
        <p>
            a = 1<br>
            b = 2<br>
            c = 3<br>
            d = 4
        </p>
        <?php 
            $a = 1;
            $b = 2;
            $c = 3;
            $d = 4;
            $formula = ($a/$c)*($b/$d) - ($a*$b-$c)/($c*$d);
            echo "<h3>Результат: $formula</h3>"
        ?>

        <hr>

        <h2>Формула 2: (x+y)/(y+1)-(x*y-12)/(34+x)</h2>
        <p>
            x = 1<br>
            y = 2
        </p>
        <?php 
            $x = 1;
            $y = 2;
            $formula = ($x+$y)/($y+1)-($x*$y-12)/(34+$x);
            echo "<h3>Результат: $formula</h3>"
        ?>

        <hr>

        <h2>Формула 3: (x+1/x-1)**x+18*x*y**2</h2>
        <p>
            x = 1<br>
            y = 2
        </p>
        <?php 
            $x = 1;
            $y = 2;
            $formula = ($x+1/$x-1)**$x+18*$x*$y**2;
            echo "Результат: $formula"
        ?>
        <hr>
        <h2>Формула 4: (1 + 1/x**2)**x - 12*x**2*y</h2>
        <p>
            x = 1<br>
            y = 2
        </p>
        <?php 
            $x = 1;
            $y = 2;
            $formula = (1 + 1/$x**2)**$x - 12*$x**2*$y;
            echo "Результат: $formula"
        ?>
        <hr>
    </center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Циклы</title>
</head>
<body>
    <h1>Циклы</h1>
    <h2>Цикл с предусловием</h2>
    <?php 
        $a = 0;
        while ($a <= 10) { 
            echo "$a <br>";
            $a++;
            // break;
        }
    ?>
    <h2>Цикл с постусловием - do...while</h2>
    <?php 
        $a = 10;
        do {
            echo "$a <br>"; 
            $a--;
        } while ($a >= 0)
    ?>
    <h2>Цикл с параметром - for</h2>
    <?php 
        for ($i = 0; $i <= 10; $i++) {
            echo "$i <br>"; 
        }
    ?>
</body>
</html>
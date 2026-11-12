<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Ассоциативные массивы</h1>
    <hr>
    <h2>Создание массива</h2>
    <?php 
        $nums = ['one' => 12, 'two' => 52, 'three' => 34, 'four' => 98, 'five' => 10];
        echo '[';
        foreach ($nums as $k => $v) {
            
            echo "$k => $v" . ", ";
            
        }
        echo ']';
    ?>
    <h2>Вывод массива</h2>
    <?php 
        foreach ($nums as $num) {
            echo $num, ', ';
        }
    ?>
    <h2>Обращение к элементу массива</h2>
    <?php
       echo "Второй элемент - " . $nums['two'];
    ?>
    <h2>Изменение элемента массива</h2>
    <?php
        $nums['two'] = 13;
        echo "Новый второй элемент - " . $nums["two"];
        ?>
    <h2>Добавление элемента массива</h2>
    <?php 
        $nums["six"] = 0;
        $nums[] = 30;
        $nums['five'] = 5;
        $nums[] = 77;
        echo "Добавлен новый элемент - ". $nums["six"];
    ?>
    <h2>Перебор элементов массива</h2>
    <?php 
      foreach ($nums as $key => $value) {
        echo "$key - $value<br>";
      }
    
    ?>
    </center>
</body>
</html>
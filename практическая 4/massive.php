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
    <h2>Задание 1</h2>
    <?php
    $translation = [
        'hello' => 'привет',
        'world' => 'мир',
        'php' => 'PHP',
        'programming' => 'программирование',
        'array' => 'массив',
        'associative' => 'ассоциативный',
        'key' => 'ключ',
        'value' => 'значение',
        'pair' => 'пара',
        'element' => 'элемент'
]; 
    foreach ($translation as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }
    ?>
    <hr>
    <h2>Задание 2</h2>
    <?php
        $word = 'мир';
        $found = false;

        foreach ($translation as $en => $ru) {
            if ($ru == $word) {
                echo "$ru - $en\n";
                $found = true;
                break;
            }
        }

        if (!$found) {
            echo "$word - В словаре нет такого слова\n";
        }
    ?>
    <hr>
    <h2>Задание 3</h2>
    <?php 
        $word = 'мир';
        $found = false;

        foreach ($translation as $en => $ru) {
            if ($ru == $word) {
                echo "$ru - $en\n";
                $found = true;
                break;
            }
        
            if ($en == $word) {
                echo "$en - $ru\n";
                $found = true;
                break;
            }
        }
            if (!$found) {
            echo "$word - В словаре нет такого слова\n";
            }
    ?>
    <hr>
    <h2>Задание 4</h2>
    <form method="POST" action="">
        <input type="text" name="word" placeholder="Введите слово (англ. или рус.)" required>
        <button type="submit">Перевести</button>
    </form>
    <?php
    
    ?>
    <hr>
    <h2>Задание 5</h2>
    <?php 
       $input_word = "word";
       $counts = array_count_values(str_split($input_word));
       foreach ($counts as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }

     ?>
    <hr>
    <h2>Задание 6</h2>
    <?php 
    $flipped = array_flip($translation);

    foreach ($flipped as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }
    ?>
    </center>
</body>
</html>
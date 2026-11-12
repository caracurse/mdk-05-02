<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Работа со строками</h1>
        <hr>
        <h2>Задание 1</h2>
        <?php

        $str = "qwertyuiop(zxcvbnmas)dfghjkl";
        echo $str;
        echo "<br><br>";

        $len = strlen($str);


        $print = false;

        echo "Символы в скобках: ";
        for ($i = 0; $i < $len; $i++) {
            $letter = $str[$i];

            if ($letter == '(') {
                $print = true;
                continue;
            }

            if ($letter == ')') {
                break;
            }

            if ($print) {
                echo "<i>$letter</i>";
            }
        }

        ?>
        <hr>

        <h2>Задание 2</h2>
        <?php
        $stroka = "For spanish speakers a valid character map may be updated.";

        $words = 0;
        $len = strlen($stroka);

        for ($i = 0; $i < $len; $i++) {
            if ($stroka[$i] == " ") {
                $words += 1;
            } elseif ($stroka[$i] == ".") {
                $words += 1;
                break;
            }
        }
        echo $stroka;
        echo "<br>";
        echo "Количество слов в строке: <b>$words</b>";
        ?>
        <hr>

        <h2>Задание 3</h2>
        <?php
        $str = "Data dmkfd akfdpe pqrmfgn jwenwfg bwjeri este mara updfqw uputu.";
        echo $str . "<br><br>";

        $len = strlen($str);
        
        echo "Результат:<br>";
        
        $word = "";

        for ($i = 0; $i <= $len; $i++) {
            $ch = ($i < $len) ? $str[$i] : " ";

            if ($ch == " " || $ch == ".") {
                if (strlen($word) > 0) {
                    $last = strlen($word) - 1;
                    if ($word[0] == $word[$last]) {
                        echo $word . "<br>";
                    }
                    $word = "";
                }
            } else {
                $word .= $ch;
            }
        }
        ?>
        <hr>
        <h2>Задание 4</h2>
        <?php
        $str = "data dmkfd akfdpe pqrmfgn jwenwfg bwjeri este mara updfqw uputu.";
        echo $str . "<br><br>";

        $len = strlen($str);

        $unique = [];
        $count = 0;

        for ($i = 0; $i < $len; $i++) {
            $ch = $str[$i];
            $found = false;

            for ($j = 0; $j < $count; $j++) {
                if ($unique[$j] == $ch) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $unique[$count] = $ch;
                $count++;
            }
        }

        echo "Количество различных символов: " . $count . "<br><br>";
        echo "Различные символы: ";

        for ($i = 0; $i < $count; $i++) {
            echo $unique[$i];
        }
        ?>
        <hr>
        <h2>Задание 5</h2>
        <?php

        $strochka = "Rabota ne shdet kakih-to chudes.<br>"; // r, t, k
        echo $strochka;

        $count_word = 0;
        $len = strlen($strochka);

        for ($i = 0; $i < $len; $i++) {
            $let = $strochka[$i];

            if ($let == "r" || $let == "t" || $let == "k") {
                $count_word += 1;
            }
        }
        echo "Количество букв r, t, k = " . "<b>$count_word</b>";
        ?>
        <hr>
        <h2>Задание 6</h2>
        <?php

        echo "Результат (удаление лишних пробелов):<br>";
        function deleteSpaces($str)
        {
            $len = strlen($str);
            $newStr = '';
            for ($i = 0; $i < $len; $i++) {
                $let = $str[$i];
                $newStr .= $let;
            }
            echo $newStr;
        }

        deleteSpaces("Lorem ipsum    dolor sit amet consectetur adipisicing elit.   Dolorem ipsum modi  obcaecati aut, beatae odit    non pariatur consectetur quos,   quod doloribus possimus, omnis     corrupti.");
        ?>
        <hr>
        <h2>Задание 7</h2>
        <?php
        $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, itaque doloribus rem ratione unde iste commodi saepe ipsam, perferendis quod vitae esse assumenda rerum a omnis temporibus quos numquam ab.";
        echo $str . "<br><br>";

        $len  = strlen($str);
        $min = 10;
        $max = 0;
        $current = 0;

        for ($i = 0; $i < $len; $i++) {
            $let = $str[$i];

            if ($let == " " || $let == "," || $let == ".") {
                if ($current > 0) {
                    if ($current < $min) {
                        $min = $current;
                    }

                    if ($current > $max) {
                        $max = $current;
                    }
                }
                $current = 0;
            } else {
                $current++;
            }
        }

        if ($current > 0) {
            if ($current < $min) {
                $minLen = $current;
            }
            if ($current > $max) {
                $maxLen = $current;
            }
        }

        echo "Длина самого короткого слова: <b>$min</b><br>";
        echo "Длина самого длинного слова: <b>$max</b>";
        ?>
        <hr>
        <h2>Задание 8</h2>
        <?php
        $str = "aaabbbaaacaaaaaabbba<br>";

        $max = 0;
        $current = 0;

        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == 'a') {
                $current++;
            } else {
                $current = 0;
            }

            if ($current > $max) {
                $max = $current;
            }
        }

        echo $str;
        echo "Самая длинная последовательность: " . "<b>" . $max . "</b>";
        ?>

        <hr>

        <h2>Задание 9</h2>
        <?php

        $str = 'qwertyuiop(zxcvbnmas)dfghjkl';
        echo $str . '<br><br>';

        $result = '';
        $skip = 0;
        $len = strlen($str);

        for ($i = 0; $i < $len; $i++) {
            $let = $str[$i];

            if ($let == '(') {
                $skip++;
            } elseif ($let == ')') {
                $skip--;
            } else {
                if ($skip == 0) {
                    $result .= $let;
                }
            }
        }

        echo 'Результат: ' . $result;
        ?>
        <hr>
        <h2>Задание 10</h2>
        <p><b>Добавить всем заданиям форму для ввода строк</b></p>
        <hr>
    </center>
</body>

</html>
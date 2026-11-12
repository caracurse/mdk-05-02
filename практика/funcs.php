<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body>
    <h1>Функции PHP</h1>
    <hr>
    <h2>Функция Hello</h2>
    <?php
        function sayHello($name) {
            echo "Hello, $name!<br>";
        }
        sayHello("Вася");
        sayHello("Саша");
        sayHello("Петя");
        sayHello("Аня");
        sayHello("Миша");
    ?>

    <h2>Функции с несколькими параметрами</h2>
    <?php
        function sayMe($Name, $fullName) {
            echo "Hello, $Name $fullName!";
        }
        sayMe("Артём", "Шмигель");
    ?>
    <hr>
    <h2>Функция с параметрами  по умолчанию</h2>
    <?php
    function userInfo($Name, $fullName, $role = "Студент") {
        echo "$role $Name $fullName, добро пожаловать в PHP!<br>";
    }
    userInfo("Артём","Шмигель");
    userInfo("Иван","Иванов", "Профессор");
    ?>
    <hr>
    <h2>Пример работы переменной с проверкой <br><span style="color: grey;">анализ данных</span></h2>
    <p style="background-color: black; color: greenyellow; width: 700px; border-radius: 10px; padding: 10px"><code>
    <span style="color: grey; font-size: 18px;">PHP</span><br>
    <span style="color: peru">function</span> <span style="color: purple;">Authentification</span><span style = "color: white;">($username, $password)</span> {<br>
        <span style="color: purple;">if <span style = "color: white;">(empty($username) || empty($password))</span> {</span><br>
            
            <span style="margin-left: 10px;">echo <span style = "color: aqua;">"Вы не ввели переменные"</span>;</span><br>      
            <span style="margin-left: 10px;"><span style = "color: purple;">return</span> <span style = "color: blue;">false</span>;</span><br>

        <span style="color: purple;">} elseif <span style = "color: white;">($username = strtolower("admin") <span style="color: orange;">||</span> ($password = strtolower("admin")))</span> {</span><br>
           
            <span style="margin-left: 10px;">echo <span style = "color: aqua;">"Вы админ!"</span>;</span><br>
            <span style="margin-left: 10px;"><span style = "color: purple;">return</span> <span style = "color: blue;">true</span>;</span><br>

        <span style="color: purple;">} else {</span><br>
            <span style="margin-left: 10px;">echo <span style = "color: aqua;">"Неверные данные";</span></span><br>
        <span style="color: purple;">}</span><br>
    
    }<br>
        Authentification("admin", "admin");  <span style = "color: grey;">// ввод значений переменных $username, $password</span>
    </code></p>
    <?php
    function Authentification($username, $password) {
        if (empty($username) || empty($password)) {
            
            echo "Результат: Вы не ввели переменные.";        
            return false;

        } elseif ($username = strtolower("admin") || ($password = strtolower("admin"))) {

            echo "Результат: Вы админ.";
            return true;

        } else {
            echo "Результат: Неверные данные."; 
        }
    
    }
        Authentification("admin", "admin");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 9 - Подключение файлов</title>
</head>
<body>
    <h1>Динамическое подключение файлов</h1>
    
    <h2>Вариант 1: include</h2>
    <?php
        for($i = 1; $i <= 5; $i++) {
            include "9/{$i}.txt";
            echo "<br />";}
    ?>
    <hr>
    <h2>Вариант 2: require</h2>
    <?php
        for($i = 1; $i <= 5; $i++) {
            require "9/{$i}.txt";
            echo "<br />";}
    ?>
</body>
</html>
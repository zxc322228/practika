<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php
		require "teams.php";
        if (isset($_GET['id']) && $_GET['id'] !== '') {
            $id = $_GET['id'];
            $found = false;
            foreach ($content as $team) {
                if ($team['id'] == $id) {
                    echo "<h3>Информация о группе: {$team['name']}</h3>";
                    echo "<p>Страна: {$team['country']}<br>";
                    echo "Год основания: {$team['date']}<br>";
                    echo "Стиль: {$team['style']}</p>";
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                echo "<p>Группа с id = $id не найдена</p>";
            }
        } else {
            echo "<h3>Все группы:</h3>";
            foreach ($content as $team) {
                echo "<p><strong>{$team['name']}</strong><br>";
                echo "Страна: {$team['country']}<br>";
                echo "Год основания: {$team['date']}<br>";
                echo "Стиль: {$team['style']}</p>";
                echo "<hr>";
            }
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5 - Альбомы (таблица)</title>
    <style>
        table, th, td { border: 5px solid pink; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>
    <h1>Список альбомов</h1>
    <?php
        require 'albums.php';
        echo "<table>";
        echo "<tr><th>ID</th><th>Альбом</th><th>Дата выпуска</th><th>Страна</th><th>ID группы</th></tr>";
        for ($i = 0; $i < count($album); $i++) {
            echo "<tr>";
            echo "<td>{$album[$i]['id_album']}</td>";
            echo "<td>{$album[$i]['title']}</td>";
            echo "<td>{$album[$i]['date']}</td>";
            echo "<td>{$album[$i]['country']}</td>";
            echo "<td>{$album[$i]['id_team']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
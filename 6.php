<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 6 - Треки (нумерованный список)</title>
</head>
<body>
    <h1>Просмотр треков сервиса</h1>
    <?php
        require 'tracks.php';
        echo "<ol>";
        foreach ($track as $item) {
            echo "<li>(id={$item['id_track']}) {$item['name']}</li>";
        }
        echo "</ol>";
    ?>
</body>
</html>
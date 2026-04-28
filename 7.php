<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 7 - Треки альбома Back in Black</title>
</head>
<body>
    <h1>Треки альбома Back in Black (AC/DC)</h1>
    <?php
        require 'tracks.php';
        echo "<ul>";
        foreach ($track as $item) {
            if ($item['id_album'] == 6) {
                echo "<li>" . $item['name'] . "</li>";
            }
        }
        echo "</ul>";
    ?>
</body>
</html>
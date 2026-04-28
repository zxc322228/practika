<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 12 - Альбомы и треки</title>
</head>
<body>
    <h1>Список альбомов и треков</h1>
    <?php
        require '12/albums.php';
        require '12/tracks.php';
        echo "<ul>";
        foreach ($albums as $album) {
            echo "<li>{$album['title']} ({$album['country']})";
            echo "<ul>";
            foreach ($tracks as $track) {
                if ($track['id_album'] == $album['id_album']) {
                    echo "<li>{$track['name']}</li>";
                    }
                    }
            
            echo "</ul></li>";}
        echo "</ul>";
    ?>
</body>
</html>
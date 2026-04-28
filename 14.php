<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 14 - Универсальный вывод</title>
</head>
<body>
    <h1>Альбомы и треки</h1>
    <?php
        require '14/albums.php';
        require '14/tracks.php';
        
        if (isset($_GET['id']) && $_GET['id'] !== '') {
            $album_id = (int)$_GET['id'];
            $found_album = null;
            
            foreach ($albums as $album) {
                if ($album['id_album'] == $album_id) {
                    $found_album = $album;
                    break;
                }
            }
            
            if ($found_album) {
                echo "<h2>{$found_album['title']} ({$found_album['country']})</h2>";
                echo "<ul>";
                foreach ($tracks as $track) {
                    if ($track['id_album'] == $album_id) {
                        echo "<li>{$track['name']}</li>";
                    }
                }
                echo "</ul>";
            } else {
                echo "<p>Альбом не найден.</p>";
            }
        } else {
            echo "<ol>";
            foreach ($albums as $album) {
                echo "<li>{$album['title']} ({$album['country']})";
                echo "<ul>";
                foreach ($tracks as $track) {
                    if ($track['id_album'] == $album['id_album']) {
                        echo "<li>{$track['name']}</li>";
                    }
                }
                echo "</ul></li>";
            }
            echo "</ol>";
        }
    ?>
    
    <hr>
    <p><a href="?">Показать все альбомы</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 13 - Альбом по GET</title>
</head>
<body>
    <h1>Просмотр альбома</h1>
    <form method="get" action="">
        <label>Введите ID альбома:</label>
        <input type="number" name="id">
        <input type="submit" value="Показать">
    </form>
    <?php
        require '13/albums.php';
        require '13/tracks.php';
        if (isset($_GET['id']) && $_GET['id'] !== '') {
            $album_id = (int)$_GET['id'];
            $found_album = null;
            
            // Ищем альбом
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
                echo "<p>Альбом с ID $album_id не найден.</p>";
            }
        }
    ?>
</body>
</html>
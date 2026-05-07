<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Альбомы групп</title>
    <style>
        table, th, td {
            border: 1px solid #333;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Список альбомов</h2>

<?php
require "album.php";

function fnOutAlbum($arr) {
    $out = "<table>
            <tr>
                <th>ID</th>
                <th>Альбом</th>
                <th>Дата выпуска</th>
                <th>Страна</th>
            </tr>";
    
    foreach ($arr as $item) {
        $out .= "<tr>
                    <td>{$item['id_album']}</td>
                    <td>{$item['title']}</td>
                    <td>{$item['date']}</td>
                    <td>{$item['country']}</td>
                 </tr>";
    }
    
    $out .= "</table>";
    return $out;
}
echo fnOutAlbum($album);
?>

</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 8</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
    </style>
</head>
<body>
    <?php
        require 'tracks.php';
        $t = $track;
        $n = count($t);
        echo "<h3>1. do-while</h3><ul>";
        $i = 0;
        do { echo "<li>(id={$t[$i]['id_track']}) {$t[$i]['name']}</li>"; $i++; }
        while ($i < $n);
        echo "</ul>";
        //2
        echo "<h3>2. for</h3><ol>";
        for ($i = 0; $i < $n; $i++) echo "<li>(id={$t[$i]['id_track']}) {$t[$i]['name']} (id альбома: {$t[$i]['id_album']})</li>";
        echo "</ol>";
        //3
        echo "<h3>3. foreach</h3><table border='1'><tr><th>id</th><th>Трек</th><th>id_альбома</th></tr>";
        foreach ($t as $v) echo "<tr><td>{$v['id_track']}</td><td>{$v['name']}</td><td>{$v['id_album']}</td></tr>";
        echo "</table>";
        //4
        echo "<h3>4. while</h3><table border='1'><tr><th>id</th><th>Трек</th><th>id_альбома</th></tr>";
        $i = 0;
        while ($i < $n) { echo "<tr><td>{$t[$i]['id_track']}</td><td>{$t[$i]['name']}</td><td>{$t[$i]['id_album']}</td></tr>"; $i++; }
        echo "</table>";
    ?>
</body>
</html>
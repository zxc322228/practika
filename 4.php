<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 4 - Команды (foreach)</title>
</head>
<body>
    <h1>Музыкальные группы</h1>
    <?php
        require 'teams.php';
        foreach ($team as $item) {
            echo "
                Группа: {$item['name']} (id = {$item['id_team']})<br/>
                Страна: {$item['country']}<br />
                Дата основания: {$item['date']}<br />
                Стиль: {$item['style']}<br />
                <hr/>
            ";
        }
    ?>
</body>
</html>
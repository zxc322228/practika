<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Функции</h1>
    <h2>Встроенные функции, часть 2</h2>
    <?php
        require "dump/personnel.php";
        $id = isset($_GET['id']) && $_GET['id'] !== '' ? (int)$_GET['id'] : 1;
        $found = false;
        foreach ($personnel as $person) {
            if ($person['id_personnel'] == $id) {
                echo "<h3>Преподаватель (id = $id)</h3>";
                echo "<pre>";
                print_r($person);
                echo "</pre>";
                $found = true;
                break;
            }
        }
        if (!$found) {
            echo "<p>Преподаватель с id = $id не найден</p>";
        }
    ?>
</body>
</html>
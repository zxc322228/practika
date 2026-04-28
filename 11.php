<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 11 - Поиск сотрудников</title>
</head>
<body>
    <h1>Поиск сотрудников</h1>
    <?php
        require '11/personnels.php';
        $term = "surname";
        $value = "Маркова";
        $found = false;
        foreach ($content as $item) {
            if ($item[$term] == $value) {
                echo "
                    id: {$item['id_personnel']} <br />
                    Фамилия: {$item['surname']} <br />
                    Имя: {$item['name']} <br />
                    Отчество: {$item['patronymic']} <br />
                    Должность: {$item['post']} <br />
                    Категория: {$item['category']} <br />
                    Образование: {$item['level_edu']} <br />
                    Стаж работы в ОУ: {$item['experience_total']} <br />
                    <hr/>
                ";
                $found = true;
            }
        }
        if (!$found) {
            echo "<p>Сотрудник с фамилией '$value' не найден.</p>";
        }
    ?>
</body>
</html>
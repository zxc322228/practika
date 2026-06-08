<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Редактируем данные пользователя</h2>

    <?php
        require "user.php";
        $user_langs = explode(", ", $user['lang']);
    ?>

    <form action="save.php" method="post">
        Имя: <input type="text" name="name" value="<?php echo $user['name']; ?>"><p>
        E-mail: <input type="email" name="email" value="<?php echo $user['email']; ?>"><p>

        <h3>Выберите интересующий вас курс:</h3>
        <?php
            $all_courses = [
                "java" => "Разработчик игр на Java",
                "php" => "Программирование на PHP",
                "python" => "Занимательный Python",
                "perl" => "Язык программирования Perl за 24 часа"
            ];
            foreach($all_courses as $key => $course) {
                $checked = (in_array($key, $user_langs)) ? "checked" : "";
                echo "<input type='checkbox' name='lang[]' value='$key' $checked> $course <br>";
            }
        ?><p>

        <h3>Выберите форму обучения:</h3>
        <?php
            $forms = ["очное", "очно-заочное", "заочное", "дистанционное"];
            foreach($forms as $form) {
                $checked = ($form == $user['form']) ? "checked" : "";
                echo "<input type='radio' name='form' value='$form' $checked> $form <br>";
            }
        ?><p>

        <h3>Какие направления ИТ вас могли бы заинтересовать:</h3>
        <select name="interes" size="5" multiple>
            <?php
                $directions = [
                    "Веб и интернет-технологии",
                    "Разработка программ для компьютеров и смартфонов",
                    "Программирование роботов и умных устройств",
                    "Искусственный интеллект и машинное обучение",
                    "Инфраструктура — сети, серверы, администрирование"
                ];
                $user_interests = explode(", ", $user['interes']);
                foreach($directions as $dir) {
                    $selected = (in_array($dir, $user_interests)) ? "selected" : "";
                    echo "<option value='$dir' $selected>$dir</option>";
                }
            ?>
        </select><p>

        <input type="submit">
    </form>
omsk
</body>
</html>
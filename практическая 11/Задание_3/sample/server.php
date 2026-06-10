<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP – безопасность данных, часть 2</title>
</head>
<body>
    <h1>Результат проверки логина</h1>
    <?php
    if (empty($_POST['login'])) {
        echo "<p style='color:red'>Не заполнено поле Логин</p>";
    } else {
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        if (preg_match('/^[a-z0-9]{5,10}$/', $login)) {
            echo "<p style='color:green'>Логин '$login' успешно прошел проверку</p>";
        } else {
            echo "<p style='color:red'>Логин '$login' невалиден</p>";
        }
    }
    ?>
    <br><a href="index.html">Вернуться</a>
</body>
</html>
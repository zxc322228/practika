<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP – безопасность данных, часть 1</title>
</head>
<body>
    <h1>Результат проверки формы</h1>
    <?php
    $errors_empty = [];
    $errors_valid = [];

    // Логин
    if (empty($_POST['login'])) {
        $errors_empty[] = "Не заполнено поле Логин";
    } else {
        $login = htmlspecialchars(trim($_POST['login']));
        if (!preg_match('/^[a-zA-Z0-9]{5,10}$/u', $login)) {
            $errors_valid[] = "$login - невалидный логин";
        }
    }

    // Email
    if (empty($_POST['email'])) {
        $errors_empty[] = "Не заполнено поле E-mail";
    } else {
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors_valid[] = "$email - невалидный адрес";
        }
    }

    // Пароль
    if (empty($_POST['pwd'])) {
        $errors_empty[] = "Не заполнено поле Пароль";
    } else {
        $pwd = htmlspecialchars(trim($_POST['pwd']));
        if (!preg_match('/^[0-9a-zA-Z!@#$%^&*]{6,15}$/', $pwd)) {
            $errors_valid[] = "Пароль не соответствует требованиям";
        }
    }

    // Вывод
    if (empty($errors_empty) && empty($errors_valid)) {
        echo "<p style='color:green'>✅ Форма успешно отправлена!</p>";
    } else {
        if (!empty($errors_empty)) {
            echo "<h3 style='color:red'>Пустые значения:</h3><pre>";
            print_r($errors_empty);
            echo "</pre>";
        }
        if (!empty($errors_valid)) {
            echo "<h3 style='color:red'>Невалидные значения:</h3><pre>";
            print_r($errors_valid);
            echo "</pre>";
        }
    }
    ?>
    <br><a href="form.html">Вернуться</a>
</body>
</html>
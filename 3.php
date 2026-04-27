<?php
$user = [
    "surname" => "Лаврецкая",
    "name" => "Елизавета",
    "patronymic" => "Викторовна",
    "login" => "elizaveta",
    "password" => "12345",
    "email" => "lovel@mail.ru"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .success { color: green; font-weight: bold; font-size: 18px; }
        .info { margin-top: 20px; line-height: 1.8; }
    </style>
</head>
<body>
    <h3>Задание 3 - Регистрация пользователя:</h3>
    <div class="success">Вы успешно зарегистрированы на сайте</div>
    <div class="info">
        <?php echo $user["surname"] . " " . $user["name"] . " " . $user["patronymic"]; ?><br>
        Логин: <?php echo $user["login"]; ?><br>
        E-mail: <?php echo $user["email"]; ?><br>
        Пароль: <?php echo $user["password"]; ?>
    </div>
</body>
</html>
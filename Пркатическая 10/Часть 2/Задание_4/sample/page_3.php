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
    <h2>Регистрация. Страница 3</h2>

    <div style="text-align: center; border: 2px solid red; padding: 20px;">
        <h2>Реклама</h2>
        <p>Лучшая группа программистов: <strong>pechora_proger</strong></p>
        <p>Подписывайся сейчас!</p>
    </div>

    <form action="server.php" method="post">
        <input type="hidden" name="surname" value="<?php echo $_POST['surname']; ?>">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="patronymic" value="<?php echo $_POST['patronymic']; ?>">
        <input type="hidden" name="post" value="<?php echo $_POST['post']; ?>">
        <input type="hidden" name="category" value="<?php echo $_POST['category']; ?>">
        <input type="hidden" name="experience" value="<?php echo $_POST['experience']; ?>">

        <input type="submit">
    </form>
omsk
</body>
</html>
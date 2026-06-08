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
    <h2>Регистрация. Страница 2</h2>

    <form action="page_3.php" method="post">
        Должность: <input type="text" name="post"><p>
        Категория: <input type="text" name="category"><p>
        Стаж: <input type="text" name="experience"><p>

        <input type="hidden" name="surname" value="<?php echo $_POST['surname']; ?>">
        <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
        <input type="hidden" name="patronymic" value="<?php echo $_POST['patronymic']; ?>">

        <input type="submit">
    </form>
omsk
</body>
</html>
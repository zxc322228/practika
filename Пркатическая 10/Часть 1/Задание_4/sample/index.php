<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>	
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Отправка форм</h2>
    
    <?php
        $view = isset($_GET['view']) ? $_GET['view'] : 'json';
    ?>

    <form action="server.php?view=<?php echo $view; ?>" method="post">
        Название: <input type="text" name="name"><p>
        Алиас: <input type="text" name="alias"><p>
        Страна: <input type="text" name="country"><p>
        Год основания: <input type="text" name="date"><p>
        Стиль: <input type="text" name="style"><p>
        Изображение: <input type="text" name="path"><p>
        Контент: <textarea name="content"></textarea><p>
        Примечание: <input type="text" name="note"><p>

        <input type="submit">
    </form>

    <p>
        <a href="?view=json">Показать как JSON</a> | 
        <a href="?view=dump">Показать как PHP массив</a>
    </p>

</body>
</html>
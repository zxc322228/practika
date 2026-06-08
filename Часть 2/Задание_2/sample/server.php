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
    <h2>Оформление заказа</h2>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        echo "<p>print_r (\$_POST[\"order\"][1]);</p>";
        if(isset($_POST["order"][1])) {
            echo "<pre>";
            print_r(json_decode($_POST["order"][1], true));
            echo "</pre>";
        }
    ?>
omsk
</body>
</html>
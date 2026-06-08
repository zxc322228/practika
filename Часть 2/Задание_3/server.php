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

        echo "<h3>Данные о заказах:</h3>";
        if(isset($_POST['orders'])) {
            $orders = json_decode($_POST['orders'], true);
            echo "<pre>";
            print_r($orders);
            echo "</pre>";
        }
    ?>

</body>
</html>
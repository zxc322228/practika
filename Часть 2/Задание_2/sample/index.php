<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>

    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>

    <?php
        include "orders.php";
    ?>

    <form action="server.php" method="post">
        Фамилия: <input type="text" name="surname"><p>
        Имя: <input type="text" name="name"><p>
        E-mail: <input type="email" name="email"><p>

        <?php
            $order_hidden_fields = "";
            foreach ($orders as $item) {
                $json = json_encode($item, JSON_UNESCAPED_UNICODE);
                $order_hidden_fields .= "<input type='hidden' name='order[]' value='" . htmlspecialchars($json) . "'><p>";
            }
            echo $order_hidden_fields;
        ?>

        <input type="submit">
    </form>
omsk
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Регулярные выражения, часть 1</h2>

    <?php
        // переменная с текстом файла
        $text = file_get_contents('text.txt');
        
        // замена переносов строк на <br>
        $text = preg_replace('/\r?\n/', '<br>', $text);
        
        // замена # на -
        $text = preg_replace('/#/', ' - ', $text);
        
        echo $text;
    ?>

</body>
</html>
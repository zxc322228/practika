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
        // текст из файла
        $text = file_get_contents('text.txt');
        
        // замена переносов строк на <br>
        $text = nl2br($text);
        
        // массив шаблонов
        $patterns = [];
        $patterns[] = "/{pict1}/";
        $patterns[] = "/{pict2}/";
        $patterns[] = "/{pict3}/";
        $patterns[] = "/{pict4}/";
        $patterns[] = "/{pict5}/";
        $patterns[] = "/{pict6}/";
        
        // массив замен (картинки в папке pictures)
        $pictures = [];
        $pictures[] = "<p><img src='pictures/pict1.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict2.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict3.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict4.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict5.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict6.jpg' width='500px'></p>";
        
        // замена
        $text = preg_replace($patterns, $pictures, $text);
        
        echo $text;
    ?>
    
</body>
</html>
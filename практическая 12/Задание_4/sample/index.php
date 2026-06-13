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
        // входная строка
        $list = <<< HERE
            <ul>
            <li>PostgreSQL. Мастерство разработки</li> 
            <li>Сборник рецептов MySQL</li>
            <li>Чертоги разума. Убей в себе идиота!</li>			
            <li>Рефакторинг sql-приложений</li>
            <li>Python в веб приложениях</li>
            <li>SQL. Полное руководство</li>
            </ul>
        HERE;
        
        // регулярное выражение - ищем <li>...</li> с SQL
        preg_match_all('/<li>(.*?(SQL|sql|MySQL).*?)<\/li>/', $list, $matches);
        
        // выводим нумерованным списком
        echo "<ol>";
        foreach ($matches[1] as $item) {
            echo "<li>$item</li>";
        }
        echo "</ol>";
    ?>
    
</body>
</html>
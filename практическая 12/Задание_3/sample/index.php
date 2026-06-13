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
        // массив для поиска совпадений с шаблоном
        $array = array(
            "PostgreSQL. Мастерство разработки", 
            "Сборник рецептов MySQL",
            "Чертоги разума. Убей в себе идиота!",			
            "Рефакторинг sql-приложений", 
            "Python в веб приложениях", 
            "SQL. Полное руководство"
        );
        
        // новый массив только с книгами про SQL
        $result = array();
        foreach ($array as $book) {
            if (preg_match('/SQL|sql|MySQL/', $book)) {
                $result[] = $book;
            }
        }
        
        // вывод нумерованным списком
        echo "<ol>";
        foreach ($result as $book) {
            echo "<li>$book</li>";
        }
        echo "</ol>";
    ?>
    
</body>
</html>
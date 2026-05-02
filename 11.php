<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Основы программирования</h1>
    <?php
        $VarStr = 'Слабая типизация PHP';
        const CONSTSTR = 'Слабая типизация PHP';
        define("ARRSTR", array('Слабая типизация PHP'));
        echo "<pre>";
        $check1 = var_dump($VarStr);
        $check2 = var_dump(CONSTSTR);
        $check3 = var_dump(ARRSTR);
        echo "</pre>";
        if ($check1 !== false || $check2 !== false || $check3 !== false) {
            echo "<p><b>Результат проверки:</b> Высказывание <b style='color: green'>ИСТИННО</b></p>";
        }
    ?>
    
</body>
</html>
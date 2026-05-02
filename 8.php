<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Основы программирования</h1>
    <?php
    define("ALBUM", array(
        "The Dark Side of The Moon",
        "Pink Floyd",
        "17 марта 1973",
        "Harvest, Capitol, EMI",
        "LP, кассета, CD, SACD",
        "Платиновый (USA), Платиновый(GBR)"
    ));
    echo "<p><b>Альбом:</b> " . ALBUM[0] . "</p>";
    echo "<p><b>Группа:</b> " . ALBUM[1] . "</p>";
    echo "<p><b>Дата выпуска:</b> " . ALBUM[2] . "</p>";
    echo "<p><b>Лейбл:</b> " . ALBUM[3] . "</p>";
    echo "<p><b>Форматы:</b> " . ALBUM[4] . "</p>";
    echo "<p><b>Статус:</b> " . ALBUM[5] . "</p>";
    ?>
</body>
</html>
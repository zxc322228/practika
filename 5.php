<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Основы программирования</h1>
    <hr>
    <?php
    $usd = 1000;
    $usd_to_rub = 75.87;
    $rub_to_cny = 0.09;

    $rub = $usd * $usd_to_rub;
    $cny = $rub * $rub_to_cny;
    echo "<b>$usd долларов = " . round($cny, 2) . " юаней</p>";
    ?>
</body>
</html>
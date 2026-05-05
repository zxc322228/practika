<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Игра в кубики</title>
</head>
<body>
    <h1>Игра в кости </h1>
    <?php
        $count = 5;
        $diceValues = [];
        for ($i = 0; $i < $count; $i++) {
            $diceValues[] = rand(1, 6);
        }
        $sum = array_sum($diceValues);
        foreach ($diceValues as $value) {
            echo "<div class='dice'>
                    <img src='cube/{$value}.jpg' alt='Кубик {$value}'>
                  </div>";
        }
    ?>
    
    <div class="result">
        Сумма очков: <strong><?= $sum ?></strong>
    </div>
    <br>
    <form method="get">
        <button type="submit">Бросить кубики</button>
    </form>
</body>
</html>
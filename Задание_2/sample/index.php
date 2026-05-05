<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Игра в кубики</title>
</head>
<body>
    <h1>Игра в кости </h1>
    
    <?php
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $dice3 = rand(1, 6);
        
        $sum = $dice1 + $dice2 + $dice3;
    ?>
    
    <div class="dice">
        <img src="cube/<?= $dice1 ?>.jpg" alt="Кубик <?= $dice1 ?>">
    </div>
    <div class="dice">
        <img src="cube/<?= $dice2 ?>.jpg" alt="Кубик <?= $dice2 ?>">
    </div>
    <div class="dice">
        <img src="cube/<?= $dice3 ?>.jpg" alt="Кубик <?= $dice3 ?>">
    </div>
    
    <div class="result">
         Сумма очков: <strong><?= $sum ?></strong>
    </div>
    <br>
    <form method="get">
        <button type="submit"> Бросить кубики</button>
    </form>
</body>
</html>
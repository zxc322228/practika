<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 2 - Вспомненные строки</title>
</head>
<body>
    <h1>Определение текста по количеству вспомненных строк</h1>
    <form method="get" action="">
        <label>Введите количество вспомненных строк (2, 4, 6, 8, 10, 12, 14):</label>
        <input type="number" name="lines" step="2" min="2" max="14">
        <input type="submit" value="Узнать текст">
    </form>
    
    <?php
        if (isset($_GET['lines']) && $_GET['lines'] !== '') {
            $lines = (int)$_GET['lines'];
            if ($lines == 2) {
                $text = "Беда";
            } elseif ($lines == 4) {
                $text = "Плохо";
            } elseif ($lines == 6) {
                $text = "Кажется, что вы где-то учились";
            } elseif ($lines == 8) {
                $text = "Вы среднестатистический человек";
            } elseif ($lines == 10) {
                $text = "Нормально";
            } elseif ($lines == 12) {
                $text = "Хорошо";
            } elseif ($lines == 14) {
                $text = "Отлично";
            } else {
                $text = "Некорректное значение. Введите 2, 4, 6, 8, 10, 12 или 14.";
            }
            echo "<h3>Результат:</h3>";
            echo "<p>Вы вспомнили <strong>$lines</strong> строк(и).</p>";
            echo "<p>Текст: <strong>$text</strong></p>";
        } else {
            echo "<p>Введите количество строк в поле выше.</p>";
        }
    ?>
</body>
</html>
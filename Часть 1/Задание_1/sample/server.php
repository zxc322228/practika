<?php
echo "<h2>Обработчик формы</h2>";
echo "Сервер получил следующие данные:<br>";
echo "Фамилия: " . $_POST['surname'] . "<br>";
echo "Имя: " . $_POST['name'] . "<br>";
echo "Отчество: " . $_POST['patronymic'] . "<br>";
echo "Должность: " . $_POST['post'] . "<br>";
echo "Уровень образования: " . $_POST['education'] . "<br>";
echo "Категория: " . $_POST['category'] . "<br>";
echo "Общий стаж: " . $_POST['total_exp'] . "<br>";
echo "Стаж в техникуме: " . $_POST['college_exp'] . "<br>";
?>
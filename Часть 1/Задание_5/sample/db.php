<?php
$json = $_GET['data'];
$arr = json_decode($json, true);
echo "<h2>Модуль поиска информации</h2>";
echo "Вот критерии поиска:<br>";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
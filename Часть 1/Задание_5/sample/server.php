<?php
$name = $_POST['name'];
$brand = $_POST['brand'];
$os = $_POST['os'];
$ssd = $_POST['ssd'];

$search = [
    'brand' => $brand,
    'os' => $os,
    'ssd' => $ssd
];

$json = json_encode($search, JSON_UNESCAPED_UNICODE);

echo "<h2>Обработчик формы</h2>";
echo "Здравствуйте, $name!<br>";
echo "Мы сформировали список ваших предпочтений и готовы начать поиск!<br><br>";

echo "<center><a href='db.php?data=" . urlencode($json) . "'>Начать поиск</a></center>";
?>
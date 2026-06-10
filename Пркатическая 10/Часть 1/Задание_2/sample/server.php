<?php
$arr = [];
foreach($_POST as $key => $value) {
    $arr[$key] = $value;
}

$json = json_encode($arr, JSON_UNESCAPED_UNICODE);

echo "<h2>JSON строка</h2>";
echo $json . "<br>";

echo "<h2>PHP массив</h2>";
print_r(json_decode($json, true));
?>
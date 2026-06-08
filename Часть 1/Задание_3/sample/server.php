<?php
$json = '{"name":"' . $_POST['name'] . '","alias":"' . $_POST['alias'] . '","country":"' . $_POST['country'] . '","date":"' . $_POST['date'] . '","style":"' . $_POST['style'] . '","path":"' . $_POST['path'] . '","content":"' . $_POST['content'] . '","note":"' . $_POST['note'] . '"}';

echo "<h2>JSON строка</h2>";
echo $json . "<br>";

echo "<h2>PHP массив</h2>";
print_r(json_decode($json, true));
?>
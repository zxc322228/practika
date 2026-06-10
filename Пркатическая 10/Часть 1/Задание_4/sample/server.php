<?php
$view = $_GET['view']; // смотрим что передали

if($view == 'dump') {
    echo "<h2>PHP массив (dump)</h2>";
    print_r($_POST);
}
elseif($view == 'json') {
    $json = json_encode($_POST, JSON_UNESCAPED_UNICODE);
    echo "<h2>JSON строка</h2>";
    echo $json;
}
?>
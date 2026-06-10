<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP – безопасность данных, часть 2</title>
</head>
<body>
    <h1>Результат проверки файла</h1>
    <?php
    if ($_FILES['myfile']['error'] !== UPLOAD_ERR_OK) {
        echo "<p style='color:red'>❌ Ошибка загрузки файла</p>";
    } else {
        $image_type = exif_imagetype($_FILES['myfile']['tmp_name']);
        $allowed = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];

        if (in_array($image_type, $allowed)) {
            echo "<p style='color:green'>✅ Файл является допустимым изображением</p>";
        } else {
            echo "<p style='color:red'>❌ Файл не является разрешенным изображением</p>";
        }
    }
    ?>
    <br><a href="index.html">Вернуться</a>
</body>
</html>
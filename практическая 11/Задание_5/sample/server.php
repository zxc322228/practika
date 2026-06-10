<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка аватара</title>
</head>
<body>
    <h1>Результат загрузки</h1>
    <?php
    $errors = [];

    // Логин
    if (empty($_POST['login'])) {
        $errors[] = "Не заполнено поле Логин";
    } else {
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
            $errors[] = "Логин $login невалиден";
        }
    }

    // Файл
    if ($_FILES['myfile']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Ошибка загрузки файла";
    }

    if (empty($errors)) {
        $allowed_types = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];
        $file_type = exif_imagetype($_FILES['myfile']['tmp_name']);
        
        if (!in_array($file_type, $allowed_types)) {
            $errors[] = "Файл не является разрешенным изображением";
        }
    }

    // Сохранение
    if (empty($errors)) {
        $upload_dir = __DIR__ . '/upload/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
        
        $filename = time() . '_' . basename($_FILES['myfile']['name']);
        $new_path = $upload_dir . $filename;
        
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $new_path)) {
            echo "<h3 style='color:green'>Файл успешно загружен</h3>";
            echo "<img src='upload/$filename' width='200'>";
        } else {
            $errors[] = "Не удалось переместить файл";
        }
    }

    if (!empty($errors)) {
        echo "<h3>Ошибки:</h3><pre>"; print_r($errors); echo "</pre>";
    }
    ?>
    <br><a href="index.html">Загрузить еще</a>
</body>
</html>
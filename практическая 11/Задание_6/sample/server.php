<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов (JPEG, PDF, ZIP)</title>
</head>
<body>
    <h1>Результат загрузки</h1>
    <?php
    if ($_FILES['myfile']['error'] !== UPLOAD_ERR_OK) {
        echo "<p style='color:red'>Ошибка загрузки файла</p>";
    } else {
        $mime = mime_content_type($_FILES['myfile']['tmp_name']);
        $allowed = ['image/jpeg', 'application/pdf', 'application/zip'];

        if (in_array($mime, $allowed)) {
            $upload_dir = __DIR__ . '/upload/';
            if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);
            
            $filename = time() . '_' . basename($_FILES['myfile']['name']);
            $new_path = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $new_path)) {
                echo "<p style='color:green'>Файл успешно загружен на сервер</p>";
            } else {
                echo "<p style='color:red'>Не удалось переместить файл</p>";
            }
        } else {
            echo "<p style='color:red'>Файлы с типом {$mime} не разрешаются к загрузке</p>";
        }
    }
    ?>
    <br><a href="index.html">Вернуться</a>
</body>
</html>
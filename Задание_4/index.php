<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Квадратное уравнение</title>
</head>
<body>
    <h1>Решение квадратного уравнения ax² + bx + c = 0</h1>
    
    <form method="get">
        <input type="number" name="a" step="any" placeholder="a" value="<?= $_GET['a'] ?? '' ?>" required>
        <input type="number" name="b" step="any" placeholder="b" value="<?= $_GET['b'] ?? '' ?>" required>
        <input type="number" name="c" step="any" placeholder="c" value="<?= $_GET['c'] ?? '' ?>" required>
        <button type="submit">Решить</button>
    </form>
    
    <?php
        if (isset($_GET['a'], $_GET['b'], $_GET['c']) && $_GET['a'] !== '' && $_GET['b'] !== '' && $_GET['c'] !== '') {
            
            $a = (float)$_GET['a'];
            $b = (float)$_GET['b'];
            $c = (float)$_GET['c'];
            
            echo "<div class='result'>";
            echo "Уравнение: {$a}x² + {$b}x + {$c} = 0<br><br>";
            
            if ($a == 0) {
                echo "Ошибка: a ≠ 0 (это не квадратное уравнение)";
            } else {
                $D = pow($b, 2) - 4 * $a * $c;
                echo "Дискриминант: D = {$b}² - 4·{$a}·{$c} = " . round($D, 2) . "<br><br>";
                
                if ($D > 0) {
                    $x1 = (-$b + sqrt($D)) / (2 * $a);
                    $x2 = (-$b - sqrt($D)) / (2 * $a);
                    echo "✅ Два корня:<br>";
                    echo "x₁ = " . round($x1, 3) . "<br>";
                    echo "x₂ = " . round($x2, 3);
                } elseif ($D == 0) {
                    $x1 = -$b / (2 * $a);
                    echo "Один корень:<br>";
                    echo "x = " . round($x1, 3);
                } else {
                    echo "Нет действительных корней (D < 0)";
                }
            }
            echo "</div>";
        }
    ?>
</body>
</html>
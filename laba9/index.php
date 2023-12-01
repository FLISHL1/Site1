<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл Сергеевич 221-361 лаб. 9, вар. 9</title>
    <link rel="stylesheet" type="text/css" href="static/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->

</head>

<body>
<header>
    <img src="static/image/icon.png" class="iconHeader" alt="">

</header>


<main>
    
    <?php
    $x = 10;    // начальное значение аргумента
    $encounting = 100;    // количество вычисляемых значений
    $step = 2;    // шаг изменения аргумента
    $type = 'E';    // тип верстки ('A', 'B', 'C', 'D', 'E')
    $minF = -10 ;
    $maxF = 1000000;

    $max = PHP_INT_MIN;
    $min = PHP_INT_MAX;
    $sum = 0;
    $f = 0;

    $i = 0;
    do {
        if ($x <= 10) {
            $f = ($x ** 2) * ($x - 2) + 4;
        } else if ($x < 20) {
            $f = 11 * $x - 55;
        } else if ($x >= 20) {
            if ($x === 100) {
                $f = "error";
            } else {
                $f = ($x - 100) / (100 - $x) - ($x / 10) + 2;
            }
        }
        if ($f != 'error' && ($f < $minF || $f > $maxF)) {
            break;
        }
        if ($f != "error") {
            $min = min($min, $f);
            $max = max($max, $f);
            $sum += $f;

        }
        if ($f != 'error')
            $f = round($f, 3);
        if ($i === 0){
            switch ($type) {
                case 'B':
                    echo '<ul>';
                    break;
                case 'C':
                    echo '<ol>';
                    break;
                case 'D':
                    echo '<table>';
                    echo '<thead><tr>
                                    <th>Номер</th>
                                    <th>Значение аргумента</th>
                                    <th>Значение функций</th>
                                  </tr></thead>
                                  <tbody>';
                    break;
        
            }
    }
        switch ($type) { // если тип верстки А
            case 'A':
                echo 'f(' . $x . ')=' . $f;    // выводим аргумент и значение функции
                if ($i < $encounting - 1) // если это не последняя итерация цикла
                    echo '<br>';    // выводим знак перевода строки
                break;
            case 'C':
            case 'B':
                echo '<li>f(' . $x . ')=' . $f . '</li>';
                break;
            case 'D':
                echo "<tr><td>" . $i . "</td>";
                echo "<td>" . $x . "</td>";
                echo "<td>" . $f . "</td></tr>";
                break;
            case 'E':
                echo '<div class="func">f(' . $x . ')=' . $f . '</div>';


        }

        $i++;
        $x += $step;

    } while ($i < $encounting);
    switch ($type) {
        case 'B':
            echo '</ul>';
            break;

        case 'C':
            echo '</ol>';
            break;

        case 'D':
            echo '</tbody></table>';
            break;
    }
    if ($i !== 0) {

        echo '<div class="func">min(f)=' . $min . '</div>';
        echo '<div class="func">max(f)=' . $max . '</div>';
        echo '<div class="func">sum(f)=' . $sum . '</div>';
        echo '<div class="func">avg(f)=' . round($sum / $i, 3) . '</div>';
    }
    ?>
</main>


<footer>
    <p style='color: white; margin: 0; padding: 15px;'><?= 'Type: '.$type ?> </p>
</footer>

</body>


</html>
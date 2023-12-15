<!DOCTYPE html>
<?php
function outDivForm()
{
// если параметр content не был передан в программу
    if (!isset($_GET['content'])) {
        for ($i = 2; $i < 10; $i++) // цикл со счетчиком от 2 до 9
        {
            echo '<div class="ttRow">'; // оформляем таблицу в блочной форме
            outRow($i); // вызывем функцию, формирующую содержание
            // столбца умножения на $i (на 4, если $i==4)
            echo '</div>';
        }
    } else {
        echo '<div class="ttRowSingle">'; // оформляем таблицу в блочной форме
        outRow($_GET['content']); // выводим выбранный в меню столбец
        echo '</div>';
    }
}

function outTableForm()
{
// если параметр content не был передан в программу
    
    if (!isset($_GET['content'])) {

        for ($i = 2; $i < 10; $i++) // цикл со счетчиком от 2 до 9
        {
            echo '<table>';
            outRowTable($i); // вызывем функцию, формирующую содержание
            // столбца умножения на $i (на 4, если $i==4)
    echo '</table>';

        }
    } else {
        echo '<table>';

        outRowTable($_GET['content']); // выводим выбранный в меню столбец
    echo '</table>';

    }
}
function outRowTable($n)
{
    echo '<thead><tr>';
        echo '<th>'.$n. '</th>'; // выводим строку столбца с тегом

    echo '</tr></thead>';
    echo '<tbody>';
    for ($i = 2; $i <= 9; $i++) {
        echo '<tr><td>';
        $hrefContent = '?';
        $hrefHtmlType = '';
        if (($i*$n) <= 9){
            $hrefContent = '?content='.($i*$n).'&';
        }
        if (isset($_GET['html_type']) && $_GET['html_type'] == 'div'){
            $hrefHtmlType = 'html_type=div';
        } else {
            $hrefHtmlType = 'html_type=table';
        }
        echo '<a href="?content='.$n.'&'.$hrefHtmlType.'" style="text-decoration: none; color: white;">'.$n . '</a>x<a href="?content='.$i.'&'.$hrefHtmlType.'" style="text-decoration: none; color: white;">' . $i . '</a>=<a href="'.$hrefContent.$hrefHtmlType.'" style="text-decoration: none; color: white;">' . ($i * $n) . '</a>'; // выводим строку столбца с тегом
        echo '</td>';
    }
    echo '</tr>';
}
// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ
function outRow($n)
{
    for ($i = 2; $i <= 9; $i++){ // цикл со счетчиком от 2 до 9
        $hrefContent = '?';
        $hrefHtmlType = '';
        if (($i*$n) <= 9){
            $hrefContent = '?content='.($i*$n).'&';
            
        }
        if (isset($_GET['html_type']) && $_GET['html_type'] == 'div'){
            $hrefHtmlType = 'html_type=div';
        } else {
            $hrefHtmlType = 'html_type=table';
        }
        echo '<a href="?content='.$n.'&'.$hrefHtmlType.'" style="text-decoration: none; color: white;">'.$n . '</a>x<a href="?content='.$i.'&'.$hrefHtmlType.'" style="text-decoration: none; color: white;">' . $i . '</a>=<a href="'.$hrefContent.$hrefHtmlType.'" style="text-decoration: none; color: white;">' . ($i * $n) . '</a><br>'; // выводим строку столбца с тегом

    }
}

?>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл Сергеевич 221-361 лаб. 11</title>
    <link rel="stylesheet" type="text/css" href="static/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <img src="static/image/icon.png" class="iconHeader" alt="">
    <?php
    $content = '';
    if (isset($_GET['content'])) {
        $content = '&content=' . $_GET['content'];
    }

    echo '<a href="?html_type=table' . $content . '"';
    if (isset($_GET['html_type']) && $_GET['html_type'] == 'table') {
        echo 'class="link select">';
    } else {
        echo 'class="link">';
    }
    echo 'Tабличная верстка</a>';

    echo '<a href="?html_type=div' . $content . '"';
    if (isset($_GET['html_type']) && $_GET['html_type'] == 'div') {
        echo 'class="link select">';
    } else {
        echo 'class="link">';
    }
    echo 'Блочная верстка</a>'
    ?>
</header>


<main>
    <div class="sidenav">
        <?php
        $html_type = '';
        if (isset($_GET["html_type"])) {
            $html_type = $_GET['html_type'];
            echo '<a href="index.php?html_type=' . $html_type . '"'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
        } else {
            echo '<a href="index.php"'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
        }
        if (!isset($_GET['content'])) // если в скрипт НЕ был передан параметр content
            echo ' class="select"'; // ссылка выделяется через CSS-класс
        echo '>Вся таблица</a>'; // конец ссылки
        for ($i = 2; $i <= 9; $i++) // цикл со счетчиком от 2 до 9 включительно
        {
            if (isset($_GET["html_type"])) {
                $html_type = $_GET['html_type'];
                echo '<a href="index.php?html_type=' . $html_type . '&content=' . $i . '"';
            } else {
                echo '<a href="index.php?content=' . $i . '"';
            }
// если в скрипт был передан параметр content
// и параметр равен значению счетчика
            if (isset($_GET['content']) && $_GET['content'] == $i)
                echo ' class="select"'; // ссылка выделяется через CSS-класс
            echo '>Таблица на ' . $i . '</a>'; // конец ссылки
        }
        ?>
    </div>
    <div class="right_block">
    <?php

    if (isset($_GET['html_type']) && $_GET['html_type'] == 'div')
        outDivForm(); // выводим таблицу умножения в блочной форме
    else
        outTableForm(); // выводим таблицу умножения в табличной форме


    ?>
    </div>
</main>


<footer>
    <p>Тип верстки: <?php if (isset($_GET['html_type']) && $_GET['html_type'] == 'table') {
            echo 'таблица';
        } else {
            echo 'блок';
        } ?></p>
    <p>Таблица на <?php if (isset($_GET['content'])) echo $_GET['content']; else echo 'все';?>
    <p>Дата и время: <?php echo date("Y-m-d H:i:s") ?> </p>
</footer>

</body>


</html>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл Сергеевич 221-361 лаб. 10</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
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
    include 'analis.php';
    if (!isset($_POST['text'])) {
        echo '<p>Нет текста для анализа</p>';
    } else {
        $inputText = $_POST['text'];
        echo '<div class="src_text">' . $_POST['text'] . '</div>';
        /*echo '<table>
            <thead>
            <tr>
            <th>Кол-во символов в тексте</th>
            <th>Кол-во букв</th>
            <th>Кол-во строчных букв</th>
            <th>Кол-во заглавных букв</th>
            <th>Кол-во знаков препинания</th>
            <th>Кол-во цифр</th>
            <th>Кол-во слов</th>
            <th>Кол-во вхождений каждого символа</th>
            <th>Список всех слов в тексте и кол-во вхождений, отсортированный по алфавиту</th>
</tr>
</thead>';*/
        test_it(iconv("utf-8", "cp1251", $_POST['text']));

    }


    ?>
</main>


<footer>

</footer>

</body>


</html>
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
    if (!isset($_POST['text']) || $_POST['text'] == '') {
        echo '<p style="margin: 0; padding-top: 10px;" >Нет текста для анализа</p>';
    } else {
        $inputText = $_POST['text'];
        echo '<p style="color: green;">' . $_POST['text'] . '</p>';

        test_it(iconv("utf-8", "cp1251", $_POST['text']));

    }


    ?>
</main>


<footer>
    <a style="color: black; background-color: gray; border-radius: 7px; padding: 5px; margin: 10px; margin-top: 15px" href="index.html"> Назад</a>
</footer>

</body>


</html>
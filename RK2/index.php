<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->

</head>

<body>

<?php

$link_main = "index.php";
$link_products = "php/products.php";
$link_login = "php/auth.php";
$link_feedback = "php/feedback.php";
$link_stableFuture = "php/page2.php";
$visibleFeedBack = false;
$visibleAuth = true;
$visibleCorz = false;
$link_corz = 'php/corz.php';
$authText = "";
include "php/connectDB.php";
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
    $visibleFeedBack = true;
    $visibleAuth = false;
    $visibleCorz = true;
    $authText = "Авторизация прошла успешно";
    $_SESSION['auth'] = true;
} else {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $result = mysqli_query($mysql, "SELECT * FROM `users` WHERE `login`='" . $_POST['login'] . "' AND `password`='" . $_POST['password'] . "';");
        $name = mysqli_fetch_assoc($result);
        if (isset($name) && $name['login'] != "" && $name['password'] != "") {
            $visibleFeedBack = true;
            $visibleAuth = false;
            $visibleCorz = true;
            $authText = "Авторизация прошла успешно";
            $_SESSION['auth'] = true;
            echo "<script>window.location.replace('index.php');</script>";

            // $link_products="php/products.php?auth=true";

        } else {
            $authText = "Не верные авторизационные данные";
        }

    }
}

include "php/header.php";

?>

<main>
    <div class="blockWithImg">
        <div class='aboutUs'>
            <h2 class="h2 text">О нас</h2>
            <p class="text">Добро пожаловать в Котофей – место, где забота о вашем питомце становится увлекательным и
                приятным опытом! <br>
                Мы - команда преданных любителей животных, которые разделяют вашу страсть к заботе о маленьких членов
                вашей семьи.</p>
        </div>
        <img src="static/image/cat_logo.png" class="imageCat">

    </div>
    <div class='mission'>
        <h2 class="h2 text">Наша Миссия</h2>
        <p class="text">Мы стремимся сделать заботу о вашем питомце легкой, веселой и доступной. <br>
            Наша миссия – предоставить вам широкий выбор высококачественных товаров для домашних животных, от лучших
            брендов, чтобы ваш питомец чувствовал себя счастливым и заботимым.</p>

    </div>

    <table>
        <thead>
        <tr>
            <th colspan="2" scope="col" class="head">Что мы предлагаем</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="row">Широкий Ассортимент</td>
            <td class="row">От питательных кормов и вкусных лакомств до удобных аксессуаров и уютных домиков - у нас
                есть все необходимое для заботы о вашем питомце.
            </td>
        </tr>
        <tr>
            <td class="row">Экспертные Рекомендации</td>
            <td class="row">Наши сотрудники - настоящие эксперты по уходу за животными. <br>
                Готовы поделиться советами и рекомендациями, чтобы сделать жизнь вашего питомца еще более радостной.
            </td>
        </tr>
        </tbody>
    </table>
</main>


<?php
include 'php/footer.php';
?>

</body>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->

</head>

<body>
    
    <?php
        
        $link_main="../index.php";
        $link_products="products.php";
        $link_login="auth.php";
        $link_feedback="feedback.php";
        $link_stableFuture="page2.php";
        $link_corz = 'corz.php';
        $visibleFeedBack=false;
        $visibleAuth=true;
        $visibleCorz=false;
        $authText = "";
        include "connectDB.php";
        session_start();
        if (isset($_SESSION['auth']) && $_SESSION['auth'] == true){
            $visibleFeedBack=true;
            $visibleAuth=false;
            $visibleCorz=true;
            $authText = "Авторизация прошла успешно";
            $_SESSION['auth'] = true;
        }else {
            
                    $authText = "Не верные авторизационные данные";
        }

        include "header.php";    
    
    ?>

    <main>
    
        <div class="blockWithImg">
        <div class='aboutUs'>
            <h2 class="h2 text">Способы доставки</h2>
            <p class="text">Курьерская доставка: Мы предлагаем удобную курьерскую доставку прямо к вашей двери. Она доступна в пределах города и области. Стоимость доставки будет рассчитана автоматически при оформлении заказа. <br>
Самовывоз: Вы можете забрать свой заказ самостоятельно в нашем магазине. Мы предоставим вам точный адрес и время работы.</p>
        </div>
        <img src="../static/image/dostav.png"  class="imageDostav">

        </div>
        <div class='mission'>
            <h2 class="h2 text">Способы оплаты</h2>
            <p class="text">Оплата наличными: Вы можете оплатить заказ наличными при получении товара от курьера или при самовывозе.<br>
Онлайн-оплата: Мы принимаем онлайн-оплату через платежные системы, такие как PayPal или банковские карты. Это быстрый и безопасный способ оплаты.</p>

        </div>
        
        <table>
            <thead>
                <tr>
                    <th colspan="2" scope="col" class="head">Условия доставки</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="row">Время доставки</td>
                    <td class="row">Мы стремимся осуществлять доставку в течение 1-3 рабочих дней после оформления заказа.</td>
                </tr>
                <tr>
                    <td class="row">Бесплатная доставка</td>
                    <td class="row">Мы предоставляем бесплатную доставку при заказе на определенную сумму (указать сумму).</td>
                </tr>
            </tbody>
        </table>
    </main>


    <?php 
    include 'footer.php';
    ?>

</body>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361</title>
    <link rel="stylesheet" type="text/css" href="../static/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/products.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
</head>
<body>
<?php
$link_main="../index.php";
$link_naturIsAm="naturIsAm.php";
$link_login="auth.php";
$link_feedback="feedback.php";
$link_stableFuture="page2.php";
$link_corz = 'corz.php';

$authText = "";
$visibleFeedBack=false;
$visibleAuth=true;
$visibleCorz=false;
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true){
    $visibleFeedBack=true;
                $visibleAuth=false;
                $visibleCorz=true;
                $authText = "Авторизация прошла успешно";
}
include "connectDB.php";
include "header.php";
include "corzFunc.php";
?>


    <main>
        <h1 class="h1 text">Товары</h1>
        <div class="containerProduct">
            <?php
            
            $result = mysqli_query($mysql, "SELECT * FROM `products`;");
            
            while ($name = mysqli_fetch_assoc($result)) {
                echo ' 
                    <div class="product">
                        <img class="logoProduct" src="../static/image/' .$name["image"]. '" alt='. $name['name'] .'>
                        <p class="text">'.$name['name'].'</p>
                        <p class="text">'.$name['price'].'₽</p>
                    </div>';
            }
            
            
            
            ?>
        </div>
    
    </main>


    <?php 
    include 'footer.php';
    ?>


</body>

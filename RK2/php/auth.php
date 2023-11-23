<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361</title>
    <link rel="stylesheet" type="text/css" href="../static/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/auth.css" media="screen">
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

$visibleFeedBack=false;
$visibleAuth=true;
$authText = "";

$visibleCorz=false;

include "header.php";
?>

    <main>
        
        <form  action="../index.php" method="POST">
            <input type="text" name="login"  class="input" placeholder="Логин">
            <input type="password" name="password"  class="input" placeholder="Пароль">
            <label class="label_box">
                <input type="checkbox" name="remeber" class="checkbox">Запомнить меня
            </label>
            <input type="submit" class="btn" value="Войти">
            <input type="button" class="btn" id='reg' onClick="register();" value="Зарегистрироваться">
        </form>
    
    </main>


    <?php 
    include 'footer.php';
    ?>


</body>
<script>


function register(){
    
    window.location.replace('registration.php');;
}
    </script>
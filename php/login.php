<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361 л4</title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/login.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
</head>
<body>
<?php
$link_main="../index.php";
$link_naturIsAm="naturIsAm.php";
$link_login="login.php";
$link_feedback="feedback.php";
$link_stableFuture="stableFuture.php"; 
include "header.php";
?>

    <main>
        
        <form  action="login.php" method="POST">
            <input type="text" name="login"  class="input" placeholder="Логин">
            <input type="password" name="password"  class="input" placeholder="Пароль">
            <label class="label_box">
                <input type="checkbox" name="remeber" class="checkbox">Запомнить меня
            </label>
            <input type="submit" class="btn" value="Войти">
            <?php
            if (isset($_POST['login']) and isset($_POST['password'])){
            if ($_POST['login'] == 'user' and $_POST['password'] == 'user'){
                echo '<label class="label_box">Авторизация прошла успешно</label>';
            }
            }
            
            ?>
        </form>
    
    </main>


    <?php 
    include 'footer.php';
    ?>


</body>

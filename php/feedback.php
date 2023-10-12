<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361 л4</title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/feedback.css" media="screen">
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
        
        <form action="home.php" method="POST">
            <label class="label_box title">Обратная связь</label>
            <label class="label_box">ФИО: <input type="text" name="name"  class="input label" placeholder="ФИО" <?php if (isset($_GET['N'])) {echo 'value='.$_GET["N"];}?> required> </label>
            <label class="label_box">Email: <input type="email" name="email"  class="input label" placeholder="Email" <?php if (isset($_GET['N'])) {echo 'value='.$_GET["N"];}?>  required> </label>
            <label class="label_box">От куда узнали про наш сайт:</label>
            <label class="label_box">
                <input type="radio" name="distribut" value="friend" class="radiobutton" <?php if ($_GET['S'] == 'friend'){ echo 'checked';}?>>От друга
                <br><br>
                <input type="radio" name="distribut" value="internet" class="radiobutton"<?php if ($_GET['S'] == 'internet'){ echo 'checked';}?>>Из инернета
            </label>

           <label class="label_box">Тип обращения: 
            <select name="type_feedback" class="input select">
                <option value="propose" >Предложение</option>
                <option value="complain" selected>Жалоба</option>
            </select>
            </label>
            <textarea class="input" name="feedback_text" rows="5" cols="33" required></textarea>
            <input class="input" type="file" name='attachment'>
            <label class="label_box">
                <input type="checkbox" name="remeber" class="checkbox">Даю согласие на обработку <br>персональных данных
            </label>
            <input type="submit" class="btn" value="Оправить">
            
        </form>
    </main>


    <?php 
    include 'footer.php';
    ?>
</body>

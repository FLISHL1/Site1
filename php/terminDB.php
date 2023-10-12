<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Конопский Кирилл 221-361 л4</title>
    <link rel="stylesheet" type="text/css" href="../static/css/main.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../static/css/header.css" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    
    <!-- <meta name="http-equiv=&quot;Content-Type&quot;" content="text/html; charset=utf-8"> -->
    <?php
    
    include 'connectDB.php';
    $result = mysqli_query($mysql, "SELECT * FROM `termin`");
    
    ?>
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
<?php

echo '<table class="termin">
        <thead>
            <th scope="col" class="head">Термин</th>
            <th scope="col" class="head">Описание</th>
        </thead>
        <tbody>
';
while ($name = mysqli_fetch_assoc($result)) {
    echo ' 
        <tr>
            <td class="row">'.$name['name'].'</td>
            <td class="row">'.$name['description'].'</td>
        </tr>';
}
echo '</tbody> </table>'
?>
</main>




<?php 
    include 'footer.php';
?>

</body>

<?php

include "connectDB.php";
if (isset($_POST['login']) && isset($_POST['password'])){
    echo "INSERT INTO `users` VALUES ('".$_POST['login']  ."', '" . $_POST['password'] ."')";
    $result = mysqli_query($mysql, "INSERT INTO `users` (login, password) VALUES ('".$_POST['login']  ."', '" . $_POST['password'] ."')");
}
session_start();
$_SESSION['auth'] = true;
echo "<script>window.location.replace('../index.php');</script>";


?>
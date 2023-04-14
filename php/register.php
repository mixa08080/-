<?php
include "connect.php";
//считывание данных формы
$Name = htmlspecialchars(trim($_POST['Name']));
$Last_name = htmlspecialchars(trim($_POST['Last_name']));
$Patronymic = htmlspecialchars(trim($_POST['Patronymic']));
$Login = htmlspecialchars(trim($_POST['Login']));
$Email = htmlspecialchars(trim($_POST['Email']));
$Password = htmlspecialchars(trim($_POST['Password']));
//создание новой записи
$sql = sprintf("INSERT INTO `users` VALUES(NULL, '%s', '%s', '%s', '%s', '%s', '%s','%s')", $Name, $Last_name, $Patronymic, $Login, $Email, $Password, "user");
if (!$connect->query($sql))
    return die("Ошибка добавления данных: " . $connect->error);
return header("Location: ../login.php?message=Вы зарегистрировались");
?>
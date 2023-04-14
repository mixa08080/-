<?php
session_start();

$novigation='<a href="index.php"><img src="images/Noita_Icon.png" alt="Logo"></a>';
if(isset($_SESSION["role"])) {
    $novigation .='
    <a class="button" href="catalog.php">Все видео</a>
    <a class="button" href="wii.php">Мы в Интернете</a>
    ';
}

$menu = '';
if(isset($_SESSION["role"])) {
    $menu .= ($_SESSION["role"] == "admin") ? '<a class="button" href="admin.php">Панель администрации</a>' : '';
    $menu .= '<a class="button" href="php/logout.php">Выход</a>';
} else
    $menu = '
        <a class="button" href="login.php">Вход</a>
        <a class="button" href="register.php">Регистрация</a>
    ';

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Noita видеоблог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/Noita_Icon.png">
</head>
<body>
<header>
    
    <div>
        <div class="novigation">
            <?=$novigation?>
        </div>
        <div class="menu">
            <?=$menu?>
        </div>
    </div>

</header>
<?
if ($_GET["message"]!=null){
echo ('<div class="message">'.($_GET["message"]).'</div>');
}

?>
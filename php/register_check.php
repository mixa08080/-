<?php

include "connect.php";
//считывание логина
$login = $_GET['log'];
//проверка наличия логина в БД
$sql = sprintf("SELECT * FROM `users` WHERE `login`='%s'", $login);
if (!$result = $connect->query($sql))
    return die("Ошибка получения данных: " . $connect->query);
//Вывод результата
if ($user = $result->fetch_assoc())
    echo "true";
else
    echo "false";
?>
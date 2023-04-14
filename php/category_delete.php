<?php
	include "check_admin.php";//Проверяем авторизацию пользователя
	include "connect.php";//Включаем исполнение файла connect.php
	$connect->query("DELETE FROM `categories` WHERE `category` like '".$_POST["category"]."'");//Удаляем запись из таблицы с категориями 
	return header("Location:../admin.php?message=Категория удалена");//Возвращаемся на страницу администрирования с сообщением "Категория удалена"
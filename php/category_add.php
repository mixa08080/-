<?php
	include "check_admin.php";//Проверяем авторизацию пользователя
	include "connect.php";//Включаем исполнение файла connect.php
	$connect->query("INSERT INTO `categories`(`category`) VALUES('".$_POST["category"]."')");//Добавляем новую запись в таблицу с категориями 
	return header("Location:../admin.php?message=Категория добавлена");//Возвращаемся на страницу администрирования с сообщением "Категория добавлена"
<?php
	include "check_admin.php";
	include "connect.php";
	$connect->query("DELETE FROM `users` WHERE `user_id`=".$_GET["id"]);//Удаление строки из таблицы в БД
	return header("Location:../admin.php?message=Пользователь удалён");
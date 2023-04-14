<?php
	include "check_admin.php";//Проверка прав администратора
	include "connect.php";//Подключение к БД
	$connect->query("DELETE FROM `posts` WHERE `post_id`=".$_GET["id"]);//Удаление строки из таблицы в БД
	return header("Location:../admin.php?message=Видеоролик удалён");//Вывод сообщения "Видеоролик удален"
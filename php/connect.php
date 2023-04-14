<?php
	$connect = new mysqli("localhost", "root", "", "noita");//Подключение к базе данных
	$connect->set_charset("utf8");//установка кодировки  

	if($connect->connect_error)//Если возникла ошибка при подключении
		die("Ошибка подключения: ". $connect->connect_error);//Выводим текст ошибки
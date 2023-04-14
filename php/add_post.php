<?php
	include "check_admin.php";//Проверяем авторизацию пользователя
	include "connect.php";//Включаем исполнение файла connect.php
	$cover_link = "images/covers/1_". time() ."_". $_FILES["image"]["name"];//Создаем путь для фото
	move_uploaded_file($_FILES["image"]["tmp_name"], "../".$cover_link);//Добавляем фото в соответствующую папку
	if(!isset($_POST["link"])){
	$video_link = "videos/1_". time() ."_". $_FILES["video"]["name"];//Создаем путь для видео
	move_uploaded_file($_FILES["video"]["tmp_name"], "../".$video_link);//Добавляем видео в соответствующую папку
	}
	else{
		$video_link= $_POST["link"];//если фаил отсутствует добавляем ссылку на фаил
	}//проверяем корректность введённых данных
	if($_FILES["video"]["name"]!=null||$_POST["link"]){
	$connect->query(sprintf("INSERT INTO `posts`(`name`, `cover_link`, `video_link`, `about`, `category`) 
	VALUES('%s', '%s', '%s', '%s', '%s')", 
	$_POST["name"], $cover_link, $video_link, $_POST["about"], $_POST["category"]));//Добавляем новую запись в таблицу
	return header("Location:../admin.php?message=Видеоролик добавлен");//Переходим на страницу администрирования с сообщением "Видеоролик добавлен"
}
else{
	return header("Location:../admin.php?message=Ошибка добавления");
}
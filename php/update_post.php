<?php
	include "check_admin.php";//Проверяем авторизацию пользователя
	include "connect.php";//Включаем исполнение файла connect.php
	if($_FILES["image"]["error"])//Если в последней загрузке фото не возникло ошибок
		$path = $_POST["cover_link"];//До передаем последний использованный путь к фото
	else {//Иначе выбираем новый
		$path = "images/covers/1_". time() ."_". $_FILES["image"]["name"];
		move_uploaded_file($_FILES["image"]["tmp_name"], "../".$path);
	}
	//Обновляем запись Видеоролик
	$connect->query(sprintf("UPDATE `posts` SET `name`='%s', `category`='%s', `about`='%s', `cover_link`='%s' 
	WHERE `post_id`='%s'", $_POST["name"],  $_POST["category"], $_POST["about"], $path, $_POST["id"]));
	//Переходим на страницу видео с сообщением "Видеоролик изменен"
	return header("Location:../post.php?id=".$_POST["id"]."&message=Видеоролик изменён");

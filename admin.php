<?php
include "php/check_admin.php"; //Проверяем права пользователя
include "php/connect.php"; //Включаем исполнение файла connect.php

$sql = "SELECT * FROM `categories`"; //выводим категории
$result = $connect->query($sql); 
$categories = ""; 
while ($row = $result->fetch_assoc()) 
	$categories .= sprintf('<option value="%s">%s</option>', $row["category"], $row["category"]);
//выводим пользователей
$sql = "SELECT * FROM `users`"; //
$result = $connect->query($sql); //
$users = ""; //
while ($row = $result->fetch_assoc()) {
	$users .= sprintf('
			<form action="php/user_delete.php?id=%s" class="user-info">
				<p name="name">Имя: %s </p>
				<p name="surname">Фамилия: %s</p>
				<p name="patronymic">Очество: %s</p>
				<p name="login">Логин: %s</p>
				<p name="email">E-mail: %s</p>
				<input type="hidden" value="%s" name="user_id"/>
				<button>Удалить</button>
			</form>
		', $row["user_id"], $row["name"], $row["surname"], $row["patronymic"], $row["login"], $row["email"], $row["user_id"]);
}
include "header.php";
?>
<!--Подключаем скрипт-->
<script src="scripts/admin.js"></script>
<main>
	<div class="admin-menu">
		<button onclick="categories()">Категории</button>
		<button onclick="video_add()"> Добавление видео</button>
		<button onclick="users()"> Пользователи</button>
	</div>

	<div class="categories" id="categories">
		<!--Секция "Категории"-->
		<h2>Категории</h2>
		<div>
		<form method="POST" action="php/category_add.php">
			<p> Добавление новой категории</p>
			<input type="text" placeholder="Название категории" name="category" required>
			<input type="submit" value="Добавить">
		</form><br>
		<form action="php/category_delete.php" method="POST">
			<p>Удаление категории</p>
			<select name="category" required>
				<option value selected disabled>Категории</option>
				<?= $categories ?>
			</select>
			<input type="submit" value="Удалить">
		</form>
		</div>
	</div>
	<div class="add_video" id="add_video">
		<!--Секция "Добавить видео"-->
		<h2>Добавить видео</h2>
		<div class="admin-menu">
			<button onclick="video_link()">Добавление видео с помощью ссылки</button>
			<button onclick="video_file()">Добавление видео с помощью файла</button>
			
		</div>
		<form enctype="multipart/form-data" action="php/add_post.php" method="POST">
			<input type="text" placeholder="Название" name="name" required>
			<select name="category" required>
				<option value selected disabled>Категория</option>
				<?= $categories ?>
			</select>
			<p >Обложка видеозаписи</p>
			<input type="file" name="image" required accept="image/*">
			<p>Видеозапись</p>
			<input type="file" name="video" id="video" required accept="video/*">
			<input type="text" placeholder="Описание" name="about" required>
			<input type="submit" value="Добавить видеозапись">
			
		</form>
	</div>
	<!--Секция "пользователи" -->
	<div class="users" id="users">
		<?=$users?>
	</div>
</main>

<? include("footer.php"); ?>
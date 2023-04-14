<?php
	include "php/check_admin.php";//Проверяем роль пользователя
	include "php/connect.php";//Подключаемся к БД

	$sql = "SELECT * FROM `posts` WHERE `post_id`=".$_GET["id"];//Выбираем все товар, с тем id, котрый был передан при выборе
	$product = $connect->query($sql)->fetch_assoc();//Получаем массив выборки

	$result = $connect->query("SELECT * FROM `categories`");//Выбираем все записи из таблицы категории
	$categories = "";//Объявляем переменную и присваиваем ей пустое значение
	while($row = $result->fetch_assoc()) {
		$selected = ($product["category"] == $row["categori"]) ? "selected" : "";//Если выбрана одна из категорий, присваиваем переменной categories статус selected, иначе оставляем пустое значение
		$categories .= sprintf('<option value="%s" %s>%s</option>', $row["category"], $selected, $row["category"]);//Выводим выбор на экран
	}

	include "header.php";//Подключаем шапку сайта
?>

	<main>
		<div class="main">
			
			<div class="add_video" style="display: block;"><h2>Изменить видео</h2>
			<!-- Форма изменения видео -->
			<form enctype="multipart/form-data" action="php/update_post.php" method="POST">
				<input type="hidden" name="id" value="<?= $product["post_id"] ?>">
				<input type="hidden" name="cover_link" value="<?= $product["cover_link"] ?>">
				<input type="text" placeholder="Название" name="name" value="<?= $product["name"] ?>" required>

				<select name="category" required>
					<option value selected disabled>Категория</option>
					<?= $categories ?><!-- Вывод списка категорий -->
				</select>

				<p class="text-left">Обложка</p>
				<input type="file" name="image">
				
				<input type="text" placeholder="Описание" name="about" value="<?= $product["about"] ?>" required>
				<button>Изменить</button><!-- Кнопка отправки значений -->
			</form>
            </div>
		</div>
	</main>
<?
include("footer.php");
?>
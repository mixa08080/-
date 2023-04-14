<?php
session_start();
include ("php/connect.php");
include("php/check.php");
$id = (isset($_GET["id"])) ? $_GET["id"] : 0; //Присваиваем переменной значение переданного id, если он не передан, то переменная равна 0
$sql = "SELECT *, DATE_FORMAT(created_at, '%d/%m/%Y %H:%i') as new_date FROM `posts` WHERE `post_id`=" . $id; //Получаем данные о публикации из таблицы в соответствии с id
if (!$result = $connect->query($sql)) //Если запрос не выполнен
    return die("Ошибка получения данных: " . $connect->error); //Выводим сообщение об ошибке
//если публикации не существуюет, возвращаемся на главную страниуц 
if (!$post = $result->fetch_assoc())
    return header("Location:index.php?message=Публикация отсутствует");
include "header.php";
?>
<main>
    <div class="item">
        <!--Выводим видео и данные о нём-->
        <video autoplay controls src="<?= $post["video_link"] ?>" poster="<?= $post["cover_link"] ?>"></video>
            <h1><?= $post["name"] ?></h1>
            <p>Дата публикации: <?= $post["new_date"] ?></p>
            <p>Категория: <?= $post["category"] ?></p>
            <p>Описание: <?= $post["about"] ?></p>
            <?php //Выводим инструменты администрирования
        if ($_SESSION["role"] == "admin")
            echo '
				<div class="admin">
					<p><a href="update.php?id=' . $post["post_id"] . '" class="text-small">Редактировать</a></p>
					<p><a onclick="return confirm(\'Вы действительно хотите удалить это видео?\')" href="php/delete_post.php?id=' . $post["post_id"] . '" class="text-small">Удалить</a></p>
				</div>';
        ?>
    </div>
</main>
<? include("footer.php");?>
<?php
include("header.php");
session_start();
include "php/connect.php";
//вывод всех категорий
$sql = "SELECT * FROM `categories`"; 
$result = $connect->query($sql); 
$categories = ""; 
while ($row = $result->fetch_assoc()) 
	$categories .= sprintf('<button onclick="category_sort('."'".$row["category"]."'".')">%s</button>', $row["category"]);

$sql = "SELECT * FROM `posts`"; //вывод всех публикаций
if (!$result = $connect->query($sql))
    return die("Ошибка получения данных: " . $connect->error);

$data = "";
while ($row = $result->fetch_assoc())
    $data .= sprintf('
			<div class="cotalog-item">
				<a href="post.php?id=%s">
                <img src="%s" alt="" />
				<h3 name="name">%s</h3></a>
                <input type="text" name="date" value="%s" hidden>
                <input type="text" name="category" value="%s" hidden>
			</div>
		', $row["post_id"], $row["cover_link"], $row["name"], $row["created_at"], $row["category"]);

if ($data == "")
    $data = '<h3>Публикации отсутствуют</h3>';

?>
<main>
    <!--Фильтрация-->
    <div class="admin-menu">
		<button onclick="data_sort()">Сортировака по дате</button>
		<button onclick="name_sort()">Сортировака по названию</button>
        <div name="category-sort" class="category-sort">
            <button style="display: block; position: relative;">Категории</button>
            <div>
            <?= $categories ?>
            </div>
        </div>
		<button onclick="clear_sort()">Сброс</button>
    </div>
    <!--Все публикации-->
    <div class="cotalog">
        <?= $data ?>
    </div>
    <script src="scripts/catalog_filter.js"></script>
</main>

<? include("footer.php");?>
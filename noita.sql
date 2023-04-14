-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2023 г., 02:57
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `noita`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Гайд'),
(2, 'Прохождение'),
(3, 'Обзор');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `name`, `cover_link`, `video_link`, `about`, `created_at`, `category`) VALUES
(1, 'Гайд для новичков', 'images/covers/1_1679109937_hqdefault.jpg', 'videos/Guide_for_beginners.mp4', 'Небольшой гайд для тех, кто только начал играть, или собирается начать.', '2023-03-15 08:21:17', 'Гайд'),
(2, 'Гайд на посохи', 'images/covers/jv089z.jpg', 'videos/Guide_to_wands.mp4', 'Краткий но подробный гайд о том как собирать посохи в ноите ', '2023-03-15 09:19:32', 'Гайд'),
(3, 'Noita гайд. Как пройти везде и всюду ', 'images/covers/1_1679259704_Безымянный1.png', 'videos/1_1679259704_Noita гайд. Как пройти везде и всюду.mp4', 'Гайд по добыче двух предметов, которые помогут пройти почти везде и всюду.  Речь пойдет о предметах Паха сильма и Таннеркиви. С ютуб канала Bumus', '2023-03-16 00:07:31', 'Гайд'),
(4, 'Очень веселая игра - Noita', 'images/covers/maxresdefault (1).jpg', 'videos/Очень веселая игра - Noita (1).mp4', 'С ютуб канала Obsidian Time', '2023-03-16 00:21:13', 'Обзор'),
(5, 'Noita Великий Магистр против омега черной дыры', 'images/covers/1_1679262020_maxresdefault (2).jpg', 'videos/1_1679262020_Noita Великий Магистр против омега черной дыры.mp4', 'С ютуб канала Стас М', '2023-03-16 00:40:20', 'Прохождение'),
(7, 'Noita overdose', 'images/covers/1_1679263502_Безымянный1.png', 'videos/1_1679263502_Noita overdose.mp4', 'Noita overdose', '2023-03-16 01:05:02', 'Прохождение'),
(8, 'Круши, ломай, колдуй, изучай! [Обзор Noita]', 'images/covers/1_1679263987_maxresdefault (3).jpg', 'videos/1_1679263987_Круши, ломай, колдуй, изучай! [Обзор Noita].mp4', 'Noita захватила внимание инди-общественности с первого трейлера, где нам продемонстрировали полностью разрушаемое окружение. Однако неотвеченным оставался вопрос: сможет ли игра предложить что-то помимо весёлого разрушения? Давайте разбираться! Видео с ютуб канала  StopGame.Ru', '2023-03-16 01:13:07', 'Обзор'),
(11, 'Я стал НАСТОЯЩЕЙ ведьмочкой - Noita', 'images/covers/1_1679264529_maxresdefault (4).jpg', 'videos/1_1679264529_Я стал НАСТОЯЩЕЙ ведьмочкой - Noita.mp4', 'Видео с ютуб канала Obsidian Time', '2023-03-16 01:22:09', 'Прохождение'),
(12, 'ОБЗОР Noita - я колдовал,меня обливали', 'images/covers/1_1679265046_maxresdefault (5).jpg', 'videos/1_1679265046_ОБЗОР Noita - я колдовал,меня обливали.mp4', 'В данном обзоре я покажу и расскажу о ещё одной интересной игре с мощной физической симуляцией,о которой меня уже давно спрашивают и давно просят рассказать.А именно: Noita. Посмотрим чем она может быть интересна,какие у неё есть минусы, и стоит ли она своих денег и времени. Видео с ютуб канала  Paleolith Games', '2023-03-16 01:30:46', 'Обзор'),
(13, 'Гайд по алхимии для самых маленьких [Noita]', 'images/covers/1_1679265431_maxresdefault (6).jpg', 'videos/1_1679265431_Гайд по алхимии для самых маленьких [Noita].mp4', 'Они хотели алхимию - они её к моему сожалению получили. Видео с ютуб канала Tedanor', '2023-03-16 01:37:11', 'Гайд'),
(14, 'Noita гайд по багам (фичам).', 'images/covers/1_1679265946_maxresdefault (7).jpg', 'videos/1_1679265946_Noita гайд по багам (фичам). Гигантское повышение здоровья, лечение от всего, Бо.mp4', ' Гигантское повышение здоровья, лечение от всего, Босс мастер жезлов. Видео с ютуб канала  Bumus', '2023-03-16 01:45:46', 'Гайд'),
(15, 'Ноита и 16 из 20 попыток выжить [Noita]', 'images/covers/1_1679268774_maxresdefault (9).jpg', 'videos/1_1679268774_Ноита и 16 из 20 попыток выжить [Noita].mp4', 'Видео с канала  Zixman', '2023-03-16 02:32:54', 'Прохождение'),
(16, 'Ноита и ещё 4 из 20 попыток выжить [Noita]', 'images/covers/1_1679268852_maxresdefault (10).jpg', 'videos/1_1679268852_Ноита и ещё 4 из 20 попыток выжить [Noita].mp4', 'Видео с ютуб канала Zixman', '2023-03-16 02:34:12', 'Прохождение'),
(17, 'Что такое Noita - бесполезное мнение.', 'images/covers/1_1679269139_maxresdefault (11).jpg', 'videos/1_1679269139_Что такое Noita - бесполезное мнение. Пей мочу, кастуй алкоголь, воскрешай уток.mp4', 'Видео с ютуб канала  Velind', '2023-03-16 02:38:59', 'Обзор'),
(18, 'Лучший рогалик? | Обзор Нойты', 'images/covers/1_1679269341_maxresdefault (12).jpg', 'videos/1_1679269341_The Best Roguelike _ A Noita Review.mp4', 'Видео с ютуб канала Purple Gaming', '2023-03-16 02:42:21', 'Обзор');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `role`) VALUES
(1, 'Иванов', 'Иван', 'Иванович', 'admin', 'admin@admin.ru', 'admin1', 'admin'),
(2, 'тест', 'Тест', 'тест', 'test', 'test@test.ru', '123456', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

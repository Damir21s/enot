-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2023 г., 21:27
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `char_code` varchar(11) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `value` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `char_code`, `name`, `value`) VALUES
(1, 'AUD', 'Австралийский доллар', '46,9980'),
(2, 'AZN', 'Азербайджанский манат', '39,7496'),
(3, 'GBP', 'Фунт стерлингов Соединенного королевства', '82,2853'),
(4, 'AMD', 'Армянских драмов', '17,0401'),
(5, 'BYN', 'Белорусский рубль', '25,9353'),
(6, 'BGN', 'Болгарский лев', '37,2167'),
(7, 'BRL', 'Бразильский реал', '13,1475'),
(8, 'HUF', 'Венгерских форинтов', '18,4938'),
(9, 'HKD', 'Гонконгских долларов', '86,6672'),
(10, 'DKK', 'Датских крон', '97,8573'),
(11, 'USD', 'Доллар США', '67,5744'),
(12, 'EUR', 'Евро', '73,1131'),
(13, 'INR', 'Индийских рупий', '81,7747'),
(14, 'KZT', 'Казахстанских тенге', '14,6082'),
(15, 'CAD', 'Канадский доллар', '50,5116'),
(16, 'KGS', 'Киргизских сомов', '78,8683'),
(17, 'CNY', 'Китайский юань', '10,0307'),
(18, 'MDL', 'Молдавских леев', '35,2589'),
(19, 'NOK', 'Норвежских крон', '68,3502'),
(20, 'PLN', 'Польский злотый', '15,5809'),
(21, 'RON', 'Румынский лей', '14,8228'),
(22, 'XDR', 'СДР (специальные права заимствования)', '90,8342'),
(23, 'SGD', 'Сингапурский доллар', '51,0766'),
(24, 'TJS', 'Таджикских сомони', '65,9874'),
(25, 'TRY', 'Турецких лир', '35,9865'),
(26, 'TMT', 'Новый туркменский манат', '19,3070'),
(27, 'UZS', 'Узбекских сумов', '59,7983'),
(28, 'UAH', 'Украинских гривен', '18,3043'),
(29, 'CZK', 'Чешских крон', '30,2861'),
(30, 'SEK', 'Шведских крон', '65,0442'),
(31, 'CHF', 'Швейцарский франк', '72,7702'),
(32, 'ZAR', 'Южноафриканских рэндов', '40,3996'),
(33, 'KRW', 'Вон Республики Корея', '54,4384'),
(34, 'JPY', 'Японских иен', '52,2900');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'damir', 'd00b510fdd0dccff2bc5bb9c9fe54728'),
(2, 'damir1234', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'damir123', 'bd78eca4ceb22e538948be6290e3de67');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

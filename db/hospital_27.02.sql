-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 27 2023 г., 13:11
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hospital`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accept-pation`
--

CREATE TABLE `accept-pation` (
  `id` int(11) NOT NULL,
  `id-doctor` int(11) NOT NULL,
  `ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
  `Id` int(11) NOT NULL,
  `id-doctor` int(11) NOT NULL,
  `id-pation` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pation`
--

CREATE TABLE `pation` (
  `id` int(11) NOT NULL,
  `idrole` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `direction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `pation`
--

INSERT INTO `pation` (`id`, `idrole`, `identcode`, `fio`, `phone`, `email`, `direction`) VALUES
(1, 1, 547758, '', '123', 'admin', ''),
(2, 2, 160971, '', '321', 'doctor', ''),
(3, 3, 394990, '', '456', 'pation', ''),
(4, 3, 890781, '', '654', 'test', '');

-- --------------------------------------------------------

--
-- Структура таблицы `sendmail`
--

CREATE TABLE `sendmail` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `icode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accept-pation`
--
ALTER TABLE `accept-pation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `pation`
--
ALTER TABLE `pation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sendmail`
--
ALTER TABLE `sendmail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accept-pation`
--
ALTER TABLE `accept-pation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pation`
--
ALTER TABLE `pation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sendmail`
--
ALTER TABLE `sendmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

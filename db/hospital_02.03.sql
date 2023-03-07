-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 02 2023 г., 20:13
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 7.4.33

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
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `iddoctor` int(11) NOT NULL,
  `idpation` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id`, `identcode`, `iddoctor`, `idpation`, `date`, `timeticket`, `free`) VALUES
(30, 21786818, 2, 3, '2023-03-03', '9-00', 1);

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
  `direction` varchar(100) NOT NULL,
  `locking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `pation`
--

INSERT INTO `pation` (`id`, `idrole`, `identcode`, `fio`, `phone`, `email`, `direction`, `locking`) VALUES
(1, 1, 547758, 'Василий Пупкин Романович', '123', 'admin', '', 0),
(2, 2, 160971, 'Василий Пупкин Максимович', '321', 'doctor', 'Фельдшер', 0),
(3, 3, 394990, 'Роман Филин Андреевич', '456', 'pation', '', 0),
(4, 3, 890781, '', '654', 'test', '', 0),
(5, 2, 581517, 'Алексей Буняев Кирилович', '789', 'doctor2', 'Окушер', 0),
(6, 1, 828272, 'Журенко Даниил Максимович', '987', 'admin2', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `sendmail`
--

CREATE TABLE `sendmail` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `icode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `timework`
--

CREATE TABLE `timework` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework`
--

INSERT INTO `timework` (`id`, `time`) VALUES
(1, '9-00'),
(2, '9-30'),
(3, '10-00'),
(4, '10-30'),
(5, '11-00'),
(6, '11-30'),
(7, '13-00'),
(8, '13-30'),
(9, '14-00'),
(10, '14-30'),
(11, '15-00'),
(12, '15-30');

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
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `timework`
--
ALTER TABLE `timework`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `pation`
--
ALTER TABLE `pation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sendmail`
--
ALTER TABLE `sendmail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `timework`
--
ALTER TABLE `timework`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

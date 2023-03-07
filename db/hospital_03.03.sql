-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 03 2023 г., 20:35
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
  `iddoctor` int(11) NOT NULL,
  `idpation` int(11) NOT NULL,
  `ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `accept-pation`
--

INSERT INTO `accept-pation` (`id`, `iddoctor`, `idpation`, `ticket`) VALUES
(6, 11, 3, 80710286);

-- --------------------------------------------------------

--
-- Структура таблицы `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appointment`
--

INSERT INTO `appointment` (`id`, `identcode`, `fiodoctor`, `fiopation`, `idpation`, `direction`, `date`, `timeticket`, `free`) VALUES
(35, 80710286, 'Василий Пупкин Максимович', 'Роман Филин Андреевич', 3, 'Фельдшер', '2023-03-03', '9-00', 0),
(36, 49283029, 'Василий Пупкин Максимович', 'Роман Филин Андреевич', 3, 'Фельдшер', '2023-03-06', '15-30', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-2`
--

CREATE TABLE `appointment-2` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appointment-2`
--

INSERT INTO `appointment-2` (`id`, `identcode`, `fiodoctor`, `fiopation`, `idpation`, `direction`, `date`, `timeticket`, `free`) VALUES
(2, 78608001, 'Алексей Буняев Кирилович', 'Роман Филин Андреевич', 3, 'Окушер', '2023-03-06', '10-30', 1),
(3, 78767348, 'Алексей Буняев Кирилович', 'Роман Филин Андреевич', 3, 'Окушер', '2023-03-06', '9-30', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-3`
--

CREATE TABLE `appointment-3` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-4`
--

CREATE TABLE `appointment-4` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-5`
--

CREATE TABLE `appointment-5` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appointment-5`
--

INSERT INTO `appointment-5` (`id`, `identcode`, `fiodoctor`, `fiopation`, `idpation`, `direction`, `date`, `timeticket`, `free`) VALUES
(1, 11267331, 'Нестерова Инна Ивановна', 'Роман Филин Андреевич', 3, 'Эндокринолог', '2023-03-06', '9-00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-6`
--

CREATE TABLE `appointment-6` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-7`
--

CREATE TABLE `appointment-7` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appointment-7`
--

INSERT INTO `appointment-7` (`id`, `identcode`, `fiodoctor`, `fiopation`, `idpation`, `direction`, `date`, `timeticket`, `free`) VALUES
(1, 49395599, 'Куликова Ольга Михайловна', 'Роман Филин Андреевич', 3, 'Невролог', '2023-03-06', '15-00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-8`
--

CREATE TABLE `appointment-8` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-9`
--

CREATE TABLE `appointment-9` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appointment-10`
--

CREATE TABLE `appointment-10` (
  `id` int(11) NOT NULL,
  `identcode` int(11) NOT NULL,
  `fiodoctor` varchar(100) NOT NULL,
  `fiopation` varchar(100) NOT NULL,
  `idpation` int(11) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `timeticket` text NOT NULL,
  `free` int(11) NOT NULL
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
(4, 3, 890781, 'Александр Емальян Петрович', '654', 'test', '', 0),
(5, 2, 581517, 'Алексей Буняев Кирилович', '789', 'doctor2', 'Окушер', 0),
(6, 1, 828272, 'Журенко Даниил Максимович', '987', 'admin2', '', 0),
(7, 2, 879710, 'Милай Алексей Николаевич', '86535', 'weuhyfsb', 'Хирург', 0),
(8, 2, 486344, 'Воробьёва Татьяна Владимировна', 'Врач УЗИ', 'ncvpsdg', 'Врач УЗИ', 0),
(9, 2, 785050, 'Нестерова Инна Ивановна', '5324205477', 'uisfbasc', 'Эндокринолог', 0),
(10, 2, 396026, 'Курыгина Лариса Николаевна', '3640257', 'hasmxcbp', 'Терапевт', 0),
(11, 2, 127761, 'Куликова Ольга Михайловна', '2472789', 'qfmzisf', 'Невролог', 0),
(12, 2, 431255, 'Шанько Наталья Владимировна', '3674275', 'hjklaspfds', 'Пульмонолог', 0),
(13, 2, 385509, 'Патока Алексей Федорович', '75925765', 'spabxmhf', 'ЛОР', 0),
(14, 2, 560299, 'Серебряков Игорь Николаевич', '21474789', 'klbvcxuidsw', 'Гастроэнтеролог', 0);

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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-2`
--

CREATE TABLE `timework-2` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-2`
--

INSERT INTO `timework-2` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-3`
--

CREATE TABLE `timework-3` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-3`
--

INSERT INTO `timework-3` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-4`
--

CREATE TABLE `timework-4` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-4`
--

INSERT INTO `timework-4` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-5`
--

CREATE TABLE `timework-5` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-5`
--

INSERT INTO `timework-5` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-6`
--

CREATE TABLE `timework-6` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-6`
--

INSERT INTO `timework-6` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-7`
--

CREATE TABLE `timework-7` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-7`
--

INSERT INTO `timework-7` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-8`
--

CREATE TABLE `timework-8` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-8`
--

INSERT INTO `timework-8` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-9`
--

CREATE TABLE `timework-9` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-9`
--

INSERT INTO `timework-9` (`id`, `time`) VALUES
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

-- --------------------------------------------------------

--
-- Структура таблицы `timework-10`
--

CREATE TABLE `timework-10` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `timework-10`
--

INSERT INTO `timework-10` (`id`, `time`) VALUES
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
-- Индексы таблицы `appointment-2`
--
ALTER TABLE `appointment-2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-3`
--
ALTER TABLE `appointment-3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-4`
--
ALTER TABLE `appointment-4`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-5`
--
ALTER TABLE `appointment-5`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-6`
--
ALTER TABLE `appointment-6`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-7`
--
ALTER TABLE `appointment-7`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-8`
--
ALTER TABLE `appointment-8`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-9`
--
ALTER TABLE `appointment-9`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `appointment-10`
--
ALTER TABLE `appointment-10`
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
-- Индексы таблицы `timework-2`
--
ALTER TABLE `timework-2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-3`
--
ALTER TABLE `timework-3`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-4`
--
ALTER TABLE `timework-4`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-5`
--
ALTER TABLE `timework-5`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-6`
--
ALTER TABLE `timework-6`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-7`
--
ALTER TABLE `timework-7`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-8`
--
ALTER TABLE `timework-8`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-9`
--
ALTER TABLE `timework-9`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `timework-10`
--
ALTER TABLE `timework-10`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accept-pation`
--
ALTER TABLE `accept-pation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `appointment-2`
--
ALTER TABLE `appointment-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `appointment-3`
--
ALTER TABLE `appointment-3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment-4`
--
ALTER TABLE `appointment-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment-5`
--
ALTER TABLE `appointment-5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `appointment-6`
--
ALTER TABLE `appointment-6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment-7`
--
ALTER TABLE `appointment-7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `appointment-8`
--
ALTER TABLE `appointment-8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment-9`
--
ALTER TABLE `appointment-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appointment-10`
--
ALTER TABLE `appointment-10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pation`
--
ALTER TABLE `pation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

--
-- AUTO_INCREMENT для таблицы `timework-2`
--
ALTER TABLE `timework-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-3`
--
ALTER TABLE `timework-3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-4`
--
ALTER TABLE `timework-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-5`
--
ALTER TABLE `timework-5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-6`
--
ALTER TABLE `timework-6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-7`
--
ALTER TABLE `timework-7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `timework-8`
--
ALTER TABLE `timework-8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-9`
--
ALTER TABLE `timework-9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `timework-10`
--
ALTER TABLE `timework-10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

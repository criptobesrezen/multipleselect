-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 20 2017 г., 08:51
-- Версия сервера: 5.5.52-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `aut_id` int(11) NOT NULL,
  `aut_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`aut_id`, `aut_name`) VALUES
(1, 'Stephan King'),
(2, 'J.K. Rowling'),
(3, 'Steve Jobs'),
(4, 'Лев Николаевич Толстой'),
(5, 'Haruki Murakami'),
(8, 'Пушкин');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_library`
--

CREATE TABLE IF NOT EXISTS `tbl_library` (
  `book_id` int(11) NOT NULL,
  `book` varchar(50) NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tbl_library`
--

INSERT INTO `tbl_library` (`book_id`, `book`, `author`) VALUES
(3, 'Война и мир', 'Лев Николаевич Толстой'),
(8, 'Harry Potter and Pholosopher stone', 'J.K. Rowling'),
(11, 'Book', 'Stephan King'),
(12, 'Book', 'J.K. Rowling'),
(13, 'Книга последняя', 'Steve Jobs'),
(14, 'Книга последняя', 'Лев Николаевич Толстой'),
(15, 'Книга последняя', 'Haruki Murakami');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`aut_id`);

--
-- Индексы таблицы `tbl_library`
--
ALTER TABLE `tbl_library`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `aut_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `tbl_library`
--
ALTER TABLE `tbl_library`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

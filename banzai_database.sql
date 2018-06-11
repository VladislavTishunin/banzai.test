-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2018 г., 20:46
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `banzai`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `full_name` varchar(255) NOT NULL,
  `position_title` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`full_name`, `position_title`, `birthdate`, `sex`) VALUES
('Тишунин Владислав', 'Senior PHP Developer', '2018-06-06', 'Женский'),
('Тишунин Владислав Олегович', 'Middle PHP Developer', '1970-01-01', 'Мужской'),
('123test', 'Middle PHP Developer', '2011-01-14', 'Женский'),
('test', 'Senior PHP Developer', '1990-05-15', 'Мужской'),
('1232323', 'Middle PHP Developer', '2000-02-11', 'Мужской'),
('test user', 'Junior PHP Developer', '2018-01-11', 'Мужской');

-- --------------------------------------------------------

--
-- Структура таблицы `positions`
--

CREATE TABLE `positions` (
  `position_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `positions`
--

INSERT INTO `positions` (`position_title`) VALUES
('Junior PHP Developer'),
('Middle PHP Developer'),
('Senior PHP Developer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

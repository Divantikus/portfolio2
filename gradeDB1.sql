-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных grade
CREATE DATABASE IF NOT EXISTS `grade` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `grade`;

-- Дамп структуры для таблица grade.disciplines
CREATE TABLE IF NOT EXISTS `disciplines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL DEFAULT 'Дисциплина не указана',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы grade.disciplines: ~8 rows (приблизительно)
INSERT INTO `disciplines` (`id`, `name`) VALUES
	(1, 'Информационные системы и технологии'),
	(2, 'Операционные системы'),
	(3, 'Бухгалтерский учёт'),
	(4, 'Психология'),
	(5, 'Логика'),
	(6, 'Вычислительные системы, сети и телекоммуникации'),
	(7, 'Теория вероятностей и математическая статистика'),
	(8, 'Test');

-- Дамп структуры для таблица grade.evaluations
CREATE TABLE IF NOT EXISTS `evaluations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `evaluation` enum('Не указано','Неудовлетворительно','Удовлетворительно','Хорошо','Отлично') NOT NULL DEFAULT 'Не указано',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы grade.evaluations: ~4 rows (приблизительно)
INSERT INTO `evaluations` (`id`, `evaluation`) VALUES
	(1, 'Неудовлетворительно'),
	(2, 'Удовлетворительно'),
	(3, 'Хорошо'),
	(4, 'Отлично');

-- Дамп структуры для таблица grade.grade
CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `discipline_id` int(10) unsigned NOT NULL,
  `evaluation_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_grade_students` (`student_id`),
  KEY `FK_grade_disciplines` (`discipline_id`),
  KEY `FK_grade_evaluations` (`evaluation_id`),
  CONSTRAINT `FK_grade_disciplines` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_grade_evaluations` FOREIGN KEY (`evaluation_id`) REFERENCES `evaluations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_grade_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы grade.grade: ~10 rows (приблизительно)
INSERT INTO `grade` (`id`, `student_id`, `discipline_id`, `evaluation_id`) VALUES
	(1, 1, 1, 3),
	(2, 1, 2, 3),
	(3, 1, 3, 3),
	(4, 1, 4, 3),
	(5, 1, 5, 3),
	(6, 1, 6, 3),
	(7, 1, 7, 2),
	(8, 2, 1, 4),
	(9, 3, 3, 4),
	(12, 1, 8, 1);

-- Дамп структуры для таблица grade.students
CREATE TABLE IF NOT EXISTS `students` (
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Дамп данных таблицы grade.students: ~3 rows (приблизительно)
INSERT INTO `students` (`firstname`, `secondname`, `id`) VALUES
	('Иван', 'Ченгарь', 1),
	('Пётр', 'Антипов', 2),
	('Семён', 'Краткий', 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

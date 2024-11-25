CREATE DATABASE IF NOT EXISTS `coffee`;
USE `coffee`;

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `number_of_people` int(11) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `special_request` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
);

INSERT INTO `booking` (`id`, `name`, `date`, `time`, `number_of_people`, `contact`, `special_request`, `created_at`) VALUES
	(1, 'test', '2024-03-13', '02:09:00', 12, '123456789', 'asdasdsad', '2024-03-07 18:22:20');

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `subject` varchar(50) NOT NULL DEFAULT '0',
  `message` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `special_request` text DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `takeaway` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
);

INSERT INTO `orders` (`id`, `table`, `item`, `name`, `contact`, `special_request`, `address`, `takeaway`, `created_at`) VALUES
	(4, '123', '123', '123', '123', '123', NULL, 0, '2024-03-07 18:58:42'),
	(5, '123', '123', '123', '123', '123', 'test', 1, '2024-03-07 18:58:42'),
	(6, 'test', 'test', 'test', 'test', 'test', 'test99', 1, '2024-03-08 14:32:23'),
	(7, 'testing1', 'testing2', 'testing3', 'testing4', 'testing5', 'testing6', 1, '2024-03-08 14:35:27');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
);

INSERT INTO `users` (`id`, `email`, `password`, `register_code`, `created_at`) VALUES
	(1, 'manoj@gmail.com', '132', '1111', '2024-02-27 15:46:34');
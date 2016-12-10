CREATE DATABASE `tanaka_san`;

use tanaka_san;

CREATE TABLE `profits` (
	  `id` int(11) NOT NULL,
	  `earnings` varchar(100),
	  `cost` varchar(100),
	  `profit` varchar(100),
	  `created` datetime NOT NULL,
	  `updated` datetime NOT NULL

) ENGINE=InnoDB;
ALTER TABLE `profits` ADD PRIMARY KEY (`id`);
ALTER TABLE `profits` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `profits` (`earnings`, `cost`, `profit`, `created`, `updated`) VALUES (10000, 2000, 8000, now(), now());
INSERT INTO `profits` (`earnings`, `cost`, `profit`, `created`, `updated`) VALUES (20000, 4000, 16000, now(), now());
INSERT INTO `profits` (`earnings`, `cost`, `profit`, `created`, `updated`) VALUES (15000, 3000, 12000, now(), now());
INSERT INTO `profits` (`earnings`, `cost`, `profit`, `created`, `updated`) VALUES (8000, 1500, 6500, now(), now());
INSERT INTO `profits` (`earnings`, `cost`, `profit`, `created`, `updated`) VALUES (40000, 8000, 32000, now(), now());

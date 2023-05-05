CREATE TABLE `mario_db`.`questions` (`id` INT NOT NULL , `text` TEXT NOT NULL ) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`answers` (`id` INT NOT NULL AUTO_INCREMENT , `question_idw` INT NOT NULL , `correct` TINYINT NOT NULL DEFAULT '0' , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
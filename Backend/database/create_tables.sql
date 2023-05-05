CREATE TABLE `mario_db`.`questions` (`id` INT NOT NULL , `text` TEXT NOT NULL ) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`answers` (`id` INT NOT NULL AUTO_INCREMENT , `question_idw` INT NOT NULL , `correct` TINYINT NOT NULL DEFAULT '0' , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`trivia_scores` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `score` INT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , `username` TEXT NOT NULL , `password` TEXT NOT NULL , `first_name` TEXT NOT NULL, `last_name` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;
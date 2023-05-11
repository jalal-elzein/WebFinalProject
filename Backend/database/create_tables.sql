CREATE TABLE `mario_db`.`questions` (`id` INT NOT NULL , `text` TEXT NOT NULL ) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`answers` (`id` INT NOT NULL AUTO_INCREMENT , `question_id` INT NOT NULL , `correct` TINYINT NOT NULL DEFAULT '0' , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`trivia_scores` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `score` INT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , `username` TEXT NOT NULL , `password` TEXT NOT NULL , `first_name` TEXT NOT NULL, `last_name` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`game_scores` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `score` INT NOT NULL , `date` DATETIME NOT NULL , `time` INT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `mario_db`.`messages` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `content` LONGTEXT NOT NULL , `time` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `users` ADD `phone` TEXT NULL AFTER `last_name`, ADD `birthdate` DATE NULL AFTER `phone`, ADD `twitter_link` TEXT NULL AFTER `birthdate`, ADD `instagram_link` TEXT NULL AFTER `twitter_link`, ADD `facebook_link` TEXT NULL AFTER `instagram_link`;

-- jalal
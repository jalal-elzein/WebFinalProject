CREATE TABLE `test_db`.`users` (`id` INT NOT NULL AUTO_INCREMENT, `username` TEXT NULL, `email` TEXT NOT NULL, `password` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `test_db`.`triviascores` (`id` INT NOT NULL AUTO_INCREMENT, `userid` INT NOT NULL, `score` INT NOT NULL, `date` DATE NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `test_db`.`gamescores` (`id` INT NOT NULL AUTO_INCREMENT, `userid` INT NOT NULL, `score` INT NOT NULL, `date` DATE NULL), PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `test_db`.`triviaquestions` (`id` INT NOT NULL AUTO_INCREMENT, `question` TEXT NOT NULL, `answer` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `test_db`.`articles` (`id` INT NOT NULL AUTO_INCREMENT, `title` TEXT NOT NULL, `body` TEXT, `date` DATE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `test_db`.`memes` (`id` INT NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;
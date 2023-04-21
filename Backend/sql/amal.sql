CREATE TABLE `web`.`users` (`id` INT NOT NULL AUTO_INCREMENT, `username` TEXT NULL, `email` TEXT NOT NULL, `password` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `web`.`triviascores` (`id` INT NOT NULL AUTO_INCREMENT, `userid` INT NOT NULL, `score` INT NOT NULL, `date` DATE NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `web`.`gamescores` ( `id` INT NOT NULL AUTO_INCREMENT, `userid` INT NOT NULL, `score` INT NOT NULL, `date` DATE NULL, PRIMARY KEY (`id`) ) ENGINE = MyISAM;

CREATE TABLE `web`.`triviaquestions` (`id` INT NOT NULL AUTO_INCREMENT, `question` TEXT NOT NULL, `answer` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `web`.`articles` (`id` INT NOT NULL AUTO_INCREMENT, `title` TEXT NOT NULL, `body` TEXT, `date` DATE NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `web`.`memes` (`id` INT NOT NULL AUTO_INCREMENT, `name` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;
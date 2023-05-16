CREATE TABLE `questions` (`id` INT NOT NULL , `text` TEXT NOT NULL ) ENGINE = MyISAM;

CREATE TABLE `answers` (`id` INT NOT NULL AUTO_INCREMENT , `question_id` INT NOT NULL , `correct` TINYINT NOT NULL DEFAULT '0' , `text` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `trivia_scores` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `score` INT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `users` (`id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , `username` TEXT NOT NULL , `password` TEXT NOT NULL , `first_name` TEXT NOT NULL, `last_name` TEXT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `game_scores` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `score` INT NOT NULL , `date` DATETIME NOT NULL , `time` INT NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;

CREATE TABLE `messages` (`id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `content` LONGTEXT NOT NULL , `time` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `users` ADD `phone` TEXT NULL AFTER `last_name`, ADD `birthdate` DATE NULL AFTER `phone`, ADD `twitter_link` TEXT NULL AFTER `birthdate`, ADD `instagram_link` TEXT NULL AFTER `twitter_link`, ADD `facebook_link` TEXT NULL AFTER `instagram_link`;


INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('1', '0', '1981');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('1', '0', '1983');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('1', '1', '1985');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('1', '0', '1987');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('2', '1', 'Bowser');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('2', '0', 'Wario');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('2', '0', 'Donkey Kong');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('2', '0', 'King K. Rool');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('3', '1', 'Luigi');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('3', '0', 'Wario');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('3', '0', 'Yoshi');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('3', '0', 'Toad');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('4', '1', 'Yoshi');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('4', '0', 'Diddy Kong');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('4', '0', 'Dixie Kong');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('4', '0', 'Kamek');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('5', '0', 'Princess Daisy');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('5', '1', 'Princess Peach');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('5', '0', 'Princess Zelda');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('5', '0', 'Queen Else');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('6', '0', 'Super Mario Galaxy');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('6', '0', 'Super Mario Sunshine');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('6', '1', 'Super Mario 64');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('6', '0', 'Super Mario Odyssey');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('7', '0', 'Super Mario Bros.');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('7', '0', 'Super Mario Bros. 2');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('7', '0', 'Super Mario Bros. 3');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('7', '1', 'Super Mario World');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('8', '1', 'Super Mario Bros.');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('8', '0', 'Super Mario Bros. 2');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('8', '0', 'Super Mario Bros. 3');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('8', '0', 'Super Mario World');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('9', '0', 'Princess Peach');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('9', '0', 'Princess Zelda');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('9', '0', 'Queen Valentina');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('9', '1', 'Princess Toadstool');
 
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('10', '0', 'Poochy');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('10', '0', 'Lakitu');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('10', '0', 'Cape Feather');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('10', '1', 'Winged Yoshi');

INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('11', '1', 'Super Mario Sunshine');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('11', '0', 'Super Mario Galaxy');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('11', '0', 'Super Mario 3D Land');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('11', '0', 'Super Mario Bros. Wii');

INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('12', '0', 'Super Mario Bros.');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('12', '1', 'Mario Kart');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('12', '0', 'Mario Party');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('12', '0', 'Mario Tennis');

INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('13', '0', 'Mushroom Kingdom');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('13', '0', 'Rainbow Road');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('13', '0', 'Peach Castle');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('13', '1', 'Mario Circuit');

INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('14', '0', 'Mario');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('14', '0', 'Luigi');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('14', '1', 'Toad');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('14', '0', 'Princess Peach');

INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('15', '0', 'His fists');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('15', '0', 'A sword');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('15', '0', 'A hammer');
INSERT INTO `answers` (`question_id`, `correct`, `text`) VALUES ('15', '1', 'Fireballs');



INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ('1', '500', '2023-05-06 15:48:05.000000', '30');
INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ('2', '400', '2023-05-06 15:48:05.000000', '30');
INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ('3', '600', '2023-05-06 15:48:05.000000', '30');
INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ('4', '700', '2023-05-06 15:48:05.000000', '30');
INSERT INTO `game_scores` (`user_id`, `score`, `date`, `time`) VALUES ('5', '100', '2023-05-06 15:48:05.000000', '30');


INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ('1', 'This is the first ever message!!!11!!!!!!!!', NOW());
INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ('2', 'This is the second ever message!!!11!!!!!!!!', NOW());
INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ('3', 'This is the third ever message!!!11!!!!!!!!', NOW());
INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ('4', 'This is the fourth ever message!!!11!!!!!!!!', NOW());
INSERT INTO `messages` (`user_id`, `content`, `time`) VALUES ('5', 'This is the fifth ever message!!!11!!!!!!!!', NOW());



INSERT INTO `questions` (`id`, `text`) VALUES ('1', 'In which year was the original Super Mario Bros. game released?');
INSERT INTO `questions` (`id`, `text`) VALUES ('2', 'Who is the main villain in the Super Mario series?');
INSERT INTO `questions` (`id`, `text`) VALUES ('3', 'What is the name of Marios brother?');
INSERT INTO `questions` (`id`, `text`) VALUES ('4', 'What is the name of Marios dinosaur companion?');
INSERT INTO `questions` (`id`, `text`) VALUES ('5', 'What is the name of the princess that Mario constantly saves?');
INSERT INTO `questions` (`id`, `text`) VALUES ('6', 'What is the name of the first 3D Mario game?');
INSERT INTO `questions` (`id`, `text`) VALUES ('7', 'In which game did Yoshi first make an appearance?');
INSERT INTO `questions` (`id`, `text`) VALUES ('8', 'Which Mario game introduced the use of power-ups?');
INSERT INTO `questions` (`id`, `text`) VALUES ('9', 'What is the name of the princess in Super Mario RPG: Legend of the Seven Stars?');
INSERT INTO `questions` (`id`, `text`) VALUES ('10', 'What is the name of Marios flying companion in Super Mario World?');
INSERT INTO `questions` (`id`, `text`) VALUES ('11', 'Which game introduced the character of Bowser Jr.?');
INSERT INTO `questions` (`id`, `text`) VALUES ('12', 'Which game did not feature Mario as the main character?');
INSERT INTO `questions` (`id`, `text`) VALUES ('13', 'What is the name of the location where Mario and friends go to race go-karts?');
INSERT INTO `questions` (`id`, `text`) VALUES ('15', 'In Super Mario Bros., what does Mario use to defeat enemies?');
INSERT INTO `questions` (`id`, `text`) VALUES ('14', 'Which character has a special ability to turn invisible in Super Mario Bros. 2?');



INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ('1', '2', '2023-05-05 17:10:15.000000');
INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ('2', '3', '2023-05-05 17:10:15.000000');
INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ('3', '4', '2023-05-05 17:10:15.000000');
INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ('4', '1', '2023-05-05 17:10:15.000000');
INSERT INTO `trivia_scores` (`user_id`, `score`, `date`) VALUES ('5', '6', '2023-05-05 17:10:15.000000');


INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('jalal13elzein@gmail.com', 'jalal-elzein', 'passjalal', 'jalal', 'elzein');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('ali2elzein@gmail.com', 'ali-elzein', 'passali', 'ali', 'elzein');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('aseel13shalabi@gmail.com', 'aseel-shalabi', 'passaseel', 'aseel', 'shalabi');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('haidar44amin@gmail.com', 'haidar-amin', 'passhaidar', 'haidar', 'amin');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('mohammad81yazbek@gmail.com', 'mohammad-yazbek', 'passmohammad', 'mohammad', 'yazbek');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('rayane3yassine@gmail.com', 'rayane-yassine', 'passrayane', 'rayane', 'yassine');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('amal5arandas@gmail.com', 'amal-arandas', 'passamal', 'amal', 'arandas');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('bibi81naked@gmail.com', 'bibi-naked', 'passbibi', 'bibi', 'naked');   
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('umi81rnb@gmail.com', 'umi-rnb', 'passumi', 'umi', 'rnb');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('dua81saleh@gmail.com', 'dua-saleh', 'passdua', 'dua', 'saleh');
INSERT INTO `users` (`email`, `username`, `password`, `first_name`, `last_name`) VALUES ('muammar81gaddafi@gmail.com', 'muammar-gaddafi', 'passmuammar', 'muammar', 'gaddafi');
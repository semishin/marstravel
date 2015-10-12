-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "brief" ------------------------------------
CREATE TABLE `brief` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`phone` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`core` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`type` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`purpose` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`brand` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`example` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`section` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`language` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`style` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`budget` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`additional` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 28;
-- ---------------------------------------------------------


-- CREATE TABLE "changelog" --------------------------------
CREATE TABLE `changelog` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`created_at` Int( 10 ) UNSIGNED NOT NULL, 
	`filename` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "comments" ---------------------------------
CREATE TABLE `comments` ( 
	`id` Int( 100 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`date` Date NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL DEFAULT '0',
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "config" -----------------------------------
CREATE TABLE `config` ( 
	`group` VarChar( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`key` VarChar( 128 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`value` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	 PRIMARY KEY ( `group`,`key` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "feedb" ------------------------------------
CREATE TABLE `feedb` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`phone` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`text` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 15;
-- ---------------------------------------------------------


-- CREATE TABLE "feedback" ---------------------------------
CREATE TABLE `feedback` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`updated_at` Timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, 
	`text` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`status` Enum( 'open', 'in_process', 'closed' ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'open', 
	`answers` Int( 10 ) NULL DEFAULT '0', 
	`phone` VarChar( 100 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = MyISAM
AUTO_INCREMENT = 8;
-- ---------------------------------------------------------


-- CREATE TABLE "partners" ---------------------------------
CREATE TABLE `partners` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- CREATE TABLE "menu" -------------------------------------
CREATE TABLE `menu` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 55 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 55 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`parent_id` Int( 10 ) UNSIGNED NULL, 
	`position` Int( 10 ) NOT NULL DEFAULT '0', 
	`active` TinyInt( 1 ) NOT NULL DEFAULT '1', 
	`updated_at` Timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "pages" ------------------------------------
CREATE TABLE `pages` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_description` VarChar( 350 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`active` TinyInt( 1 ) NULL DEFAULT '0', 
	`updated_at` Timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
	`static` TinyInt( 1 ) NULL DEFAULT '0', 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 34;
-- ---------------------------------------------------------


-- CREATE TABLE "tours" ------------------------------------
CREATE TABLE `tours` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL DEFAULT '0', 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`price` Int( 255 ) UNSIGNED NOT NULL, 
	`main_image` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`short_content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`1d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`2d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`3d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`4d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`5d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`6d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`7d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`8d_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`1d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`2d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`3d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`4d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`5d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`6d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`7d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`8d_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`included` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`excluded` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 55;
-- ---------------------------------------------------------


-- CREATE TABLE "slides" -----------------------------------
CREATE TABLE `slides` ( 
	`id` Int( 10 ) AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
COMMENT 'utf8_general_ci'
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- ---------------------------------------------------------


-- CREATE TABLE "user_tokens" ------------------------------
CREATE TABLE `user_tokens` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`user_id` Int( 10 ) UNSIGNED NOT NULL, 
	`user_agent` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`token` VarChar( 40 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`created` Int( 10 ) UNSIGNED NOT NULL, 
	`expires` Int( 10 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
, 
	CONSTRAINT `UN_user_tokens_token` UNIQUE( `token` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 44;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`email` VarChar( 127 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`password` Char( 64 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`roles` Int( 10 ) UNSIGNED NOT NULL DEFAULT '0', 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`logins` Int( 10 ) UNSIGNED NOT NULL DEFAULT '0', 
	`last_login` Int( 10 ) UNSIGNED NULL, 
	`login_attempts` Int( 10 ) UNSIGNED NULL, 
	`banned_to` Int( 10 ) UNSIGNED NULL, 
	`ban_time` Int( 10 ) UNSIGNED NULL, 
	`reset_password_code` VarChar( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`created_at` Int( 10 ) UNSIGNED NOT NULL, 
	`updated_at` Int( 10 ) UNSIGNED NULL, 
	`register_token` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`active` TinyInt( 1 ) NOT NULL DEFAULT '0', 
	`username` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
, 
	CONSTRAINT `uniq_email` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 2;
-- ---------------------------------------------------------


-- Dump data of "brief" ------------------------------------
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '24', 'бог', 'бог@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'N;', '100 у.е.', 'N;' );
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '26', 'бог2', 'бог2@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'a:5:{i:0;s:1:"2";i:1;s:1:"7";i:2;s:1:"3";i:3;s:1:"2";i:4;s:1:"5";}', '100 у.е.', 'N;' );
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '27', '', '', '', 'kfurk7uykif', 'a:2:{i:0;s:19:"Промо сайт";i:1;s:35:"Корпоративный сайт";}', 'N;', '', 'yikyguj', 'N;', 'N;', 'a:5:{i:0;s:1:"5";i:1;s:1:"5";i:2;s:1:"5";i:3;s:1:"5";i:4;s:1:"5";}', '', 'N;' );
-- ---------------------------------------------------------


-- Dump data of "changelog" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "comments" ---------------------------------
INSERT INTO `comments`(`id`,`name`,`content`,`date`,`active`) VALUES ( '1', 'Пупкин', '<p>Вы боги!</p>
', '2014-11-13', '1' );
INSERT INTO `comments`(`id`,`name`,`content`,`date`,`active`) VALUES ( '2', 'Петров', '<p>Мудаки!</p>
', '2014-11-19', '1' );
INSERT INTO `comments`(`id`,`name`,`content`,`date`,`active`) VALUES ( '3', 'asdasd', '<p>asdasdsd</p>
', '2014-12-05', '0' );
INSERT INTO `comments`(`id`,`name`,`content`,`date`,`active`) VALUES ( '4', 'Сидоров', 'Молодцы', '2014-12-05', '0' );
-- ---------------------------------------------------------


-- Dump data of "config" -----------------------------------
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'auth_ban', 'base_time', '3600' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'auth_ban', 'max_login_attempts', '555' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'auth_ban', 'time_multiplier', '2' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'admin', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'encryption', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'from', 'info@trip-shop.by' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'hostname', 'mail.trip-shop.by' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'password', 'p@ss4@dm1n' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'port', NULL );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'mailer', 'username', 'info@trip-shop.by' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'parser', 'dominant', '0' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'parser', 'ridershop', '0' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'parser', 'velo', '0' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'price', 'update', '0' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'address', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'email', 'marstravel@info.com' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone', '+7 495 510-55-55' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone1', '+375 (29) 652 87 86  velcom' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone2', '+375 (17) 207 10 19 городской' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'facebook', '#' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'g+', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'instagram', '#' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'skype', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'twitter', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'vk', '#' );
-- ---------------------------------------------------------


-- Dump data of "feedb" ------------------------------------
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '1', 'dfsggs', 'dfgsdg', 'sdfg', 'dsgfs' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '2', 'ййй', 'ййй', 'ййй', 'ййй' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '3', '11', '11', '11', '11' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '4', '22', '22', '22', '3333' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '5', '33', '33', '33', '33334wefa' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '6', '44', '44', '44', '5554' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '7', '33', '21341', '234', '21431' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '8', '324', 'e', 'dew', 'wedwed' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '9', 'eds', 'sewf', 'wefsf', 'esfsef' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '10', '1fer', 'qwfeq', 'wqfewfq', 'weqf' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '11', 'wfav', 'vdfvs', 'avsd', 'svdsva' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '12', 'ацуф', 'цуа', 'цуац', 'цуа' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '13', 'aegr', 'wfe', 'wfew', 'wef' );
INSERT INTO `feedb`(`id`,`name`,`email`,`phone`,`text`) VALUES ( '14', '23к32', 'й3цкй', 'йуй', 'йу2й2' );
-- ---------------------------------------------------------


-- Dump data of "feedback" ---------------------------------
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '2', '2014-07-19 12:04:31', 'Здраствуйте, есть ли возможность купить отдельно шкурку для скейтборда (нождак)?', 'Антон', 'vip.gpook@mail.ru', 'open', '0', '+375 33 3200746' );
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '3', '2014-07-28 21:20:13', 'Имеется ли у Вас в наличии велосипед http://trip-shop.by/velo/fuji-fudji-feather-cx-1-1-d-chernyiy , с рамой L, на рост 182 см', 'Борис', 'megaamino3200@gmail.com', 'open', '0', '80295464418' );
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '4', '2014-07-29 17:32:42', 'Здравствуйте! Велосипед Author Classic 2014 какие есть ростовки?', 'Марина', 'shumanya08@mail.ru', 'open', '0', '80295745608' );
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '5', '2014-07-30 14:40:51', 'Здравствуйте! Есть ли в наличии Миникрузер Penny Pastels 22 lemon или Penny Pastels 22 mint? ', 'София', 'olga14423@yandex.ru', 'open', '0', '+7 (905) 530 14 58' );
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '6', '2014-07-30 14:40:51', 'Здравствуйте! Есть ли в наличии Миникрузер Penny Pastels 22 lemon или Penny Pastels 22 mint? ', 'София', 'olga14423@yandex.ru', 'open', '0', '+7 (905) 530 14 58' );
INSERT INTO `feedback`(`id`,`updated_at`,`text`,`name`,`email`,`status`,`answers`,`phone`) VALUES ( '7', '2014-10-01 20:31:33', '124412412412', '414412', 'zgol@mail.ru', 'open', '0', '' );
-- ---------------------------------------------------------


-- Dump data of "partners" ---------------------------------
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '7', 'p1', '/files/partner/7/e69aabbda2028865737a36aef46f8b28.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '8', 'p2', '/files/partner/8/081040840e4e88b1cacdcee0f78ed5e6.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '9', 'p3', '/files/partner/9/38fe3b511ed89f52507242c535ea1169.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '10', 'p4', '/files/partner/10/b8e3be89063da8456bd1f4f10429958a.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '11', 'p5', '/files/partner/11/ee6db9294eac3ff06a17722bdb241e30.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '12', 'p6', '/files/partner/12/79da5a2f8bc0c4b018df570c5789fe84.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '13', 'p7', '/files/partner/13/072e81d4ef8801a0a7c7901fec7e5770.png', '1' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`) VALUES ( '14', 'p8', '/files/partner/14/0d0dc03e902c411f5ed0235ac8e0d335.png', '1' );
-- ---------------------------------------------------------


-- Dump data of "menu" -------------------------------------
-- ---------------------------------------------------------


-- Dump data of "pages" ------------------------------------
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '2', 'Главная страница', 'Главная страница', '', '', '', '1', '2014-11-17 19:30:21', '1', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '21', 'Контакты', 'Контакты', '', '', 'contacts', '1', '2015-04-21 10:45:34', '0', '
' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '30', 'О компании', 'О компании', '', '', 'about-us', '1', '2015-04-02 15:57:59', '0', '<p>о компании контент</p>

<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '31', 'Портфолио', 'Портфолио', 'Портфолио', 'Портфолио', 'ourproduct', '1', '2015-02-16 15:35:28', '1', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '32', 'Статьи', 'Блог', 'Блог', 'Блог', 'articles', '1', '2015-02-16 15:42:31', '1', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '33', 'Цены', 'Цены - goodsign.local', '', '', 'price', '1', '2015-04-21 10:39:37', '0', '<div class="text">
                            <p class="text-center">Стоимость работы определяется на предварительной консультации,<br>
                                учитывая место и размер татуировки. Консультация - бесплатно.
                            </p>
                            <p class="text-center"><b>Минимальная стоимость тату - 700 000 бел. руб.</b></p>
                        </div>
                        <div class="separator"></div>
                        <div class="price_table">
                            <p class="text-center">Стоимость услуг перманентного макияжа</p>
                            <table>
                                <tbody>
                                <tr>
                                    <td class="text-left">Контур губ</td>
                                    <td class="text-right">800 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Контур губ с растушевкой (полное заполнение)</td>
                                    <td class="text-right">1 300 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Брови</td>
                                    <td class="text-right">1 200 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Веки (межресничное пространство)</td>
                                    <td class="text-right">900 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Веки (стрелочка и межресничное пространство)</td>
                                    <td class="text-right">1 250 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Веки (стрелочка, межресничное пространство, нижнее веко)</td>
                                    <td class="text-right">1 550 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Нижнее веко</td>
                                    <td class="text-right">400 000 руб.</td>
                                </tr>
                                <tr>
                                    <td class="text-left">Коррекция (в течение двух месяцев)</td>
                                    <td class="text-right">300 000 руб.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>' );
-- ---------------------------------------------------------


-- Dump data of "tours" ------------------------------------
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`1d_name`,`2d_name`,`3d_name`,`4d_name`,`5d_name`,`6d_name`,`7d_name`,`8d_name`,`1d_content`,`2d_content`,`3d_content`,`4d_content`,`5d_content`,`6d_content`,`7d_content`,`8d_content`,`included`,`excluded`) VALUES ( '55', 'Тур «Наследие великих цивилизаций»', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy', 'e69544df8a33621516136c04b5dc4ee2', '', '', '', '1', '["\\/files\\/tour\\/55\\/755b98d766b215c9ceaf57e836c25959.jpg"]', '50000', '/files/tour/55/d04fa5a4ad7855166aeb83b6736491f8.jpg', '<p><strong>Турция</strong> &mdash; &laquo;Ворота Европы и Азии&raquo; &mdash; единственная страна с уникальным географическим положением, которая соединяет Восток и Запад, современность и прошлое. Не откажите себе в удовольствии окунуться в восточный мир сказок и откройте для себя уникальные достопримечательности знаменитых турецких городов.</p>
', 'Прибытие в Стамбул', 'Стамбул - столица Императоров', 'Стамбул – Троя', 'Пергам - Кушадасы', 'Кушадасы - Памуккале', 'Памуккале - Aнталия', 'Aнталия', 'Возвращение домой', '<p>Прилет в аэропорт Стамбула. Встреча с нашими гидами, трансфер в отель. Размещение в отеле Стамбула 4*.</p>
', '<p>После завтрака Вы отправитесь на площадь Ипподрома. Древнейшие памятники в самом центре и вокруг этой площади являются важнейшими достопримечательностями Стамбула. Вы увидите три античных монумента, привезенных в Константинополь с разных концов империи', '<p>После завтрака вы отправитесь в Чанаккале, где разворачивалось действие &laquo;Илиады&raquo; Гомера. Мы поможем Вам прочувствовать это мистическое место, которое Гомер воспевает в своем грандиозном эпосе о Троянской войне, и где совершали свои подвиги<', '<p>Сегодня Ваш маршрут будет пролегать вдоль побережья к руинам города Пергам. Вы увидите древний Акрополь, античный театр, а также фундаменты алтаря Зевса, городских строений, храма и, конечно, остатки некогда известной на весь мир библиотеки. В завершен', '<p>Прикоснитесь к античной культуре! Далее Вас ждет поездка по великолепной долине Меандерталь в Памуккале к &ldquo;хлопковому замку&rdquo;. Видимые издалека всемирно известные белоснежные террасы (травертиновые образования) возникли в результате отложени', '<p>А затем Ваш ожидает переезд среди захватывающих дух вершин Таврских гор в Анталию. По пути Вы посетите ковровую вязальную, где познакомитесь с процессом производства ковров от добычи сырья (шелка, хлопка или шерсти) до готовой продукции. Турция славитс', '<p>Сегодня Вы посетите Анталию, один из самых красивых городов турецкой Ривьеры. Окруженный Таврскими горами город утопает в зелени. Вы увидите символ города, Минарет Йивли, или &laquo;рифлёный&raquo; минарет. На площади Калекапизи Вас встретит башня с ча', '<p>В зависимости от времени вылета комфортабельный автобус доставит Вас в аэропорт для возвращения домой.</p>
', '    Перелет
    Проживание на базе завтраков
    Услуги гида
    Экскурсии с посещением Античных городов (Троя - Пергамского царства – Эфес – Памуккале - Анталия-Стамбул)
    Медицинская страховка
', '    Посещение Дворца Топкапы - Храма Св. Софии -
    Погулка на катере по Босфору – Дом Девы Марии
' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`1d_name`,`2d_name`,`3d_name`,`4d_name`,`5d_name`,`6d_name`,`7d_name`,`8d_name`,`1d_content`,`2d_content`,`3d_content`,`4d_content`,`5d_content`,`6d_content`,`7d_content`,`8d_content`,`included`,`excluded`) VALUES ( '56', 'Тур «Наследие великих цивилизаций» 2', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy-2', 'd8f9612777464224ed0604b0a4dd1280', '', '', '', '2', '[]', '50000', '/files/tour/56/60a5f63dda70a1ceaa6ad79789c3acbb.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`1d_name`,`2d_name`,`3d_name`,`4d_name`,`5d_name`,`6d_name`,`7d_name`,`8d_name`,`1d_content`,`2d_content`,`3d_content`,`4d_content`,`5d_content`,`6d_content`,`7d_content`,`8d_content`,`included`,`excluded`) VALUES ( '57', 'Тур «Наследие великих цивилизаций» 3', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy-3', '6fb1e82e4cff9ef3e06da4e4194e509e', '', '', '', '3', '[]', '40000', '/files/tour/57/caa061bccc52d35ed6c24ddaf0031045.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' );
-- ---------------------------------------------------------


-- Dump data of "slides" -----------------------------------
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`) VALUES ( '8', 'Аквапарк в Измире', '<p>Aqua Fantasy Land</p>
', '/files/slide/8/8ac5b227271f3e66cff6406ceb85f5d8.jpg', '4', '1' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`) VALUES ( '9', 'Аквапарк в Измире 2', '<p style="text-align:center">Aqua</br>

Fantasy</br>

Land 2</p>
', '/files/slide/9/0732da8c48d87fd10af159e63a8caabe.jpg', '2', '1' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`) VALUES ( '10', 'Аквапарк в Измире 3', '<p style="text-align:center">Aqua</p>

<p style="text-align:center">Fantasy</p>

<p style="text-align:center">Land 3</p>
', '/files/slide/10/f323da564eb126afd2bd3eecc7b9485e.jpg', '3', '1' );
-- ---------------------------------------------------------


-- Dump data of "user_tokens" ------------------------------
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '26', '13', 'd4f09ab969f7263dd752040a91e66f34043b6e53', 'e70ea0b0af9eecb3e15801079a43830d89c125a4', '1401548182', '1402757782' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '27', '13', 'd4f09ab969f7263dd752040a91e66f34043b6e53', '483074d074f8c116ae983041e900dfdf451d63fc', '1401549391', '1402758991' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '28', '13', 'd4f09ab969f7263dd752040a91e66f34043b6e53', 'ca8387286d67292cc9e597d677ed3da329031b6f', '1401971389', '1403180989' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '29', '13', 'de7686fe24df90b4473c3a28c6ec7724defcb4c4', '59c267ff8dad4a8ef2f98ccebc9e16b5c9964b37', '1402405941', '1403615541' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '30', '13', 'db3782434708aa0c75d65ff9ec2c35f748542795', '7e898c3fc26cadd04590a30cd3eb63a77daee035', '1402576759', '1403786359' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '31', '13', 'db3782434708aa0c75d65ff9ec2c35f748542795', 'ba0027c1a3469be9738bee2054b3573ae46f1b68', '1402583879', '1403793479' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '32', '13', '894af19d7638770229799ae0b5cb49e0cc462309', '261da7105e527d386c968c4e161e6e225d73af44', '1402604335', '1403813935' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '33', '13', '894af19d7638770229799ae0b5cb49e0cc462309', 'a761e28ad1bb6ba4d1bb1229a875d453ebe76de0', '1402829485', '1404039085' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '34', '12', '9b4510ded13c04094d3576666ccd0c8f1d173d54', '0bc12d9f2d1773c1615824d5ec2cb9f4ad7190a1', '1402832325', '1404041925' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '35', '13', 'dc6e2b18161cf733765796d209cd71f12b1dd270', 'b55186b6bf44f2c340e6a0bea01b2e11c41ae906', '1402842931', '1404052531' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '36', '13', 'db3782434708aa0c75d65ff9ec2c35f748542795', '04268430ea4970230fe375606ff69f6fa039f4df', '1403796062', '1405005662' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '37', '13', '894af19d7638770229799ae0b5cb49e0cc462309', '35ce81fe53dc52836f37f5a9063f76189901a655', '1404048766', '1405258366' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '38', '13', 'dc6e2b18161cf733765796d209cd71f12b1dd270', 'ad72a8b7643fca2dda786570ceef56a6710431f7', '1404067091', '1405276691' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '39', '13', 'db3782434708aa0c75d65ff9ec2c35f748542795', '457744ce72738e607ba22134dcd2524654defe83', '1405169762', '1406379362' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '40', '13', 'dc6e2b18161cf733765796d209cd71f12b1dd270', 'baa45645506d8d1bf07e7c3930c91115b6af5277', '1405512713', '1406722313' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '41', '13', 'd8ad7bc732d3bb3bd8ae26cce2e1abfee961699f', '5d5371f105225879f885bb23506f5ae342ed642a', '1405585122', '1406794722' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '42', '13', '348b88762d2da8ea16c35cd7bb847231fd5b5057', '37ffa06b521982c7e6b8e9f92bac7bbd95fb941b', '1406633101', '1407842701' );
INSERT INTO `user_tokens`(`id`,`user_id`,`user_agent`,`token`,`created`,`expires`) VALUES ( '43', '13', 'd8ad7bc732d3bb3bd8ae26cce2e1abfee961699f', '47ab6b75d1380644c362e2889bea1b11758bb114', '1407278476', '1408488076' );
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`email`,`password`,`roles`,`name`,`logins`,`last_login`,`login_attempts`,`banned_to`,`ban_time`,`reset_password_code`,`created_at`,`updated_at`,`register_token`,`active`,`username`) VALUES ( '1', 'admin@ariol.by', '32c473f545fbbafd2c275b6ef518f2cccf14059b5ca6e1f00c2a7748528398b9', '1', 'zgolich', '190', '1431092909', '0', NULL, NULL, NULL, '1392567501', '1431092909', NULL, '1', 'd55b50f8ebd78188a0effa94ef101edb' );
-- ---------------------------------------------------------


-- CREATE INDEX "active" -----------------------------------
CREATE INDEX `active` USING BTREE ON `menu`( `active` );
-- ---------------------------------------------------------


-- CREATE INDEX "fk_parent_menu" ---------------------------
CREATE INDEX `fk_parent_menu` USING BTREE ON `menu`( `parent_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "parent_id" --------------------------------
CREATE INDEX `parent_id` USING BTREE ON `menu`( `parent_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "active" -----------------------------------
CREATE INDEX `active` USING BTREE ON `pages`( `active` );
-- ---------------------------------------------------------


-- CREATE INDEX "static" -----------------------------------
CREATE INDEX `static` USING BTREE ON `pages`( `static` );
-- ---------------------------------------------------------


-- CREATE INDEX "url" --------------------------------------
CREATE INDEX `url` USING BTREE ON `pages`( `url` );
-- ---------------------------------------------------------


-- CREATE INDEX "FK_user_tokens_user" ----------------------
CREATE INDEX `FK_user_tokens_user` USING BTREE ON `user_tokens`( `user_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "register_token" ---------------------------
CREATE INDEX `register_token` USING BTREE ON `users`( `email`, `register_token` );
-- ---------------------------------------------------------


-- CREATE INDEX "username" ---------------------------------
CREATE INDEX `username` USING BTREE ON `users`( `username` );
-- ---------------------------------------------------------


-- CREATE LINK "menu_ibfk_1" -------------------------------
ALTER TABLE `menu` ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY ( `parent_id` ) REFERENCES `menu`( `id` ) ON DELETE Cascade ON UPDATE Cascade;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------



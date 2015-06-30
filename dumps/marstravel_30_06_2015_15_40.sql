-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "banners" ----------------------------------
CREATE TABLE `banners` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`type` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`link` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
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


-- CREATE TABLE "cities" -----------------------------------
CREATE TABLE `cities` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
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


-- CREATE TABLE "coupon_firms" -----------------------------
CREATE TABLE `coupon_firms` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "coupons" ----------------------------------
CREATE TABLE `coupons` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`code` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`firm_id` Int( 10 ) UNSIGNED NOT NULL, 
	`tour_id` Int( 10 ) UNSIGNED NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 3;
-- ---------------------------------------------------------


-- CREATE TABLE "excursion_categories" ---------------------
CREATE TABLE `excursion_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "excursions" -------------------------------
CREATE TABLE `excursions` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`category_id` Int( 10 ) UNSIGNED NOT NULL, 
	`city_id` Int( 10 ) UNSIGNED NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`main_image` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
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


-- CREATE TABLE "hotels" -----------------------------------
CREATE TABLE `hotels` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`main_image` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`stars` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`link_site` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`link_booking` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`city_id` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 21;
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
AUTO_INCREMENT = 40;
-- ---------------------------------------------------------


-- CREATE TABLE "partners" ---------------------------------
CREATE TABLE `partners` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`link` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 15;
-- ---------------------------------------------------------


-- CREATE TABLE "sight_categories" -------------------------
CREATE TABLE `sight_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "sights" -----------------------------------
CREATE TABLE `sights` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`main_image` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`category_id` Int( 10 ) UNSIGNED NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`excursion` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`city_id` Int( 10 ) UNSIGNED NOT NULL, 
	`url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 14;
-- ---------------------------------------------------------


-- CREATE TABLE "slides" -----------------------------------
CREATE TABLE `slides` ( 
	`id` Int( 10 ) AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`link` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
COMMENT 'utf8_general_ci'
ENGINE = InnoDB
AUTO_INCREMENT = 12;
-- ---------------------------------------------------------


-- CREATE TABLE "tour_excursion" ---------------------------
CREATE TABLE `tour_excursion` ( 
	`tour_id` Int( 10 ) UNSIGNED NOT NULL, 
	`excursion_id` Int( 10 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `tour_id`,`excursion_id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB;
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
	`d1_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d2_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d3_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d4_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d5_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d6_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d7_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d8_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d1_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d2_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d3_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d4_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d5_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d6_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d7_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`d8_content` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`included` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`excluded` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`slogan` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`route` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 62;
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


-- Dump data of "banners" ----------------------------------
INSERT INTO `banners`(`id`,`name`,`image`,`active`,`type`,`link`) VALUES ( '1', 'левый', '/files/banner/1/f083ad6207f6978722c3beed54539766.png', '1', '2', '#' );
INSERT INTO `banners`(`id`,`name`,`image`,`active`,`type`,`link`) VALUES ( '2', 'верхний', '/files/banner/2/d545218be9b2c54defdbf1218bf1d0d0.jpg', '1', '1', '#' );
-- ---------------------------------------------------------


-- Dump data of "brief" ------------------------------------
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '24', 'бог', 'бог@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'N;', '100 у.е.', 'N;' );
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '26', 'бог2', 'бог2@рай.ком', 'бог-бог', 'ну блин', 'a:1:{i:0;s:37:"Информационный сайт";}', 'a:2:{i:0;s:31:"Повышение имиджа";i:1;s:61:"Продвижение нового товара/услуги";}', 'Го', 'Го.го', 'a:2:{i:0;s:33:"каталог продукции";i:1;s:74:"корзина(возможность приемаonline платежей)";}', 'a:2:{i:0;s:14:"Русский";i:1;s:20:"Английский";}', 'a:5:{i:0;s:1:"2";i:1;s:1:"7";i:2;s:1:"3";i:3;s:1:"2";i:4;s:1:"5";}', '100 у.е.', 'N;' );
INSERT INTO `brief`(`id`,`name`,`email`,`phone`,`core`,`type`,`purpose`,`brand`,`example`,`section`,`language`,`style`,`budget`,`additional`) VALUES ( '27', '', '', '', 'kfurk7uykif', 'a:2:{i:0;s:19:"Промо сайт";i:1;s:35:"Корпоративный сайт";}', 'N;', '', 'yikyguj', 'N;', 'N;', 'a:5:{i:0;s:1:"5";i:1;s:1:"5";i:2;s:1:"5";i:3;s:1:"5";i:4;s:1:"5";}', '', 'N;' );
-- ---------------------------------------------------------


-- Dump data of "changelog" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "cities" -----------------------------------
INSERT INTO `cities`(`id`,`name`,`active`) VALUES ( '1', 'Стамбул', '1' );
INSERT INTO `cities`(`id`,`name`,`active`) VALUES ( '2', 'Измир', '1' );
INSERT INTO `cities`(`id`,`name`,`active`) VALUES ( '3', 'Анкара', '1' );
INSERT INTO `cities`(`id`,`name`,`active`) VALUES ( '4', 'Анталья', '1' );
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


-- Dump data of "coupon_firms" -----------------------------
INSERT INTO `coupon_firms`(`id`,`name`,`active`) VALUES ( '1', 'Первая тестовая', '1' );
INSERT INTO `coupon_firms`(`id`,`name`,`active`) VALUES ( '2', 'Вторая тестовая', '1' );
-- ---------------------------------------------------------


-- Dump data of "coupons" ----------------------------------
INSERT INTO `coupons`(`id`,`code`,`firm_id`,`tour_id`,`active`) VALUES ( '1', 'testUGHKUIYGKYtest', '1', '55', '1' );
INSERT INTO `coupons`(`id`,`code`,`firm_id`,`tour_id`,`active`) VALUES ( '2', 'testsadftest', '2', '55', '1' );
-- ---------------------------------------------------------


-- Dump data of "excursion_categories" ---------------------
INSERT INTO `excursion_categories`(`id`,`active`,`name`) VALUES ( '1', '1', 'Тестовая категория 1' );
INSERT INTO `excursion_categories`(`id`,`active`,`name`) VALUES ( '2', '1', 'Тестовая категория 2' );
-- ---------------------------------------------------------


-- Dump data of "excursions" -------------------------------
INSERT INTO `excursions`(`id`,`name`,`active`,`url`,`md5_url`,`category_id`,`city_id`,`content`,`main_image`,`images`,`s_description`,`s_title`,`s_keywords`) VALUES ( '1', 'Тестовая экскурсия 1', '1', 'testovaya-ekskursiya-1', 'e6d3fa94f758269b92f2ccbb9f3240a5', '1', '1', '', '/files/excursion/1/d78615b479ba9d688e008874ff91f6ef.jpg', '[]', '', '', '' );
INSERT INTO `excursions`(`id`,`name`,`active`,`url`,`md5_url`,`category_id`,`city_id`,`content`,`main_image`,`images`,`s_description`,`s_title`,`s_keywords`) VALUES ( '2', 'Тестовая экскурсия 2', '1', 'testovaya-ekskursiya-2', '61572fef8a40851c56020b97cdb52b0f', '2', '2', '', '/files/excursion/2/74014f57b1a752b62df9603c07e88afa.jpg', '[]', '', '', '' );
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


-- Dump data of "hotels" -----------------------------------
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '1', 'Тестовый отель', '/files/hotel/1/bc55d876aa5e6b514932eb7f3db2c1da.jpg', '5', '<p>Описание тестового отеля</p>
', '["\\/files\\/hotel\\/1\\/e5c4c78c490cef56a60c6a4b300075bf.jpg","\\/files\\/hotel\\/1\\/110ed02e86c4c5afc16b50bd010a7176.jpg"]', '#', '#', 'testovyiy-otel', 'b6ade79f65091966059c1ce40e03db95', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '2', 'Тестовый отель 2', '/files/hotel/2/f952c394c886605f4bf53e0ac5151c62.jpg', '4', '<p>описание тестового отеля 2</p>
', '["\\/files\\/hotel\\/2\\/e42a75246bfdf04ff5d6fa2003f1cbea.jpg","\\/files\\/hotel\\/2\\/23805719f17cdf9d05dfa9155eeae0e0.jpg","\\/files\\/hotel\\/2\\/ba3b92f8d8519806793b9cf472247c16.jpg"]', '', '', 'testovyiy-otel-2', 'fb232ceabf2cc8fa09744f7d53e95c45', '', '', '', '2', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '3', 'Тестовый отель 3', '/files/hotel/3/e1078dcee5d5825795a46de2bbc9dbf9.jpg', '3', '<p>Описание</p>
', '["\\/files\\/hotel\\/3\\/5df9908a7e81bf5a2e71045472285ce5.jpg","\\/files\\/hotel\\/3\\/3aecac882070e6018dfefa36780ca177.jpg","\\/files\\/hotel\\/3\\/9cbec5e7500930a39d6807060b3834d8.jpg"]', '', '', 'testovyiy-otel-3', '3762615f70ada96cbf71bcad5820db31', '', '', '', '3', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '4', 'Тестовый отель 4', '/files/hotel/4/88bdcbb4ceffd26b1d8bcd39a2359e70.jpg', '4', '', '[]', '', '', 'testovyiy-otel-4', '36f178e9ab365d850288c07e42ff1809', '', '', '', '2', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '5', 'Тестовый отель 5', '/files/hotel/5/efe39c577ac173060e87e7e0a67b5cfc.jpg', '3', '', '[]', '', '', 'testovyiy-otel-5', '36c3f024207156fc7e33b2213e5ed1b5', '', '', '', '3', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '6', 'Тестовый отель 6', '/files/hotel/6/3e64c0d3451ed53407c1e44ba6ce1ba4.jpg', '2', '', '[]', '', '', 'testovyiy-otel-6', '4c3fc9165df69b3db88b9f864fe91a8a', '', '', '', '4', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '7', 'Тестовый отель 7', '/files/hotel/7/91a6a6941f3aa8cb7d099067c4ae5ff5.jpg', '1', '', '[]', '', '', 'testovyiy-otel-7', 'f0f6f93011fb4b9b2959934fa9619822', '', '', '', '2', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '8', 'Тестовый отель 8', '/files/hotel/8/6e1593328c2c8628e228e1b39399f405.jpg', '3', '', '[]', '', '', 'testovyiy-otel-8', '90b56a110c17e09f7df7933f117ba943', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '9', 'Тестовый отель 9', '/files/hotel/9/071e1e3dbffcef01b7f67e5aff6205de.jpg', '4', '', '[]', '', '', 'testovyiy-otel-9', 'c39469f94e28b66e9fa06e17dff7f885', '', '', '', '2', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '10', 'Тестовый отель 10', '/files/hotel/10/f8117cdc448dc283bb78a83c8243148b.jpg', '4', '', '[]', '', '', 'testovyiy-otel-10', 'fa300dd06cd7df3b007d03065fefd9e1', '', '', '', '3', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '11', 'Тестовый отель 11', '/files/hotel/11/7c0060d4be11a722839abd630aadebd4.jpg', '5', '', '[]', '', '', 'testovyiy-otel-11', 'fc710b34a413bdae223c326a3b49c59c', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '12', 'Тестовый отель 12', '/files/hotel/12/097e8d86436a9ab97c79b644097f490e.jpg', '5', '', '[]', '', '', 'testovyiy-otel-12', '68d2aec452b2ddb1e80bf24e7b9a61be', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '13', 'Тестовый отель 13', '/files/hotel/13/550e31645a15f8080db052e369769c1f.jpg', '5', '', '[]', '', '', 'testovyiy-otel-13', 'f74dc6e0002e1848aa8e276809add661', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '14', 'Тестовый отель 14', '/files/hotel/14/269b756bd6dc7edea2e8e8f7d8e48c84.jpg', '5', '', '[]', '', '', 'testovyiy-otel-14', 'a79db8f8a2c0a82a8a1a34227ac3a213', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '15', 'Тестовый отель 15', '/files/hotel/15/133eea3d5161674edcb4f4f2c7a6f98b.jpg', '5', '', '[]', '', '', 'testovyiy-otel-15', 'e2e4a749be8a7155a749da9aceda4e72', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '16', 'Тестовый отель 16', '/files/hotel/16/b799b0a9465a79e84c241e5ba66933ad.jpg', '5', '', '[]', '', '', 'testovyiy-otel-16', 'b617da5b2a5132be065459e4ed2f9ffe', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '17', 'Тестовый отель 17', '/files/hotel/17/92f978ccce5edcc8a13ae2f03895837b.jpg', '5', '', '[]', '', '', 'testovyiy-otel-16', 'b617da5b2a5132be065459e4ed2f9ffe', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '18', 'Тестовый отель 18', '/files/hotel/18/fbabeea8a1b88a767fd55e3dc114bfc9.jpg', '5', '', '[]', '', '', 'testovyiy-otel-17', '2dd3ea0d99723728537fc9b2de583848', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '19', 'Тестовый отель 19', '/files/hotel/19/d2168debf21fefa4ee24820290f572f1.jpg', '5', '', '[]', '', '', 'testovyiy-otel-18', '859f09433b6997d54aeeaf0b7905702f', '', '', '', '1', '1' );
INSERT INTO `hotels`(`id`,`name`,`main_image`,`stars`,`content`,`images`,`link_site`,`link_booking`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`city_id`,`active`) VALUES ( '20', 'Тестовый отель 20', '/files/hotel/20/8339cb47b81b2f77c5eb2cfe386dc6cb.jpg', '5', '', '[]', '', '', 'testovyiy-otel-19', '89552e4b8f4a8e693f1f893c71b936fb', '', '', '', '1', '1' );
-- ---------------------------------------------------------


-- Dump data of "menu" -------------------------------------
-- ---------------------------------------------------------


-- Dump data of "pages" ------------------------------------
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '2', 'Главная страница', 'Главная страница', '', '', '', '1', '2014-11-17 19:30:21', '1', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '21', 'Контакты', 'Контакты', '', '', 'contacts', '1', '2015-04-21 10:45:34', '0', '
' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '30', 'О нас', 'О нас', '', '', 'about-us', '1', '2015-06-30 14:53:40', '0', '<p>о компании контент</p>

<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '34', 'Наши партнеры', 'Наши партнеры - marstravel.local', '', '', 'our-partners', '1', '2015-06-05 13:44:46', '0', '<p>партенры-контент<br />
&nbsp;</p>
' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '36', 'Погода в Турции', 'Погода в Турции - marstravel.local', '', '', 'weather', '1', '2015-05-18 12:43:55', '0', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '37', 'О Турции', 'О Турции - marstravel.local', '', '', 'about-turkey', '1', '2015-05-18 12:44:17', '0', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '39', 'Для корпоративных клиентов', 'Для корпоративных клиентов - marstravel.local', '', '', 'advertising', '1', '2015-06-30 14:53:16', '0', '' );
INSERT INTO `pages`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`updated_at`,`static`,`content`) VALUES ( '40', 'Туроператорская деятельность', 'Туроператорская деятельность - marstravel.local', '', '', 'touroperator', '1', '2015-06-30 14:54:40', '0', '' );
-- ---------------------------------------------------------


-- Dump data of "partners" ---------------------------------
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '7', 'p1', '/files/partner/7/e69aabbda2028865737a36aef46f8b28.png', '1', 'ariol.by' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '8', 'p2', '/files/partner/8/081040840e4e88b1cacdcee0f78ed5e6.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '9', 'p3', '/files/partner/9/38fe3b511ed89f52507242c535ea1169.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '10', 'p4', '/files/partner/10/b8e3be89063da8456bd1f4f10429958a.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '11', 'p5', '/files/partner/11/ee6db9294eac3ff06a17722bdb241e30.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '12', 'p6', '/files/partner/12/79da5a2f8bc0c4b018df570c5789fe84.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '13', 'p7', '/files/partner/13/072e81d4ef8801a0a7c7901fec7e5770.png', '1', '' );
INSERT INTO `partners`(`id`,`name`,`image`,`active`,`link`) VALUES ( '14', 'p8', '/files/partner/14/0d0dc03e902c411f5ed0235ac8e0d335.png', '1', '' );
-- ---------------------------------------------------------


-- Dump data of "sight_categories" -------------------------
INSERT INTO `sight_categories`(`id`,`name`,`active`) VALUES ( '1', 'Храмы и церкви', '1' );
INSERT INTO `sight_categories`(`id`,`name`,`active`) VALUES ( '2', 'Парки', '1' );
INSERT INTO `sight_categories`(`id`,`name`,`active`) VALUES ( '3', 'Тест', '1' );
-- ---------------------------------------------------------


-- Dump data of "sights" -----------------------------------
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '1', 'Тестовая достопримечательность', '/files/sight/1/384f3a9cf3ae257aacaf4683d16a10f3.jpg', '<p>описание тестовой достопримечательности гога</p>
', '["\\/files\\/sight\\/1\\/5585ba60730ec92a1d33b7a3acc0f390.jpg","\\/files\\/sight\\/1\\/e0e1cf29678786b049f66a1e0281630e.jpg"]', '1', '1', '1', '1', 'testovaya-dostoprimechatelnost', '541a8e8d9c88433e94c111837cb78c70', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '2', 'Тестовая достопримечательность 2', '/files/sight/2/385fd8655ce70d4d6a1ae04b44498d23.jpg', '<p>описание тестовой достопримечательности 2</p>
', '["\\/files\\/sight\\/2\\/6a21630e30a5d68eb39b09614b45e38e.jpg","\\/files\\/sight\\/2\\/805559a30a4f5d0e2ed49da3bb35579e.jpg","\\/files\\/sight\\/2\\/238bd5cb2610dfdc0a5a04a33647f8ba.jpg"]', '2', '1', '1', '2', 'testovaya-dostoprimechatelnost-2', 'ec00a7cc7a61482fcae426516d1e079a', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '3', 'Тестовая достопримечательность 3', '/files/sight/3/366fc75736f79a670578a24e812bca88.jpg', '<p>Описание</p>
', '["\\/files\\/sight\\/3\\/bb48578bfc1dae22ec6644a0da3b52ba.jpg","\\/files\\/sight\\/3\\/1cf47d874c5f4005b23040a9699c3c4e.jpg"]', '3', '1', '1', '3', 'testovaya-dostoprimechatelnost-3', '6cbc96d86110f938d8413725f0f1ac65', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '4', 'тестовая достоприме', '/files/sight/4/32425b0aef2cfec1107fdc7d481179fd.jpg', '', '[]', '3', '1', '1', '1', 'testovaya-dostoprime', '880bcabad205cd4db3862cfe0ec08b62', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '5', 'дост ', '/files/sight/5/1959241dfc11652893070d2a1a67df31.jpg', '', '[]', '2', '1', '0', '2', 'dost', '62da2f5c0c17429d265c858a5d2960b6', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '6', 'дост 2', '/files/sight/6/89318ce59a4755562b3a8f4e3cafa2d2.jpg', '', '[]', '2', '1', '0', '2', 'dost-2', '7b5bc81a2a1946a40d1f600846c30b87', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '7', 'дост 3', '/files/sight/7/ff7825690344b4156adf4076ed068f90.jpg', '', '[]', '1', '1', '0', '1', 'dost-3', '63aedc02c28e203c8811675081deb1b1', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '8', 'дост 4', '/files/sight/8/e08d093359ab3ec73ccb54c63ad76d35.jpg', '', '[]', '1', '1', '0', '1', 'dost-4', '8fce63418859417a6060910f8ca9b323', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '9', 'дост 5', '/files/sight/9/afe792d59b2a7f30f9006314f663599a.jpg', '', '[]', '1', '1', '0', '1', 'dost-5', 'd5b20d52d368681b146d10ededfa0862', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '10', 'дост 6', '/files/sight/10/1178715ffa3911d4863bdd7f1f9572ec.jpg', '', '[]', '1', '1', '0', '1', 'dost-6', 'ca63c65df1205e6f6409ac9bcffd0a8b', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '11', 'дост 7', '/files/sight/11/7d89bb68ac8a1afae09cf90e9bb45000.jpg', '', '[]', '1', '1', '0', '1', 'dost-7', 'd8763bfdf48c496c084f8382255e0ad4', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '12', 'дост 7', '/files/sight/12/b8907133730c5e240636b7b89c2dfa5d.jpg', '', '[]', '1', '1', '0', '1', 'dost-7', 'd8763bfdf48c496c084f8382255e0ad4', '', '', '' );
INSERT INTO `sights`(`id`,`name`,`main_image`,`content`,`images`,`category_id`,`active`,`excursion`,`city_id`,`url`,`md5_url`,`s_description`,`s_title`,`s_keywords`) VALUES ( '13', 'дост 8', '/files/sight/13/a85084559e836d75645950867530cab3.jpg', '', '[]', '1', '1', '0', '1', 'dost-8', '9702b15c57b3c49ea6f719d6d7893114', '', '', '' );
-- ---------------------------------------------------------


-- Dump data of "slides" -----------------------------------
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '8', 'Аквапарк в Измире', '<p style="text-align:center">Aqua<br />
Fantasy<br />
Land</p>
', '/files/slide/8/8ac5b227271f3e66cff6406ceb85f5d8.jpg', '4', '1', '#' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '9', 'Аквапарк в Измире 2', '<p style="text-align:center">Aqua<br />
Fantasy<br />
Land 2</p>
', '/files/slide/9/0732da8c48d87fd10af159e63a8caabe.jpg', '2', '1', '#' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '10', 'Аквапарк в Измире 3', '<p style="text-align:center">Aqua<br />
Fantasy<br />
Land 3</p>
', '/files/slide/10/f323da564eb126afd2bd3eecc7b9485e.jpg', '3', '1', '#' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '11', 'Аква парк в тест', 'Контент
контент
контент', '/files/slide/11/160a0341fa0b910fd284fa47525d8a03.jpg', '4', '1', '' );
-- ---------------------------------------------------------


-- Dump data of "tour_excursion" ---------------------------
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '55', '1' );
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '56', '2' );
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '57', '1' );
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '57', '2' );
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '58', '2' );
INSERT INTO `tour_excursion`(`tour_id`,`excursion_id`) VALUES ( '60', '1' );
-- ---------------------------------------------------------


-- Dump data of "tours" ------------------------------------
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '55', 'Тур «Наследие великих цивилизаций»', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy', 'e69544df8a33621516136c04b5dc4ee2', '', '', '', '1', '["\\/files\\/tour\\/55\\/755b98d766b215c9ceaf57e836c25959.jpg","\\/files\\/tour\\/55\\/00cc4e7b25cead2e031d0db46b2a3062.png","\\/files\\/tour\\/55\\/5b83054785295a4ed88ede82b6b1f1c1.jpg","\\/files\\/tour\\/55\\/43ff4942961ae841715e231d37a7af18.jpg"]', '50000', '/files/tour/55/d04fa5a4ad7855166aeb83b6736491f8.jpg', '<p><strong>Турция</strong> &mdash; &laquo;Ворота Европы и Азии&raquo; &mdash; единственная страна с уникальным географическим положением, которая соединяет Восток и Запад, современность и прошлое. Не откажите себе в удовольствии окунуться в восточный мир сказок и откройте для себя уникальные достопримечательности знаменитых турецких городов.</p>
', 'Прибытие в Стамбул', 'Стамбул - столица Императоров', 'Стамбул – Троя', 'Пергам - Кушадасы', 'Кушадасы - Памуккале', 'Памуккале - Aнталия', 'Aнталия', 'Возвращение домой', '<p>Прилет в аэропорт Стамбула. Встреча с нашими гидами, трансфер в отель. Размещение в отеле Стамбула 4*.</p>
', '<p>После завтрака Вы отправитесь на площадь Ипподрома. Древнейшие памятники в самом центре и вокруг этой площади являются важнейшими достопримечательностями Стамбула. Вы увидите три античных монумента, привезенных в Константинополь с разных концов империи', '<p>После завтрака вы отправитесь в Чанаккале, где разворачивалось действие &laquo;Илиады&raquo; Гомера. Мы поможем Вам прочувствовать это мистическое место, которое Гомер воспевает в своем грандиозном эпосе о Троянской войне, и где совершали свои подвиги&', '<p>Сегодня Ваш маршрут будет пролегать вдоль побережья к руинам города Пергам. Вы увидите древний Акрополь, античный театр, а также фундаменты алтаря Зевса, городских строений, храма и, конечно, остатки некогда известной на весь мир библиотеки. В завершен', '<p>Прикоснитесь к античной культуре! Далее Вас ждет поездка по великолепной долине Меандерталь в Памуккале к &ldquo;хлопковому замку&rdquo;. Видимые издалека всемирно известные белоснежные террасы (травертиновые образования) возникли в результате отложени', '<p>А затем Ваш ожидает переезд среди захватывающих дух вершин Таврских гор в Анталию. По пути Вы посетите ковровую вязальную, где познакомитесь с процессом производства ковров от добычи сырья (шелка, хлопка или шерсти) до готовой продукции. Турция славитс', '<p>Сегодня Вы посетите Анталию, один из самых красивых городов турецкой Ривьеры. Окруженный Таврскими горами город утопает в зелени. Вы увидите символ города, Минарет Йивли, или &laquo;рифлёный&raquo; минарет. На площади Калекапизи Вас встретит башня с ча', '<p>В зависимости от времени вылета комфортабельный автобус доставит Вас в аэропорт для возвращения домой.</p>
', '<ul>
	<li>Перелет</li>
	<li>Проживание на базе завтраков</li>
	<li>Услуги гида</li>
	<li>Экскурсии с посещением Античных городов (Троя - Пергамского царства &ndash; Эфес &ndash; Памуккале - Анталия-Стамбул)</li>
	<li>Медицинская страховка</li>
</ul>
', '<ul>
	<li>Посещение Дворца Топкапы - Храма Св. Софии</li>
	<li>Погулка на катере по Босфору &ndash; Дом Девы Марии</li>
</ul>
', 'Йо-хо-хо, и бутылка рома', 'a:4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"1";}' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '56', 'Тур «Наследие великих цивилизаций» 2', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy-2', 'd8f9612777464224ed0604b0a4dd1280', '', '', '', '2', '[]', '50000', '/files/tour/56/60a5f63dda70a1ceaa6ad79789c3acbb.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:2:{i:0;s:1:"2";i:1;s:1:"3";}' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '57', 'Тур «Наследие великих цивилизаций» 3', '1', '<p>8-дневный тур &laquo;Наследие великих цивилизаций&raquo;. Вы проведете несколько дней в Стамбуле, который по праву причисляют к мировым культурным столицам. Из Стамбула Ваш маршрут будет пролегать через воспетую Гомером Трою, античный Пергам, современный портовый город Кушадасы и далее через живописные Таврские горы в бурлящую энергией Анталию с ее фантастическим побережьем</p>
', 'tur-nasledie-velikih-tsivilizatsiy-3', '6fb1e82e4cff9ef3e06da4e4194e509e', '', '', '', '3', '[]', '40000', '/files/tour/57/caa061bccc52d35ed6c24ddaf0031045.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '58', 'Тур «Наследие великих цивилизаций» 4', '0', '', 'tur-nasledie-velikih-tsivilizatsiy-4', 'f9550c65bea203bced8666e6cc0f08b8', '', '', '', '0', '[]', '34', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:1:{i:0;N;}' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '59', 'Тур «Наследие великих цивилизаций» 5', '0', '', 'tur-nasledie-velikih-tsivilizatsiy-5', 'a08667f24d26c36814249a33e6e500e7', '', '', '', '0', '[]', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:1:{i:0;N;}' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '60', 'Тур «Наследие великих цивилизаций» 6', '0', '', 'tur-nasledie-velikih-tsivilizatsiy-6', 'f1b44a9f6d9a914e6252c28e142f3373', '', '', '', '0', '[]', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:1:{i:0;N;}' );
INSERT INTO `tours`(`id`,`name`,`active`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`,`price`,`main_image`,`short_content`,`d1_name`,`d2_name`,`d3_name`,`d4_name`,`d5_name`,`d6_name`,`d7_name`,`d8_name`,`d1_content`,`d2_content`,`d3_content`,`d4_content`,`d5_content`,`d6_content`,`d7_content`,`d8_content`,`included`,`excluded`,`slogan`,`route`) VALUES ( '61', 'Тур «Наследие великих цивилизаций» 7', '0', '', 'tur-nasledie-velikih-tsivilizatsiy-7', '7261e115afd13d1043f7f175d645887b', '', '', '', '0', '[]', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a:1:{i:0;N;}' );
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
INSERT INTO `users`(`id`,`email`,`password`,`roles`,`name`,`logins`,`last_login`,`login_attempts`,`banned_to`,`ban_time`,`reset_password_code`,`created_at`,`updated_at`,`register_token`,`active`,`username`) VALUES ( '1', 'admin@ariol.by', '32c473f545fbbafd2c275b6ef518f2cccf14059b5ca6e1f00c2a7748528398b9', '1', 'zgolich', '232', '1435662716', '0', NULL, NULL, NULL, '1392567501', '1435662716', NULL, '1', 'd55b50f8ebd78188a0effa94ef101edb' );
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



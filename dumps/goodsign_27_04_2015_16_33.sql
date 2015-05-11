-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "articles" ---------------------------------
CREATE TABLE `articles` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`date` Date NOT NULL, 
	`short_content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`count_views` Int( 255 ) NOT NULL DEFAULT '0', 
	`category_id` Int( 10 ) UNSIGNED NOT NULL, 
	`video` VarChar( 2048 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 13;
-- ---------------------------------------------------------


-- CREATE TABLE "articles_categories" ----------------------
CREATE TABLE `articles_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
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


-- CREATE TABLE "masters" ----------------------------------
CREATE TABLE `masters` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`first_image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`second_image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`position` TinyInt( 255 ) UNSIGNED NOT NULL,
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


-- CREATE TABLE "news" -------------------------------------
CREATE TABLE `news` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_description` VarChar( 350 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`active` TinyInt( 1 ) NULL DEFAULT '0', 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`date` Date NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`category_id` Int( 10 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = MyISAM
AUTO_INCREMENT = 100;
-- ---------------------------------------------------------


-- CREATE TABLE "news_categories" --------------------------
CREATE TABLE `news_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = MyISAM
AUTO_INCREMENT = 6;
-- ---------------------------------------------------------


-- CREATE TABLE "ourproducts" ------------------------------
CREATE TABLE `ourproducts` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`date` Date NOT NULL, 
	`category_id` Int( 10 ) UNSIGNED NOT NULL, 
	`master_id` Int( 10 ) UNSIGNED NOT NULL, 
	`on_main` TinyInt( 1 ) UNSIGNED NOT NULL DEFAULT '0',
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 81;
-- ---------------------------------------------------------


-- CREATE TABLE "ourproducts_categories" -------------------
CREATE TABLE `ourproducts_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL DEFAULT '1', 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL DEFAULT '1', 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 12;
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


-- CREATE TABLE "services" ---------------------------------
CREATE TABLE `services` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL DEFAULT '0', 
	`category_id` Int( 10 ) UNSIGNED NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 55;
-- ---------------------------------------------------------


-- CREATE TABLE "services_categories" ----------------------
CREATE TABLE `services_categories` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL, 
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`url` VarChar( 512 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`md5_url` Char( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`position` Int( 3 ) UNSIGNED NOT NULL, 
	`content` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`active` TinyInt( 1 ) UNSIGNED NOT NULL, 
	`s_description` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_keywords` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`s_title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 
	`images` Text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	 PRIMARY KEY ( `id` )
 )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 13;
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


-- Dump data of "articles" ---------------------------------
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '2', 'с 16 Марта Марина Гончарова гостит у нас в студии!', 's-16-marta-marina-goncharova-gostit-u-nas-v-studii', 'c9ca52aa62a5fa31a565ca91f80a541b', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '', '', '', '1', '2015-03-13', '<p>Дорогие друзья с 15 -го марта в нашей студии будет гостить Марина Гончарова.Если вам нравятся традиция в очень качественном исполнении -спешите!!!</p>
', '/files/article/2/0f9d3a7562e6e8c5c0bd176f0fc77ffd.jpg', '3', '2', 'тест' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '3', 'с 16 Марта Марина Гончарова гостит у нас в студии! 2', 's-16-marta-marina-goncharova-gostit-u-nas-v-studii-2', '32c272c79f5cdfad19da35de5155e216', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '', '', '', '1', '2015-03-13', '<p>Дорогие друзья с 15 -го марта в нашей студии будет гостить Марина Гончарова.Если вам нравятся традиция в очень качественном исполнении -спешите!!!</p>
', '/files/article/3/ddf3b3fd3a113fc0e6a4a111f0bced78.jpg', '1', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '4', 'с 16 Марта Марина Гончарова гостит у нас в студии! 3', 's-16-marta-marina-goncharova-gostit-u-nas-v-studii-3', 'f1a5962d6b37e9f9eb61c3aaa0054e46', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '', '', '', '1', '2015-03-12', '<p>Дорогие друзья с 15 -го марта в нашей студии будет гостить Марина Гончарова.Если вам нравятся традиция в очень качественном исполнении -спешите!!!</p>
', '/files/article/4/3966b94faa7fb66da4b7fec82b1de85e.jpg', '1', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '5', 'с 16 Марта Марина Гончарова гостит у нас в студии! 4', 'statya-4', '18edf09c352bda87366b17b0fa467cb7', '<p>контент-Дорогие друзья с 15 -го марта в нашей студии будет гостить Марина Гончарова.Если вам нравятся традиция в очень качественном исполнении -спешите!!!-контент</p>
', '', '', '', '1', '2015-03-13', '<p>Дорогие друзья с 15 -го марта в нашей студии будет гостить Марина Гончарова.Если вам нравятся традиция в очень качественном исполнении -спешите!!!</p>
', '/files/article/5/009d82118c72745464b06560c8d04096.jpg', '0', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '6', 'Привет из солнечной Испании!!', 'privet-iz-solnechnoy-ispanii', '60528535d18f72babdd2261dfa131f9e', '<p>контент - <a href="http://goodsign.local/articles#">Привет из солнечной Испании!!</a></p>
', '', '', '', '1', '2015-04-14', '<p>сокращ конт</p>
', '/files/article/6/6d24c6ae005cfbb08580b38efb33db74.jpg', '1', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '7', 'Мы сделали новую партию кружек!', 'myi-sdelali-novuyu-partiyu-krujek', 'd76aaf615aa8e00360696eacd6f1a14c', '<p>контент - <a href="http://goodsign.local/articles#">Мы сделали новую партию кружек!</a></p>
', '', '', '', '1', '2015-04-15', '<p>сокращ</p>
', '/files/article/7/31cae7180a0aca7685bd83788776499c.jpg', '0', '2', 'https://www.youtube.com/embed/ALBwaO-rAsE' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '8', 'Подарочные сертификаты, которые можно приобрести у нас!!!', 'podarochnyie-sertifikatyi-kotoryie-mojno-priobresti-u-nas', 'fab27a86ab3403dcb286f11ef4e4949d', '<p>контент</p>
', '', '', '', '1', '2015-04-01', '<p>сокр</p>
', '/files/article/8/761502f81e5aecc72a58e04494e26edd.jpg', '0', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '9', 'Новое видео посвящённое нашему хорошему другу, и отличному татуировщику из Московской студии MAD FISH TATTOO Не пропустите следующий приезд Дмитрия Табачина к нам в гости!!!', 'novoe-video-posvyaschyonnoe-nashemu-horoshemu-drugu-i-otlichnomu-tatuirovschiku-iz-moskovskoy-studii-mad-fish-tattoo-ne-propustite-sleduyuschiy-priezd-dmitriya-tabachina-k-nam-v-gosti', '100b6a24495701e00092e621535a5ad9', '', '', '', '', '1', '2015-04-09', '', '/files/article/9/53c92c34f691c307343c5d26f1cc31ec.jpg', '0', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '10', 'Good Sign X Делай.Пользу', 'good-sign-x-delay-polzu', '440db7256b14dedf41ffc5f1284a469e', '<p>конте</p>
', '', '', '', '1', '2015-04-15', '<p>сокр</p>
', '/files/article/10/a17af391acba271728db23ec8b55ec11.jpg', '0', '3', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '11', 'ПЕРМАНЕНТНЫЙ МАКИЯЖ. ТАТУАЖ', 'permanentnyiy-makiyaj-tatuaj', '4a94d0043ee60782dd8898c6b8a96cf4', '<p>конте</p>
', '', '', '', '1', '2015-04-16', '<p>сокр</p>
', '/files/article/11/9a8efd19f4608049bcb2d087bc95c24d.jpg', '2', '2', '' );
INSERT INTO `articles`(`id`,`name`,`url`,`md5_url`,`content`,`s_description`,`s_keywords`,`s_title`,`active`,`date`,`short_content`,`image`,`count_views`,`category_id`,`video`) VALUES ( '12', 'Мы переехали и ждем Вас в гости на ул. Петра Мстиславца 2!', 'myi-pereehali-i-jdem-vas-v-gosti-na-ul-petra-mstislavtsa-2', '9b214f3122d4a480defbe44ff9e70fa8', '<p>конте</p>
', '', '', '', '1', '2015-04-01', '<p>сокр</p>
', '/files/article/12/6fe0cbac6da850657c82e7a9d2450972.jpg', '0', '1', '' );
-- ---------------------------------------------------------


-- Dump data of "articles_categories" ----------------------
INSERT INTO `articles_categories`(`id`,`active`,`name`,`position`) VALUES ( '1', '1', 'Новости', '1' );
INSERT INTO `articles_categories`(`id`,`active`,`name`,`position`) VALUES ( '2', '1', 'События', '2' );
INSERT INTO `articles_categories`(`id`,`active`,`name`,`position`) VALUES ( '3', '1', 'Статьи о тату', '3' );
INSERT INTO `articles_categories`(`id`,`active`,`name`,`position`) VALUES ( '4', '1', 'Перманентный макияж', '4' );
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
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'address', 'г.Минск, ул. П. Мстиславца, 2

' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'email', 'good.sign.tattoo@gmail.com' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone', '+375 (29) 635 08 01' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone1', '+375 (29) 652 87 86  velcom' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'properties', 'phone2', '+375 (17) 207 10 19 городской' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'facebook', '#' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'g+', '' );
INSERT INTO `config`(`group`,`key`,`value`) VALUES ( 'social', 'instagram', 'https://instagram.com/good_sign_tattoo' );
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


-- Dump data of "masters" ----------------------------------
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '1', 'Михеенко Александр', '/files/master/1/4295f28710b4d0c64ca0351960e2a190.png', '/files/master/1/403beab7f76c8008212ea73e7e355256.png', '1', '1' );
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '2', 'Тагунов Саша', '/files/master/2/f865393accb0aceb785163f27a5dfd3f.png', '/files/master/2/5e90b6220274a47fdb41943ae7d369c5.png', '1', '2' );
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '3', 'Винтиков Андрей', '/files/master/3/a7d812df0ba875152ec26e4358a4b380.png', '/files/master/3/209adb6e02f504d8a01ad4356244da7d.png', '1', '3' );
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '4', 'Аня Лиля', '/files/master/4/9be5f8af513c7bb838402a311b5e185a.png', '/files/master/4/24db5713206082159d189a2e97965f78.png', '1', '4' );
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '5', 'Блашко Виталий', '/files/master/5/67fb5cc13ffce72a412c52680db8df03.png', '/files/master/5/0a306e353e75f8b0349ef65f56668e6e.png', '1', '5' );
INSERT INTO `masters`(`id`,`name`,`first_image`,`second_image`,`active`,`position`) VALUES ( '6', 'Гена Пухнаревич', '/files/master/6/72c131f7bfa0a462683928ebe56f79ad.png', '/files/master/6/7cf05fc039e944ce496d2697d99f17ed.png', '1', '6' );
-- ---------------------------------------------------------


-- Dump data of "menu" -------------------------------------
-- ---------------------------------------------------------


-- Dump data of "news" -------------------------------------
INSERT INTO `news`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`md5_url`,`date`,`content`,`category_id`) VALUES ( '99', 'новость 4', '', '', '', 'novost-4', '1', 'dcfa71ea51f482f5cdbf041a2bbeae67', '2014-12-02', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '4' );
INSERT INTO `news`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`md5_url`,`date`,`content`,`category_id`) VALUES ( '98', 'новость 3', '', '', '', 'novost-3', '1', '3bb7256a044d6d5a766234611f7f0268', '2014-12-03', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '4' );
INSERT INTO `news`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`md5_url`,`date`,`content`,`category_id`) VALUES ( '97', 'новость 2', '', '', '', 'novost-2', '1', 'f03178c088abca53c326c4d2c38e725a', '2014-11-04', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '5' );
INSERT INTO `news`(`id`,`name`,`s_title`,`s_description`,`s_keywords`,`url`,`active`,`md5_url`,`date`,`content`,`category_id`) VALUES ( '96', 'новость 1', '', '', '', 'novost-1', '1', '01e7b6fcc6894b04bfc903c16df0cd07', '2014-11-20', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '4' );
-- ---------------------------------------------------------


-- Dump data of "news_categories" --------------------------
INSERT INTO `news_categories`(`id`,`name`,`url`,`md5_url`,`active`,`s_description`,`s_keywords`,`s_title`,`position`) VALUES ( '5', 'категория 2', 'kategoriya-2', 'eac801319b69e5f070291f4ceb69deb9', '1', '', '', '', '2' );
INSERT INTO `news_categories`(`id`,`name`,`url`,`md5_url`,`active`,`s_description`,`s_keywords`,`s_title`,`position`) VALUES ( '4', 'категория 1', 'kategoriya-1', '07755de9e49657a55292ee9804347778', '1', '', '', '', '1' );
-- ---------------------------------------------------------


-- Dump data of "ourproducts" ------------------------------
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '41', '1', '/files/ourproduct/41/1a20ba9e215e5dc91d841203f1680932.jpg', '', '2015-04-08', '9', '1', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '43', '1', '/files/ourproduct/43/240e530a99967a3004de8819862b51d8.jpg', '', '2015-04-07', '9', '3', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '46', '1', '/files/ourproduct/46/7984789d2d749020d9ef8ef8d6a7c0e4.jpg', '', '2015-04-01', '11', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '47', '1', '/files/ourproduct/47/878c9c462593c30a3a16560ee75c624b.jpg', '', '2015-04-14', '9', '5', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '48', '1', '/files/ourproduct/48/13c549b789c0ae3e75d639644fbd189a.jpg', '', '2015-04-07', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '49', '1', '/files/ourproduct/49/a9e0483c0fd05a32340afc3af377e014.jpg', '', '2015-04-06', '9', '4', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '50', '1', '/files/ourproduct/50/6bdab72234b2f9feb560cb44f0db2133.jpg', '', '2015-04-07', '9', '4', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '51', '1', '/files/ourproduct/51/09f5324e324b6dde833b6145ee458bc1.jpg', '', '2015-04-07', '9', '4', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '52', '1', '/files/ourproduct/52/0312ae37c8cd9764a87dce467751e2c2.jpg', '', '2015-04-07', '9', '6', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '53', '1', '/files/ourproduct/53/591a72558764de3e4c4962dff4a0c217.jpg', '', '2015-04-07', '10', '2', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '54', '1', '/files/ourproduct/54/c3b2ee0029d571c4fb557e03d3eb8973.jpg', '', '2015-04-06', '9', '2', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '55', '0', '/files/ourproduct/55/48cd712df5568c3df767b1786560c56f.jpg', '', '2015-04-07', '9', '1', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '56', '1', '/files/ourproduct/56/1f9349687094a86cc98cbf570895bcf8.jpg', '', '2015-04-21', '11', '2', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '57', '1', '/files/ourproduct/57/8b920e8eaff6c4e23029203fdd19cbd8.jpg', '', '2015-04-07', '9', '6', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '58', '1', '/files/ourproduct/58/bbe8d3524642bb08bd815e989871ff98.jpg', '', '2015-04-07', '9', '5', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '59', '1', '/files/ourproduct/59/4d970ba2871f0227c3122be4ccc1dd01.jpg', '', '2015-04-07', '9', '6', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '60', '1', '/files/ourproduct/60/0fa508ca729490b43f5e49259c70c7db.jpg', '', '2015-04-07', '9', '5', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '61', '1', '/files/ourproduct/61/c773f1cf245629c1906c2b392301e42f.jpg', '', '2015-04-09', '9', '2', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '62', '1', '/files/ourproduct/62/96a146af2cad87bd463abbcc438446ab.jpg', '', '2015-04-07', '11', '1', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '63', '1', '/files/ourproduct/63/4f1af8180491505d945172e174b24b85.jpg', '', '0000-00-00', '11', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '64', '1', '/files/ourproduct/64/c00b88294c846139c8e0b2b937ad64a4.jpg', '', '2015-04-13', '11', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '65', '1', '/files/ourproduct/65/14bf144ed789640b5962153ba31a20a9.jpg', '', '2015-04-13', '11', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '66', '1', '/files/ourproduct/66/06b8222ff701c184c7d55e9328989b04.jpg', '', '2015-04-13', '11', '2', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '67', '1', '/files/ourproduct/67/1152bf939e02873485aa33d0f605aebf.jpg', '', '2015-04-13', '11', '1', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '68', '1', '/files/ourproduct/68/72d8dfa8cd234966d7455eb849ecd687.jpg', '', '2015-04-13', '11', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '69', '1', '/files/ourproduct/69/a673cc26cfc9b07698e067c83596dd2b.jpg', '', '2015-04-15', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '70', '1', '/files/ourproduct/70/7b7973ca0d336e716a1bac7a9f2ef6ab.jpg', '', '2015-04-15', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '71', '1', '/files/ourproduct/71/8b50a97d1356b2277a0e4dce15311725.jpg', '', '2015-04-23', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '72', '1', '/files/ourproduct/72/f2e9286fa975bba7d4b83be1d6f6284d.jpg', '', '2015-04-23', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '73', '1', '/files/ourproduct/73/7c7cdfa3014fa163e3887b3de35dbf89.jpg', '', '2015-04-23', '9', '3', '1' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '74', '1', '/files/ourproduct/74/40b1631291fb04d60c638eb0742c22ca.jpg', '', '2015-04-23', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '75', '1', '/files/ourproduct/75/afee5421f51a0b7ebbe9c77b90396314.jpg', '', '2015-04-23', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '76', '1', '/files/ourproduct/76/fa829dddf06c1abc0a4fedeeeaf1b1cb.jpg', '', '2015-04-23', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '77', '1', '/files/ourproduct/77/0f89065ca78a34d3990b9a51ea7a2ca4.jpg', '', '2015-04-24', '10', '5', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '78', '1', '/files/ourproduct/78/5b29b6d56eef09cd815ee0f291466515.jpg', '', '2015-04-24', '9', '3', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '79', '1', '/files/ourproduct/79/61ba796dd2e38a007700dddd3a916f77.jpg', '', '2015-04-24', '9', '1', '0' );
INSERT INTO `ourproducts`(`id`,`active`,`image`,`content`,`date`,`category_id`,`master_id`,`on_main`) VALUES ( '80', '1', '/files/ourproduct/80/69856e217578648d2fd96d51456b8ace.jpg', '', '2015-04-24', '9', '2', '0' );
-- ---------------------------------------------------------


-- Dump data of "ourproducts_categories" -------------------
INSERT INTO `ourproducts_categories`(`id`,`name`,`position`,`active`,`md5_url`,`url`,`s_description`,`s_keywords`,`s_title`) VALUES ( '9', 'татуировка', '1', '1', '306743b0726f2348d0299ae0d88967c0', 'tattoo', '', '', '' );
INSERT INTO `ourproducts_categories`(`id`,`name`,`position`,`active`,`md5_url`,`url`,`s_description`,`s_keywords`,`s_title`) VALUES ( '10', 'перманент', '2', '1', '382af360311b4150b33fad9edd7c564b', 'permanent-makeup', '', '', '' );
INSERT INTO `ourproducts_categories`(`id`,`name`,`position`,`active`,`md5_url`,`url`,`s_description`,`s_keywords`,`s_title`) VALUES ( '11', 'эскиз', '3', '1', '4fffa1d3556819522e3fb201f1c11809', 'eskiz', '', '', '' );
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


-- Dump data of "services" ---------------------------------
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '48', 'Исправление татуировок', '1', '11', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'ispravlenie-tatuirovok', '9362e4968cfc6aa7f2a9bc888da8c79d', '', '', '', '1', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '49', 'Эскизы татуировок', '1', '11', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'eskizyi-tatuirovok', '97fab149bef878f2c95014af251e26ed', '', '', '', '2', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '50', 'Мужские татуировки', '1', '11', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'mujskie-tatuirovki', '7684cb111fc752c8103e73a3d18a688f', '', '', '', '3', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '51', 'Женские татуировки', '1', '11', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'jenskie-tatuirovki', 'a17f0f876749f8b2f1e3e91203a837b0', '', '', '', '4', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '52', 'Перманентный макияж губ', '1', '12', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'permanentnyiy-makiyaj-gub', '49b532dad641ea97e64bec0c432f58f1', '', '', '', '1', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '53', 'Перманентный макияж бровей', '1', '12', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'permanentnyiy-makiyaj-brovey', '6b8c147afd3bf4e4928d9a855a8c0241', '', '', '', '2', '[]' );
INSERT INTO `services`(`id`,`name`,`active`,`category_id`,`content`,`url`,`md5_url`,`s_description`,`s_keywords`,`s_title`,`position`,`images`) VALUES ( '54', 'Перманентный макияж глаз', '1', '12', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', 'permanentnyiy-makiyaj-glaz', '96c3e493493bf64886d92804a779bb66', '', '', '', '3', '[]' );
-- ---------------------------------------------------------


-- Dump data of "services_categories" ----------------------
INSERT INTO `services_categories`(`id`,`name`,`url`,`md5_url`,`position`,`content`,`active`,`s_description`,`s_keywords`,`s_title`,`images`) VALUES ( '11', 'Татуировки', 'tattoo', '306743b0726f2348d0299ae0d88967c0', '1', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '1', '', '', '', '[]' );
INSERT INTO `services_categories`(`id`,`name`,`url`,`md5_url`,`position`,`content`,`active`,`s_description`,`s_keywords`,`s_title`,`images`) VALUES ( '12', 'Перманентный макияж', 'permanent-makeup', '382af360311b4150b33fad9edd7c564b', '2', '<p>контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент контент</p>
', '1', '', '', '', '[]' );
-- ---------------------------------------------------------


-- Dump data of "slides" -----------------------------------
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '4', 'Женские татуировки 1', '', '/files/slide/4/8379799971bc429afae4df4af0555fca.jpg', '1', '1', '' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '5', 'Женские татуировки 2', '', '/files/slide/5/575c4ca80728f7932305bb377aa1d312.jpg', '2', '1', '' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '6', 'Женские татуировки 3', '', '/files/slide/6/d3b168b755b0526b0e9322043418b5ea.jpg', '3', '1', '' );
INSERT INTO `slides`(`id`,`name`,`content`,`image`,`position`,`active`,`link`) VALUES ( '7', 'Женские татуировки 4', '', '/files/slide/7/62eb14e387683f701ada63a34a80fbbc.jpg', '4', '1', '' );
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
INSERT INTO `users`(`id`,`email`,`password`,`roles`,`name`,`logins`,`last_login`,`login_attempts`,`banned_to`,`ban_time`,`reset_password_code`,`created_at`,`updated_at`,`register_token`,`active`,`username`) VALUES ( '1', 'admin@ariol.by', '32c473f545fbbafd2c275b6ef518f2cccf14059b5ca6e1f00c2a7748528398b9', '1', 'zgolich', '187', '1430129388', '0', NULL, NULL, NULL, '1392567501', '1430129388', NULL, '1', 'd55b50f8ebd78188a0effa94ef101edb' );
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
CREATE INDEX `active` USING BTREE ON `news`( `active` );
-- ---------------------------------------------------------


-- CREATE INDEX "category_id" ------------------------------
CREATE INDEX `category_id` USING BTREE ON `news`( `category_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "url" --------------------------------------
CREATE INDEX `url` USING BTREE ON `news`( `md5_url` );
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



<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-13 11:03:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'position' in 'order clause' [ SELECT `ourproduct`.`id` AS `id`, `ourproduct`.`active` AS `active`, `ourproduct`.`image` AS `image`, `ourproduct`.`content` AS `content`, `ourproduct`.`date` AS `date`, `ourproduct`.`category_id` AS `category_id`, `ourproduct`.`master_id` AS `master_id` FROM `ourproducts` AS `ourproduct` WHERE `active` = 1 ORDER BY `position` ASC LIMIT 6 ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
2015-04-13 11:03:34 --- DEBUG: #0 /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `ourprod...', 'Model_Ourproduc...', Array)
#1 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/sema/www/goodsign/application/classes/Controller/Site/Index.php(22): Kohana_ORM->find_all()
#4 /home/sema/www/goodsign/system/classes/Kohana/Controller.php(84): Controller_Site_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/sema/www/goodsign/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#7 /home/sema/www/goodsign/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/sema/www/goodsign/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/sema/www/goodsign/index.php(137): Kohana_Request->execute()
#10 {main} in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
2015-04-13 14:56:33 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'url' in 'where clause' [ SELECT `ourproduct`.`id` AS `id`, `ourproduct`.`active` AS `active`, `ourproduct`.`image` AS `image`, `ourproduct`.`content` AS `content`, `ourproduct`.`date` AS `date`, `ourproduct`.`category_id` AS `category_id`, `ourproduct`.`master_id` AS `master_id` FROM `ourproducts` AS `ourproduct` WHERE `url` = 'tattoo' AND `active` = '1' LIMIT 1 ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
2015-04-13 14:56:33 --- DEBUG: #0 /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `ourprod...', false, Array)
#1 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/sema/www/goodsign/modules/ariol/classes/Extasy/Orm.php(421): Kohana_ORM->find()
#4 /home/sema/www/goodsign/modules/ariol/classes/Controller/Site.php(41): Extasy_Orm->get_page_by_url('tattoo')
#5 /home/sema/www/goodsign/application/classes/Controller/Site/Ourproduct.php(146): Controller_Site->set_metatags_and_content('tattoo', 'ourproduct')
#6 /home/sema/www/goodsign/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/sema/www/goodsign/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#9 /home/sema/www/goodsign/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/sema/www/goodsign/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/sema/www/goodsign/index.php(137): Kohana_Request->execute()
#12 {main} in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
2015-04-13 16:31:50 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL ORDER BY `position` ASC' at line 1 [ SELECT `master`.`id` AS `id`, `master`.`name` AS `name`, `master`.`first_image` AS `first_image`, `master`.`second_image` AS `second_image`, `master`.`url` AS `url`, `master`.`md5_url` AS `md5_url`, `master`.`s_description` AS `s_description`, `master`.`s_title` AS `s_title`, `master`.`s_keywords` AS `s_keywords`, `master`.`content` AS `content`, `master`.`active` AS `active`, `master`.`position` AS `position` FROM `masters` AS `master` WHERE `active` = 1 AND `id` IN NULL ORDER BY `position` ASC ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
2015-04-13 16:31:50 --- DEBUG: #0 /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `master`...', 'Model_Master', Array)
#1 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/goodsign/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/sema/www/goodsign/application/classes/Controller/Site/Ourproduct.php(145): Kohana_ORM->find_all()
#4 /home/sema/www/goodsign/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/sema/www/goodsign/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#7 /home/sema/www/goodsign/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/sema/www/goodsign/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/sema/www/goodsign/index.php(137): Kohana_Request->execute()
#10 {main} in /home/sema/www/goodsign/modules/database/classes/Kohana/Database/Query.php:251
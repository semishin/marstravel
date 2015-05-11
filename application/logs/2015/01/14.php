<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-14 17:11:34 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'ourproducts.id' in 'order clause' [ SELECT `ourproduct`.`id` AS `id`, `ourproduct`.`active` AS `active`, `ourproduct`.`position` AS `position`, `ourproduct`.`image` AS `image`, `ourproduct`.`on_main` AS `on_main`, `ourproduct`.`content` AS `content`, `ourproduct`.`short_content` AS `short_content`, `ourproduct`.`url` AS `url`, `ourproduct`.`md5_url` AS `md5_url`, `ourproduct`.`s_description` AS `s_description`, `ourproduct`.`s_keywords` AS `s_keywords`, `ourproduct`.`s_title` AS `s_title`, `ourproduct`.`link` AS `link`, `ourproduct`.`name` AS `name`, `ourproduct`.`more_image` AS `more_image` FROM `ourproducts` AS `ourproduct` WHERE `active` = 1 ORDER BY `ourproducts`.`id` ASC LIMIT 8 ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:11:34 --- DEBUG: #0 /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `ourprod...', 'Model_Ourproduc...', Array)
#1 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(106): Kohana_ORM->find_all()
#4 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#7 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#10 {main} in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:45:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The product property does not exist in the Model_Prodcat class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:43 --- DEBUG: #0 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('product')
#1 /home/sema/www/ariol/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('product')
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(121): Extasy_Orm->__get('product')
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The product property does not exist in the Model_Prodcat class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:44 --- DEBUG: #0 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('product')
#1 /home/sema/www/ariol/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('product')
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(121): Extasy_Orm->__get('product')
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The product property does not exist in the Model_Prodcat class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:46 --- DEBUG: #0 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('product')
#1 /home/sema/www/ariol/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('product')
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(121): Extasy_Orm->__get('product')
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The product property does not exist in the Model_Prodcat class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:45:55 --- DEBUG: #0 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('product')
#1 /home/sema/www/ariol/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('product')
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(121): Extasy_Orm->__get('product')
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_category()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-01-14 17:47:00 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT COUNT(`ourproduct`.`id`) AS `records_found` FROM `ourproducts` AS `ourproduct` WHERE `active` = 1 AND `category_id` = '2' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:47:00 --- DEBUG: #0 /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`o...', false, Array)
#1 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(56): Kohana_ORM->count_all()
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_more()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:47:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT COUNT(`ourproduct`.`id`) AS `records_found` FROM `ourproducts` AS `ourproduct` WHERE `active` = 1 AND `category_id` = '2' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:47:32 --- DEBUG: #0 /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`o...', false, Array)
#1 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(56): Kohana_ORM->count_all()
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_more()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:49:21 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT COUNT(`ourproduct`.`id`) AS `records_found` FROM `ourproducts` AS `ourproduct` WHERE `active` = 1 AND `category_id` = '2' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
2015-01-14 17:49:21 --- DEBUG: #0 /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`o...', false, Array)
#1 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/ariol/application/classes/Controller/Site/Ourproduct.php(56): Kohana_ORM->count_all()
#3 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Ourproduct->action_more()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Ourproduct))
#6 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/ariol/modules/database/classes/Kohana/Database/Query.php:251
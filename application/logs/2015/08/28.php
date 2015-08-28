<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-28 15:31:15 --- EMERGENCY: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `priceflight`.`id` AS `id`, `priceflight`.`start_date` AS `start_date`, `priceflight`.`end_date` AS `end_date`, `priceflight`.`price` AS `price`, `priceflight`.`total_places` AS `total_places`, `priceflight`.`free_places` AS `free_places`, `priceflight`.`active` AS `active` FROM `prices_flights` AS `priceflight` WHERE `free_places` >= 2 AND `start_date` >= ('08', '25', '2015') AND `end_date`  ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/database/classes/Kohana/Database/Query.php:251
2015-08-28 15:31:15 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `pricefl...', false, Array)
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /home/vitaliy/www/marstravel.local/marstravel/application/classes/Controller/Site/Tour.php(37): Kohana_ORM->find()
#4 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Site_Tour->action_info()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Tour))
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/vitaliy/www/marstravel.local/marstravel/index.php(140): Kohana_Request->execute()
#10 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/database/classes/Kohana/Database/Query.php:251
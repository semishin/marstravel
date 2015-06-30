<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-12 19:10:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'stars' in 'where clause' [ SELECT COUNT(`sight`.`id`) AS `records_found` FROM `sights` AS `sight` WHERE `active` = 1 AND `stars` = '4' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php:251
2015-06-12 19:10:04 --- DEBUG: #0 /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT COUNT(`s...', false, Array)
#1 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/marstravel/application/classes/Controller/Site/Hotel.php(102): Kohana_ORM->count_all()
#3 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(84): Controller_Site_Hotel->action_ajax()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Hotel))
#6 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php:251
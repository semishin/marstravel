<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-07 19:47:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-07 19:47:57 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/mars.ariol.by/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#10 {main} in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-07 19:48:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-07 19:48:08 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/mars.ariol.by/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#10 {main} in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
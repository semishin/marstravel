<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-21 14:49:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-21 14:49:35 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Excursion))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-21 15:18:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-21 15:18:12 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Excursion))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-21 15:20:54 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:20:54 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home4/turistic/public_html/skazka/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#10 {main} in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:20:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:20:57 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home4/turistic/public_html/skazka/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#10 {main} in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:01 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home4/turistic/public_html/skazka/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#10 {main} in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:04 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home4/turistic/public_html/skazka/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#10 {main} in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT `city`.`id` AS `id`, `city`.`name` AS `name`, `city`.`active` AS `active`, `city`.`images` AS `images` FROM `cities` AS `city` WHERE `active` = 1 AND `id` IN NULL ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 15:21:12 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `city`.`...', 'Model_City', Array)
#1 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home4/turistic/public_html/skazka/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home4/turistic/public_html/skazka/application/classes/Controller/Site/Excursion.php(35): Kohana_ORM->find_all()
#4 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_Excursion->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Excursion))
#7 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#10 {main} in /home4/turistic/public_html/skazka/modules/database/classes/Kohana/Database/Query.php:251
2015-10-21 16:39:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-21 16:39:19 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Excursion))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
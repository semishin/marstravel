<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-25 09:27:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'position' in 'where clause' [ SELECT `banner`.`id` AS `id`, `banner`.`name` AS `name`, `banner`.`image` AS `image`, `banner`.`active` AS `active`, `banner`.`type` AS `type`, `banner`.`link` AS `link` FROM `banners` AS `banner` WHERE `active` = 1 AND `position` = 1 ORDER BY `id` DESC LIMIT 1 ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php:251
2015-05-25 09:27:04 --- DEBUG: #0 /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `banner`...', 'Model_Banner', Array)
#1 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /home/sema/www/marstravel/modules/ariol/classes/Controller/Site.php(30): Kohana_ORM->find_all()
#4 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(69): Controller_Site->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#7 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#10 {main} in /home/sema/www/marstravel/modules/database/classes/Kohana/Database/Query.php:251
2015-05-25 14:50:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The main_image property does not exist in the Model_Sight class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-05-25 14:50:28 --- DEBUG: #0 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('main_image')
#1 /home/sema/www/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('main_image')
#2 /home/sema/www/marstravel/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('main_image')
#3 /home/sema/www/marstravel/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Sight), Object(Model_Sight))
#4 /home/sema/www/marstravel/application/classes/Model/Sight.php(39): CM_Form_Abstract->__construct(Object(Model_Sight))
#5 /home/sema/www/marstravel/modules/ariol/classes/Controller/Crud.php(214): Model_Sight->form()
#6 /home/sema/www/marstravel/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Sight))
#7 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Sight))
#10 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#13 {main} in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
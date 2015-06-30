<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-30 14:12:49 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'marstravel.excursion' doesn't exist [ SHOW FULL COLUMNS FROM `excursion` ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php:336
2015-06-30 14:12:49 --- DEBUG: #0 /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php(336): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('excursion')
#2 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/sema/www/marstravel/modules/ariol/classes/Controller/Crud.php(123): Kohana_ORM::factory('Excursion')
#7 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#10 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#13 {main} in /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php:336
2015-06-30 14:17:05 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'marstravel.excursion' doesn't exist [ SHOW FULL COLUMNS FROM `excursion` ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php:336
2015-06-30 14:17:05 --- DEBUG: #0 /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php(336): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('excursion')
#2 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /home/sema/www/marstravel/modules/ariol/classes/Controller/Crud.php(123): Kohana_ORM::factory('Excursion')
#7 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#10 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#13 {main} in /home/sema/www/marstravel/modules/ariol/classes/Kohana/Database/MySQLi.php:336
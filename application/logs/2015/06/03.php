<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-03 13:40:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The route property does not exist in the Model_Page class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-06-03 13:40:15 --- DEBUG: #0 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('route')
#1 /home/sema/www/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('route')
#2 /home/sema/www/marstravel/application/classes/Controller/Site/Index.php(42): Extasy_Orm->__get('route')
#3 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(84): Controller_Site_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#6 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#9 {main} in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
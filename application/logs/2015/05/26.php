<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-26 12:39:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-05-26 12:39:33 --- DEBUG: #0 /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('date')
#1 /home/sema/www/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('date')
#2 /home/sema/www/marstravel/application/views/site/search/index.php(34): Extasy_Orm->__get('date')
#3 /home/sema/www/marstravel/system/classes/Kohana/View.php(61): include('/home/sema/www/...')
#4 /home/sema/www/marstravel/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/sema/www/...', Array)
#5 /home/sema/www/marstravel/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/sema/www/marstravel/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/sema/www/marstravel/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Search))
#11 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#14 {main} in /home/sema/www/marstravel/modules/orm/classes/Kohana/ORM.php:603
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-14 17:37:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view add could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/sema/www/marstravel/modules/ariol/classes/Extasy/View.php:97
2015-07-14 17:37:46 --- DEBUG: #0 /home/sema/www/marstravel/modules/ariol/classes/Extasy/View.php(97): Kohana_View->set_filename('add')
#1 /home/sema/www/marstravel/modules/ariol/classes/Extasy/Controller.php(64): Extasy_View->set_filename('add')
#2 /home/sema/www/marstravel/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/sema/www/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Order))
#5 /home/sema/www/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/sema/www/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/sema/www/marstravel/index.php(137): Kohana_Request->execute()
#8 {main} in /home/sema/www/marstravel/modules/ariol/classes/Extasy/View.php:97
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-12 12:21:19 --- EMERGENCY: Kohana_Exception [ 0 ]: The emai property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-08-12 12:21:19 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('emai')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('emai')
#2 /home/vitaliy/www/marstravel.local/marstravel/application/classes/Controller/Site/User.php(94): Extasy_Orm->__get('emai')
#3 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Site_User->action_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_User))
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitaliy/www/marstravel.local/marstravel/index.php(140): Kohana_Request->execute()
#9 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-08-12 12:21:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The emai property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-08-12 12:21:39 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('emai')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('emai')
#2 /home/vitaliy/www/marstravel.local/marstravel/application/classes/Controller/Site/User.php(94): Extasy_Orm->__get('emai')
#3 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Site_User->action_profile()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_User))
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/vitaliy/www/marstravel.local/marstravel/index.php(140): Kohana_Request->execute()
#9 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-08-12 12:25:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The requsities property does not exist in the Model_Coupon_Firm class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
2015-08-12 12:25:08 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('requsities')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('requsities')
#2 /home/vitaliy/www/marstravel.local/marstravel/application/views/site/user/profile.php(40): Extasy_Orm->__get('requsities')
#3 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/View.php(61): include('/home/vitaliy/w...')
#4 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/vitaliy/w...', Array)
#5 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_User))
#11 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/vitaliy/www/marstravel.local/marstravel/index.php(140): Kohana_Request->execute()
#14 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/orm/classes/Kohana/ORM.php:603
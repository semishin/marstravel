<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-10 13:08:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: admin-house ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:08:21 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php(39): Kohana_Route::get('admin-house')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column/Link.php(61): Extasy_ACL::is_route_allowed('admin-house:edi...')
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column.php(71): Extasy_Grid_Column_Link->_field(Object(Model_Hotel))
#3 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(489): Extasy_Grid_Column->field(Object(Model_Hotel))
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(176): Extasy_Orm->grid_value('name')
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_get_grid_data()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Hotel))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#11 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:41:52 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist:  ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:41:52 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php(39): Kohana_Route::get('')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column/Link.php(61): Extasy_ACL::is_route_allowed(NULL)
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column.php(71): Extasy_Grid_Column_Link->_field(Object(Model_Order))
#3 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(489): Extasy_Grid_Column->field(Object(Model_Order))
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(176): Extasy_Orm->grid_value('tour_id')
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_get_grid_data()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Order))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#11 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:42:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist:  ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:42:02 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php(39): Kohana_Route::get('')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column/Link.php(61): Extasy_ACL::is_route_allowed(NULL)
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column.php(71): Extasy_Grid_Column_Link->_field(Object(Model_Order))
#3 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(489): Extasy_Grid_Column->field(Object(Model_Order))
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(176): Extasy_Orm->grid_value('tour_id')
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_get_grid_data()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Order))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#11 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:42:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist:  ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 13:42:29 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php(39): Kohana_Route::get('')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column/Link.php(61): Extasy_ACL::is_route_allowed(NULL)
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Grid/Column.php(71): Extasy_Grid_Column_Link->_field(Object(Model_Order))
#3 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Orm.php(489): Extasy_Grid_Column->field(Object(Model_Order))
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(176): Extasy_Orm->grid_value('tour_id')
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_get_grid_data()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Order))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#11 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/ACL.php:39
2015-08-10 16:59:46 --- EMERGENCY: View_Exception [ 0 ]: The requested view logout could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php:97
2015-08-10 16:59:46 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php(97): Kohana_View->set_filename('logout')
#1 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Controller.php(64): Extasy_View->set_filename('logout')
#2 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Auth))
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#8 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php:97
2015-08-10 17:15:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view layout/site/global_user could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php:97
2015-08-10 17:15:39 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php(97): Kohana_View->set_filename('layout/site/glo...')
#1 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/View.php(339): Extasy_View->set_filename('layout/site/glo...')
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php(28): Kohana_View->render('layout/site/glo...')
#3 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/View.php(228): Extasy_View->render()
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#5 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_User))
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /home/vitaliy/www/marstravel.local/marstravel/index.php(137): Kohana_Request->execute()
#11 {main} in /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Extasy/View.php:97
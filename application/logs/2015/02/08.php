<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-08 17:36:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The image property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:36:43 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('image')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('image')
#2 /home/ariol.by/application/views/site/article/index.php(24): Extasy_Orm->__get('image')
#3 /home/ariol.by/system/classes/Kohana/View.php(61): include('/home/ariol.by/...')
#4 /home/ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/ariol.by/...', Array)
#5 /home/ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Article))
#11 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/ariol.by/index.php(137): Kohana_Request->execute()
#14 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:37:25 --- EMERGENCY: Kohana_Exception [ 0 ]: The count_views property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:37:25 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('count_views')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('count_views')
#2 /home/ariol.by/application/views/site/article/index.php(30): Extasy_Orm->__get('count_views')
#3 /home/ariol.by/system/classes/Kohana/View.php(61): include('/home/ariol.by/...')
#4 /home/ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/ariol.by/...', Array)
#5 /home/ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Article))
#11 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/ariol.by/index.php(137): Kohana_Request->execute()
#14 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:37:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The count_views property does not exist in the Model_Article class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:37:46 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('count_views')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('count_views')
#2 /home/ariol.by/application/views/site/article/index.php(30): Extasy_Orm->__get('count_views')
#3 /home/ariol.by/system/classes/Kohana/View.php(61): include('/home/ariol.by/...')
#4 /home/ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/ariol.by/...', Array)
#5 /home/ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Article))
#11 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/ariol.by/index.php(137): Kohana_Request->execute()
#14 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-02-08 17:39:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The core property does not exist in the Model_Brief class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:34 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('core', '')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(289): Kohana_ORM->__set('core', '')
#2 /home/ariol.by/application/classes/Controller/Site/Brief.php(27): Extasy_Orm->__set('core', '')
#3 /home/ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Brief->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Brief))
#6 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ariol.by/index.php(137): Kohana_Request->execute()
#9 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The core property does not exist in the Model_Brief class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('core', '')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(289): Kohana_ORM->__set('core', '')
#2 /home/ariol.by/application/classes/Controller/Site/Brief.php(27): Extasy_Orm->__set('core', '')
#3 /home/ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Brief->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Brief))
#6 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ariol.by/index.php(137): Kohana_Request->execute()
#9 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The core property does not exist in the Model_Brief class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('core', '')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(289): Kohana_ORM->__set('core', '')
#2 /home/ariol.by/application/classes/Controller/Site/Brief.php(27): Extasy_Orm->__set('core', '')
#3 /home/ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Brief->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Brief))
#6 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ariol.by/index.php(137): Kohana_Request->execute()
#9 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The core property does not exist in the Model_Brief class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
2015-02-08 17:39:44 --- DEBUG: #0 /home/ariol.by/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('core', '')
#1 /home/ariol.by/modules/ariol/classes/Extasy/Orm.php(289): Kohana_ORM->__set('core', '')
#2 /home/ariol.by/application/classes/Controller/Site/Brief.php(27): Extasy_Orm->__set('core', '')
#3 /home/ariol.by/system/classes/Kohana/Controller.php(84): Controller_Site_Brief->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Brief))
#6 /home/ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ariol.by/index.php(137): Kohana_Request->execute()
#9 {main} in /home/ariol.by/modules/orm/classes/Kohana/ORM.php:702
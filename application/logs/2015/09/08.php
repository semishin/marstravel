<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-08 15:39:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:39:49 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:39:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:39:58 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:40:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:40:14 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:01 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:18 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:53 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:41:53 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:47:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:47:33 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:15 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:41 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:51:54 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:29 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:36 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:36 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:54:46 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:55:10 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:55:10 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:59:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 15:59:58 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 16:22:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 16:22:24 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 16:31:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The price_single property does not exist in the Model_Tour class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-09-08 16:31:56 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('price_single')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('price_single')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('price_single')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Tour), Object(Model_Tour))
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(81): CM_Form_Abstract->__construct(Object(Model_Tour))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_Tour->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
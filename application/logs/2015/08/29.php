<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-29 12:17:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:17:14 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/application/views/site/tour/item.php(8): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#4 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#5 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Tour))
#11 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#14 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:17:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:17:18 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/application/views/site/tour/item.php(8): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#4 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#5 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Tour))
#11 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#14 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:22:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:22:09 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/application/views/site/tour/item.php(8): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#4 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#5 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Tour))
#11 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#14 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:33:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:33:42 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_City), Object(Model_City))
#4 /home/mars.ariol.by/application/classes/Model/City.php(50): CM_Form_Abstract->__construct(Object(Model_City))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_City->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_City))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_City))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:35:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:35:03 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_City), Object(Model_City))
#4 /home/mars.ariol.by/application/classes/Model/City.php(50): CM_Form_Abstract->__construct(Object(Model_City))
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(214): Model_City->form()
#6 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_City))
#7 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_City))
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#13 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:41:09 --- EMERGENCY: Kohana_Exception [ 0 ]: The images property does not exist in the Model_City class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 12:41:09 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('images')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('images')
#2 /home/mars.ariol.by/application/views/site/tour/item.php(8): Extasy_Orm->__get('images')
#3 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#4 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#5 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#8 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Tour))
#11 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#14 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 14:19:23 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Coupon class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 14:19:23 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('name')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Field/Select/ORM.php(47): Extasy_Orm->__get('name')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Field/Select/ORM.php(66): CM_Field_Select_ORM->get_options()
#4 /home/mars.ariol.by/modules/ariol/views/cm/form.php(4): CM_Field_Select_ORM->render()
#5 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(23): Kohana_View->render(NULL)
#8 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#9 /home/mars.ariol.by/modules/ariol/views/crud/form.php(4): Kohana_View->__toString()
#10 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#11 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#12 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#13 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#14 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#15 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Ordercoupon))
#18 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#21 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 14:20:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Coupon class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 14:20:40 --- DEBUG: #0 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('name')
#1 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('name')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Field/Select/ORM.php(47): Extasy_Orm->__get('name')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Field/Select/ORM.php(66): CM_Field_Select_ORM->get_options()
#4 /home/mars.ariol.by/modules/ariol/views/cm/form.php(4): CM_Field_Select_ORM->render()
#5 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#6 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#7 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(23): Kohana_View->render(NULL)
#8 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#9 /home/mars.ariol.by/modules/ariol/views/crud/form.php(4): Kohana_View->__toString()
#10 /home/mars.ariol.by/system/classes/Kohana/View.php(61): include('/home/mars.ario...')
#11 /home/mars.ariol.by/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/mars.ario...', Array)
#12 /home/mars.ariol.by/modules/ariol/classes/Extasy/View.php(27): Kohana_View->render(NULL)
#13 /home/mars.ariol.by/system/classes/Kohana/View.php(228): Extasy_View->render()
#14 /home/mars.ariol.by/modules/ariol/classes/Extasy/Controller.php(66): Kohana_View->__toString()
#15 /home/mars.ariol.by/system/classes/Kohana/Controller.php(87): Extasy_Controller->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Ordercoupon))
#18 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#20 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#21 {main} in /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php:603
2015-08-29 14:37:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/mars.ariol.by/modules/image/classes/Kohana/Image/GD.php:91
2015-08-29 14:37:26 --- DEBUG: #0 /home/mars.ariol.by/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/mars.ario...')
#1 /home/mars.ariol.by/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/mars.ario...')
#2 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home/mars.ario...')
#3 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_City))
#6 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_City))
#9 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#12 {main} in /home/mars.ariol.by/modules/image/classes/Kohana/Image/GD.php:91
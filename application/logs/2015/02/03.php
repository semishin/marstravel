<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-03 14:46:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The text property does not exist in the Model_Brief class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
2015-02-03 14:46:56 --- DEBUG: #0 /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('text')
#1 /home/sema/www/ariol/modules/ariol/classes/Extasy/Orm.php(231): Kohana_ORM->__get('text')
#2 /home/sema/www/ariol/modules/ariol/classes/CM/Form/Plugin/ORM.php(38): Extasy_Orm->__get('text')
#3 /home/sema/www/ariol/modules/ariol/classes/CM/Form/Abstract.php(34): CM_Form_Plugin_Orm->construct_form(Object(Form_Admin_Brief), Object(Model_Brief))
#4 /home/sema/www/ariol/application/classes/Model/Brief.php(23): CM_Form_Abstract->__construct(Object(Model_Brief))
#5 /home/sema/www/ariol/modules/ariol/classes/Controller/Crud.php(214): Model_Brief->form()
#6 /home/sema/www/ariol/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Brief))
#7 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Brief))
#10 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#13 {main} in /home/sema/www/ariol/modules/orm/classes/Kohana/ORM.php:603
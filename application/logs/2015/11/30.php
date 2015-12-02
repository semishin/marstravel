<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-30 16:35:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/vitaliy/www/marstravel.local/marstravel/application/classes/Model/Coupon/Firm.php:109
2015-11-30 16:35:58 --- DEBUG: #0 /home/vitaliy/www/marstravel.local/marstravel/application/classes/Model/Coupon/Firm.php(109): Kohana_ORM->find()
#1 /home/vitaliy/www/marstravel.local/marstravel/application/classes/Model/Coupon/Firm.php(101): Model_Coupon_Firm->generateCode()
#2 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/CM/Form/Abstract.php(268): Model_Coupon_Firm->save()
#3 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(218): CM_Form_Abstract->submit()
#5 /home/vitaliy/www/marstravel.local/marstravel/modules/ariol/classes/Controller/Crud.php(204): Controller_Crud->process_form(Object(Model_Coupon_Firm))
#6 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Coupon_Firm))
#9 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/vitaliy/www/marstravel.local/marstravel/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/vitaliy/www/marstravel.local/marstravel/index.php(140): Kohana_Request->execute()
#12 {main} in /home/vitaliy/www/marstravel.local/marstravel/application/classes/Model/Coupon/Firm.php:109
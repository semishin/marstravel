<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-23 17:59:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php:91
2015-04-23 17:59:33 --- DEBUG: #0 /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/sema/www/...')
#1 /home/sema/www/goodsign/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/sema/www/...')
#2 /home/sema/www/goodsign/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home/sema/www/...')
#3 /home/sema/www/goodsign/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home/sema/www/goodsign/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home/sema/www/goodsign/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Ourproduct))
#6 /home/sema/www/goodsign/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/sema/www/goodsign/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Ourproduct))
#9 /home/sema/www/goodsign/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/sema/www/goodsign/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/sema/www/goodsign/index.php(137): Kohana_Request->execute()
#12 {main} in /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php:91
2015-04-23 18:00:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php:91
2015-04-23 18:00:22 --- DEBUG: #0 /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home/sema/www/...')
#1 /home/sema/www/goodsign/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home/sema/www/...')
#2 /home/sema/www/goodsign/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home/sema/www/...')
#3 /home/sema/www/goodsign/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home/sema/www/goodsign/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home/sema/www/goodsign/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Ourproduct))
#6 /home/sema/www/goodsign/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/sema/www/goodsign/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Ourproduct))
#9 /home/sema/www/goodsign/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/sema/www/goodsign/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/sema/www/goodsign/index.php(137): Kohana_Request->execute()
#12 {main} in /home/sema/www/goodsign/modules/image/classes/Kohana/Image/GD.php:91
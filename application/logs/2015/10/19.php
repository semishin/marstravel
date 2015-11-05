<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-19 23:31:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-19 23:31:54 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Excursion))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-19 23:33:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-19 23:33:06 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(190): Controller_Crud->process_form(Object(Model_Excursion))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Excursion))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
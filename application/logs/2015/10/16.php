<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<<<<<<< HEAD
2015-10-16 10:26:19 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 10:26:19 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/tour/62/...', 'tour', '62', 300, 400)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(80): Lib_Image::crop('/files/tour/62/...', 'tour', '62', 300, 400)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 10:38:42 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 10:38:42 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/tour/62/...', 'tour', '62', 300, 400)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(80): Lib_Image::crop('/files/tour/62/...', 'tour', '62', 300, 400)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
=======
2015-10-16 11:40:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-16 11:40:16 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Partner))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Partner))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-16 11:48:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/Kohana/Image.php [ 107 ] in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
2015-10-16 11:48:38 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php(91): Kohana_Image->__construct('/home4/turistic...')
#1 /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image.php(54): Kohana_Image_GD->__construct('/home4/turistic...')
#2 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(175): Kohana_Image::factory('/home4/turistic...')
#3 /home4/turistic/public_html/skazka/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#4 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#5 /home4/turistic/public_html/skazka/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Partner))
#6 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#7 [internal function]: Kohana_Controller->execute()
#8 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Partner))
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#12 {main} in /home4/turistic/public_html/skazka/modules/image/classes/Kohana/Image/GD.php:91
>>>>>>> origin/master

2015-10-16 16:43:05 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:133
2015-10-16 16:43:05 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(133): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\slider\index.php(11): Lib_Image::crop('/files/slide/9/...', 'slide', '9', 905, 489)
#2 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#4 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(23): Kohana_View->render(NULL)
#5 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#6 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(3): Kohana_View->__toString()
#7 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#9 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#11 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#15 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#18 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:133
2015-10-16 16:43:06 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:43:06 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/banner/1...', 'banner', '1', 282, 360)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(14): Lib_Image::crop('/files/banner/1...', 'banner', '1', 282, 360)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:43:38 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:43:38 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/banner/2...', 'banner', '2', 1234, 90)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\layout\site\global.php(46): Lib_Image::crop('/files/banner/2...', 'banner', '2', 1234, 90)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(28): Kohana_View->render('layout/site/glo...')
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Review))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:44:10 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:44:10 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/banner/2...', 'banner', '2', 1234, 90)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\layout\site\global.php(46): Lib_Image::crop('/files/banner/2...', 'banner', '2', 1234, 90)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(28): Kohana_View->render('layout/site/glo...')
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Review))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:44:18 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:133
2015-10-16 16:44:18 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(133): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\slider\index.php(11): Lib_Image::crop('/files/slide/9/...', 'slide', '9', 905, 489)
#2 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#4 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(23): Kohana_View->render(NULL)
#5 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#6 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(3): Kohana_View->__toString()
#7 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#9 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#11 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#15 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#18 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:133
2015-10-16 16:44:19 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
2015-10-16 16:44:19 --- DEBUG: #0 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(96): Kohana_Image->save('C:\\OpenServer\\d...', 90)
#1 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php(111): Lib_Image::resize_width('/files/banner/1...', 'banner', '1', 282, 360)
#2 C:\OpenServer\domains\marstravel.local\marstravel\application\views\site\index\index.php(14): Lib_Image::crop('/files/banner/1...', 'banner', '1', 282, 360)
#3 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(61): include('C:\\OpenServer\\d...')
#4 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\OpenServer\\d...', Array)
#5 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\View.php(27): Kohana_View->render(NULL)
#6 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\View.php(228): Extasy_View->render()
#7 C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Extasy\Controller.php(66): Kohana_View->__toString()
#8 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Controller.php(87): Extasy_Controller->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Index))
#11 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\marstravel.local\marstravel\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\marstravel.local\marstravel\index.php(140): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\marstravel.local\marstravel\modules\ariol\classes\Lib\Image.php:96
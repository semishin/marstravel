<?php defined('SYSPATH') OR die('No direct script access.'); ?>

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
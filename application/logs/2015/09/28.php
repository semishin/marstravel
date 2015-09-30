<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-28 17:08:53 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма. Этот храм не только архитектурный памятник эпохи времен Древней Византии, это также святое место для христианских паломников, которые едут поклониться мощам Святого Николая Чудотворца.&nbsp;Святого Николая&nbsp;почитали при жизни как покровителя детей и бедных, также он стал прообразом Санта Клауса.&nbsp;Сегодня Вам представится возможность&nbsp;увидеть сохранившиеся фрески, &nbsp;алтарь дотронуться до саркофага Святого Николая. Также Вы посетите иконную лавку. Размещение в отеле 5*.\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-28 17:08:53 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
#1 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /home/mars.ariol.by/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#3 /home/mars.ariol.by/modules/ariol/classes/Extasy/Orm.php(294): Kohana_ORM->save(NULL)
#4 /home/mars.ariol.by/application/classes/Model/Tour.php(96): Extasy_Orm->save(NULL)
#5 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(268): Model_Tour->save()
#6 /home/mars.ariol.by/modules/ariol/classes/CM/Form/Abstract.php(97): CM_Form_Abstract->after_submit()
#7 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(216): CM_Form_Abstract->submit()
#8 /home/mars.ariol.by/modules/ariol/classes/Controller/Crud.php(202): Controller_Crud->process_form(Object(Model_Tour))
#9 /home/mars.ariol.by/system/classes/Kohana/Controller.php(84): Controller_Crud->action_edit()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/mars.ariol.by/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tour))
#12 /home/mars.ariol.by/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/mars.ariol.by/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/mars.ariol.by/index.php(140): Kohana_Request->execute()
#15 {main} in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
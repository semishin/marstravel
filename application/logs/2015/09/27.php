<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-27 20:02:53 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d5_content` = 'Окрестности реки Дальян - это настоящий райский уголок. Вы будите проплывать среди прекрасных гор и чудесных плакучих ив, которые нависают над речкой, мимо душистых трав и ярких цветов.&nbsp;Во время путешествия Вы сможете увидеть &nbsp;древнейшие ликийские гробницы, которые вырублены в высоченной скале, она нависает над рекой. Древние ликийцы верили, что нужно хоронить настолько выше, насколько это возможно, чтобы душа была поближе к богу.&nbsp;В конце &nbsp;путешествия &nbsp;Вы &nbsp;сможете &nbsp;попасть на удивительный пляж черепах - Изтузу, как раз сюда и приплывают эти гигантские черепахи, для того &nbsp;чтобы &nbsp;найти себе &nbsp;партнёра &nbsp;и &nbsp;отложить &nbsp;яйца. Этот превосходный пляж Турции представляет собой большую песчаную косу, которая продлевается на шесть километров, и разделяет дельту реки Дальян и красивое Эгейское море. . Посещение этого пляжа даст вам хорошую возможность поплавать в пресной воде реки Дальян и в солёной морской воде.Эта великолепная экскурсия на Дальян (Черепаший остров) - очень хорошая возможность получить массу новых впечатлений, расслабиться и отдохнуть. Возвращение в отель 5*.\n\n&nbsp;\n\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\n\n&nbsp;\n\n&nbsp;\n\n&nbsp;\n', `d6_content` = 'Сегодня целый день Вы можете отдыхать, &nbsp;любоваться восхитительной природой, &nbsp;наслаждаться теплым &nbsp;морем и ласковым солнцем. Даже простая прогулка по Фетхие станет ни с чем несравнимым удовольствием, до того хорош этот городок, приютившийся в закрытой бухте, с его яхтами и рыбацкими суденышками, с низкими горами, поросшими соснами и кедровником, с руинами средневековой рыцарской крепости. Прогуливаясь по побережью , можно наткнуться на и вовсе райские уголки&nbsp;&mdash; песчаные полоски пляжей, до которых ведут узкие тропинки &nbsp;в изумрудной зелени.&nbsp;Фетхие&nbsp;&nbsp;даст Вам возможность окунуться в сказку.&nbsp;Отдых &nbsp;в отеле &nbsp;5*.\n', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма. Этот храм не только архитектурный памятник эпохи времен Древней Византии, это также святое место для христианских паломников, которые едут поклониться мощам Святого Николая Чудотворца.&nbsp;Святого Николая&nbsp;почитали при жизни как покровителя детей и бедных, также он стал прообразом Санта Клауса.&nbsp;Сегодня Вам предоставится возможность&nbsp;увидеть сохранившиеся фрески, &nbsp;алтарь дотронуться до саркофага Святого Николая. Также Вы посетите иконную лавку. Размещение в отеле 5*.\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:02:53 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:06:44 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d5_content` = 'Окрестности реки Дальян - это настоящий райский уголок. Вы будите проплывать среди прекрасных гор и чудесных плакучих ив, которые нависают над речкой, мимо душистых трав и ярких цветов.&nbsp;Во время путешествия Вы сможете увидеть &nbsp;древнейшие ликийские гробницы, которые вырублены в высоченной скале, она нависает над рекой. Древние ликийцы верили, что нужно хоронить настолько выше, насколько это возможно, чтобы душа была поближе к богу.&nbsp;В конце &nbsp;путешествия &nbsp;Вы &nbsp;сможете &nbsp;попасть на удивительный пляж черепах - Изтузу, как раз сюда и приплывают эти гигантские черепахи, для того &nbsp;чтобы &nbsp;найти себе &nbsp;партнёра &nbsp;и &nbsp;отложить &nbsp;яйца. Этот превосходный пляж Турции представляет собой большую песчаную косу, которая продлевается на шесть километров, и разделяет дельту реки Дальян и красивое Эгейское море. . Посещение этого пляжа даст вам хорошую возможность поплавать в пресной воде реки Дальян и в солёной морской воде.Эта великолепная экскурсия на Дальян (Черепаший остров) - очень хорошая возможность получить массу новых впечатлений, расслабиться и отдохнуть. Возвращение в отель 5*.\n\n&nbsp;\n\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\n\n&nbsp;\n\n&nbsp;\n\n&nbsp;\n', `d6_content` = 'Сегодня целый день Вы можете отдыхать, &nbsp;любоваться восхитительной природой, &nbsp;наслаждаться теплым &nbsp;морем и ласковым солнцем. Даже простая прогулка по Фетхие станет ни с чем несравнимым удовольствием, до того хорош этот городок, приютившийся в закрытой бухте, с его яхтами и рыбацкими суденышками, с низкими горами, поросшими соснами и кедровником, с руинами средневековой рыцарской крепости. Прогуливаясь по побережью , можно наткнуться на и вовсе райские уголки&nbsp;&mdash; песчаные полоски пляжей, до которых ведут узкие тропинки &nbsp;в изумрудной зелени.&nbsp;Фетхие&nbsp;&nbsp;даст Вам возможность окунуться в сказку.&nbsp;Отдых &nbsp;в отеле &nbsp;5*.\n', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма.&nbsp;\n', `d8_content` = '&nbsp; Трансфер&nbsp;в аэропорт. Перелет в Москву\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:06:44 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:06:59 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d5_content` = 'Окрестности реки Дальян - это настоящий райский уголок. Вы будите проплывать среди прекрасных гор и чудесных плакучих ив, которые нависают над речкой, мимо душистых трав и ярких цветов.&nbsp;Во время путешествия Вы сможете увидеть &nbsp;древнейшие ликийские гробницы, которые вырублены в высоченной скале, она нависает над рекой. Древние ликийцы верили, что нужно хоронить настолько выше, насколько это возможно, чтобы душа была поближе к богу.&nbsp;В конце &nbsp;путешествия &nbsp;Вы &nbsp;сможете &nbsp;попасть на удивительный пляж черепах - Изтузу, как раз сюда и приплывают эти гигантские черепахи, для того &nbsp;чтобы &nbsp;найти себе &nbsp;партнёра &nbsp;и &nbsp;отложить &nbsp;яйца. Этот превосходный пляж Турции представляет собой большую песчаную косу, которая продлевается на шесть километров, и разделяет дельту реки Дальян и красивое Эгейское море. . Посещение этого пляжа даст вам хорошую возможность поплавать в пресной воде реки Дальян и в солёной морской воде.Эта великолепная экскурсия на Дальян (Черепаший остров) - очень хорошая возможность получить массу новых впечатлений, расслабиться и отдохнуть. Возвращение в отель 5*.\n\n&nbsp;\n\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\n\n&nbsp;\n\n&nbsp;\n\n&nbsp;\n', `d6_content` = 'Сегодня целый день Вы можете отдыхать, &nbsp;любоваться восхитительной природой, &nbsp;наслаждаться теплым &nbsp;морем и ласковым солнцем. Даже простая прогулка по Фетхие станет ни с чем несравнимым удовольствием, до того хорош этот городок, приютившийся в закрытой бухте, с его яхтами и рыбацкими суденышками, с низкими горами, поросшими соснами и кедровником, с руинами средневековой рыцарской крепости. Прогуливаясь по побережью , можно наткнуться на и вовсе райские уголки&nbsp;&mdash; песчаные полоски пляжей, до которых ведут узкие тропинки &nbsp;в изумрудной зелени.&nbsp;Фетхие&nbsp;&nbsp;даст Вам возможность окунуться в сказку.&nbsp;Отдых &nbsp;в отеле &nbsp;5*.\n', `d7_content` = 'Церковь Святого Николая&nbsp;\n', `d8_content` = '&nbsp; Трансфер&nbsp;в аэропорт. Перелет в Москву\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:06:59 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:07:17 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d5_content` = 'Окрестности реки Дальян - это настоящий райский уголок. Вы будите проплывать среди прекрасных гор и чудесных плакучих ив, которые нависают над речкой, мимо душистых трав и ярких цветов.&nbsp;Во время путешествия Вы сможете увидеть &nbsp;древнейшие ликийские гробницы, которые вырублены в высоченной скале, она нависает над рекой. Древние ликийцы верили, что нужно хоронить настолько выше, насколько это возможно, чтобы душа была поближе к богу.&nbsp;В конце &nbsp;путешествия &nbsp;Вы &nbsp;сможете &nbsp;попасть на удивительный пляж черепах - Изтузу, как раз сюда и приплывают эти гигантские черепахи, для того &nbsp;чтобы &nbsp;найти себе &nbsp;партнёра &nbsp;и &nbsp;отложить &nbsp;яйца. Этот превосходный пляж Турции представляет собой большую песчаную косу, которая продлевается на шесть километров, и разделяет дельту реки Дальян и красивое Эгейское море. . Посещение этого пляжа даст вам хорошую возможность поплавать в пресной воде реки Дальян и в солёной морской воде.Эта великолепная экскурсия на Дальян (Черепаший остров) - очень хорошая возможность получить массу новых впечатлений, расслабиться и отдохнуть. Возвращение в отель 5*.\n\n&nbsp;\n\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;\n\n&nbsp;\n\n&nbsp;\n\n&nbsp;\n', `d6_content` = 'Сегодня целый день Вы можете отдыхать, &nbsp;любоваться восхитительной природой, &nbsp;наслаждаться теплым &nbsp;морем и ласковым солнцем. Даже простая прогулка по Фетхие станет ни с чем несравнимым удовольствием, до того хорош этот городок, приютившийся в закрытой бухте, с его яхтами и рыбацкими суденышками, с низкими горами, поросшими соснами и кедровником, с руинами средневековой рыцарской крепости. Прогуливаясь по побережью , можно наткнуться на и вовсе райские уголки&nbsp;&mdash; песчаные полоски пляжей, до которых ведут узкие тропинки &nbsp;в изумрудной зелени.&nbsp;Фетхие&nbsp;&nbsp;даст Вам возможность окунуться в сказку.&nbsp;Отдых &nbsp;в отеле &nbsp;5*.\n', `d7_content` = '\n', `d8_content` = '&nbsp; Трансфер&nbsp;в аэропорт. Перелет в Москву\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:07:17 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:08:11 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма. Этот храм не только архитектурный памятник эпохи времен Древней Византии, это также святое место для христианских паломников, которые едут поклониться мощам Святого Николая Чудотворца.&nbsp;Святого Николая&nbsp;почитали при жизни как покровителя детей и бедных, также он стал прообразом Санта Клауса.&nbsp;Сегодня Вам представится возможность&nbsp;увидеть сохранившиеся фрески, &nbsp;алтарь дотронуться до саркофага Святого Николая. Также Вы посетите иконную лавку. Размещение в отеле 5*.\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:08:11 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:08:51 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d7_content` = '\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:08:51 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:11:38 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма. Этот храм не только архитектурный памятник эпохи времен Древней Византии, это также святое место для христианских паломников, которые едут поклониться мощам Святого Николая Чудотворца.&nbsp;Святого Николая&nbsp;почитали при жизни как покровителя детей и бедных, также он стал прообразом Санта Клауса.&nbsp;Сегодня Вам представится возможность&nbsp;увидеть сохранившиеся фрески, &nbsp;алтарь дотронуться до саркофага Святого Николая. Также Вы посетите иконную лавку. Размещение в отеле 5*.\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:11:38 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
2015-09-27 20:12:01 --- EMERGENCY: Database_Exception [ 1118 ]: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline. [ UPDATE `tours` SET `images` = '[\"\\/files\\/tour\\/69\\/c6497e204b7a3e9cf7d9768a74e1de6d.png\"]', `active` = '1', `d7_content` = 'Церковь Святого Николая находится в городке Демре, этот городок расположен в провинции Анталии, построенный недалеко от столицы древнего государства Ликии.&nbsp;Демре, он же Финике, он же Кале-Решадие, известен за своими пределами именно по причине расположенного в городе древнего храма. Этот храм не только архитектурный памятник эпохи времен Древней Византии, это также святое место для христианских паломников, которые едут поклониться мощам Святого Николая Чудотворца.&nbsp;Святого Николая&nbsp;почитали при жизни как покровителя детей и бедных, также он стал прообразом Санта Клауса.&nbsp;Сегодня Вам представится возможность&nbsp;увидеть сохранившиеся фрески, &nbsp;алтарь дотронуться до саркофага Святого Николая. Также Вы посетите иконную лавку. Размещение в отеле 5*.\n' WHERE `id` = '69' ] ~ MODPATH/ariol/classes/Kohana/Database/MySQLi.php [ 172 ] in /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php:251
2015-09-27 20:12:01 --- DEBUG: #0 /home/mars.ariol.by/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQLi->query(3, 'UPDATE `tours` ...', false, Array)
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
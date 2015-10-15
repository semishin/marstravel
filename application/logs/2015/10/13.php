<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-13 17:46:11 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [fsdfsdf] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ] in /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php:249
2015-10-13 17:46:11 --- DEBUG: #0 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('fsdfsdf')
#1 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /home4/turistic/public_html/skazka/modules/email/classes/Email.php(99): Swift_Mime_SimpleMessage->setTo('fsdfsdf')
#7 /home4/turistic/public_html/skazka/modules/ariol/classes/Helpers/Email.php(22): Email::send('fsdfsdf', 'excursion@turis...', '???????????????...', '<p>?????? ?????...', true)
#8 /home4/turistic/public_html/skazka/application/classes/Controller/Site/User.php(119): Helpers_Email::send('fsdfsdf', '???????????????...', '<p>?????? ?????...', true)
#9 /home4/turistic/public_html/skazka/system/classes/Kohana/Controller.php(84): Controller_Site_User->action_createCoupon()
#10 [internal function]: Kohana_Controller->execute()
#11 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_User))
#12 /home4/turistic/public_html/skazka/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home4/turistic/public_html/skazka/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home4/turistic/public_html/skazka/index.php(140): Kohana_Request->execute()
#15 {main} in /home4/turistic/public_html/skazka/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php:249
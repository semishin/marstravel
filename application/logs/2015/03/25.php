<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-25 13:55:15 --- EMERGENCY: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [] does not comply with RFC 2822, 3.6.2. ~ MODPATH/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php [ 319 ] in /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php:249
2015-03-25 13:55:15 --- DEBUG: #0 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('')
#1 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 /home/sema/www/ariol/modules/email/classes/Email.php(99): Swift_Mime_SimpleMessage->setTo('')
#7 /home/sema/www/ariol/application/classes/Controller/Site/Brief.php(46): Email::send('', Array, '\xD0\x9D\xD0\xBE\xD0\xB2\xBE\xD0\xB2\xBE\xD0\xB2\xBE\xD0\xB2\xBE\xD0\xB2\xBE\xD0\xB2'\xD0\x98\xD0\xBC\xD1\x8F\xBC\xD1\x8F\xBC\xD1\x8F\xBC\xD1\x8F\xBC\xD1\x8F\xBC\xD1\x8Ftrue)
#8 /home/sema/www/ariol/system/classes/Kohana/Controller.php(84): Controller_Site_Brief->action_add()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/sema/www/ariol/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Site_Brief))
#11 /home/sema/www/ariol/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/sema/www/ariol/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/sema/www/ariol/index.php(137): Kohana_Request->execute()
#14 {main} in /home/sema/www/ariol/modules/email/vendor/swift/classes/Swift/Mime/Headers/MailboxHeader.php:249
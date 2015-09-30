<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array(
	'reload_time' => 60,
	'form' => array(
		'priorities' => array(
			'Общие' => 100,
            'Соцсети' => 200,
//            'Почта' => 300,
            'Сертификаты' => 400,
		),
		'fieldgroups' => array(
//            'Почта' => array(
//                'mailer.hostname' => array(
//                    'label' => 'Хост',
//                    'field' => new CM_Field_String(),
//                ),
//                'mailer.admin' => array(
//                    'label' => 'Почта администратора',
//                    'field' => new CM_Field_String(),
//                ),
//                'mailer.from' => array(
//                    'label' => 'Отправитель',
//                    'field' => new CM_Field_String(),
//                ),
//                'mailer.username' => array(
//                    'label' => 'Логин',
//                    'field' => new CM_Field_String(),
//                ),
//                'mailer.password' => array(
//                    'label' => 'Пароль',
//                    'field' => new CM_Field_Password(),
//                ),
//                'mailer.port' => array(
//                    'label' => 'Порт',
//                    'field' => new CM_Field_Int(),
//                ),
//                'mailer.encryption' => array(
//                    'label' => 'Шифрование',
//                    'field' => new CM_Field_String(),
//                )
//            ),
			'Общие' => array(
                'properties.address' => array(
                    'label' => 'Адрес',
                    'field' => new CM_Field_Text(),
                ),
                'properties.phone' => array(
                    'label' => 'Номер телефона',
                    'field' => new CM_Field_String(),
                ),
//                'properties.phone2' => array(
//                    'label' => 'Номер телефона 2',
//                    'field' => new CM_Field_String(),
//                ),
                'properties.email' => array(
                    'label' => 'Email',
                    'field' => new CM_Field_String(),
                )
			),
            'Сертификаты' => array(
                'certificate.content' => array(
                    'label' => 'Контент',
                    'field' => new CM_Field_HTML(),
                ),
                'certificate.rule' => array(
                    'label' => 'Правила использования сертификата',
                    'field' => new CM_Field_HTML(),
                ),
                'certificate.content_plus' => array(
                    'label' => 'Контент(+)',
                    'field' => new CM_Field_HTML(),
                ),
                'certificate.rule_plus' => array(
                    'label' => 'Правила использования сертификата(+)',
                    'field' => new CM_Field_HTML(),
                )
			),
            'Соцсети' => array(
                'social.facebook' => array(
                    'label' => 'Facebook',
                    'field' => new CM_Field_String(),
                ),
                'social.vk' => array(
                    'label' => 'VK',
                    'field' => new CM_Field_String(),
                ),
                'social.instagram' => array(
                    'label' => 'Instagram',
                    'field' => new CM_Field_String(),
                ),
//                'social.skype' => array(
//                    'label' => 'Skype',
//                    'field' => new CM_Field_String(),
//                ),
//                'social.twitter' => array(
//                    'label' => 'Twitter',
//                    'field' => new CM_Field_String(),
//                )
            )

		)
	)
);
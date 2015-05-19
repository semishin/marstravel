<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array
(
	Application::NAME => array
	(
        '<i class="fa fa-picture-o"></i>|Слайды' => 'admin-slide',
        '<i class="fa fa-picture-o"></i>|Баннеры' => 'admin-banner',
//        '<i class="fa fa-bell-o"></i>|Коментарии' => 'admin-comment',
//        '<i class="fa fa-bell-o"></i>|Заявки от клиентов' => 'admin-brief',
//        '<i class="fa fa-bell"></i>|Обратная связь' => 'admin-feedb',
        '<i class="fa fa-edit"></i>|Партнеры' => 'admin-partner',
        '<i class="fa fa-edit"></i>|Города' => 'admin-city',
        '<i class="fa fa-edit"></i>|Туры' => 'admin-tour',
		'<i class="fa fa-key"></i>|Войти' => 'admin-auth:login',
		'<i class="fa fa-key"></i>|Сбросить пароль' => 'admin-auth:reset_password_step_1',
		'<i class="fa fa-gears"></i>|Служебное' => array(
			'<i class="fa fa-gear"></i>|Настройки' => 'admin-config',
			'<i class="fa fa-user"></i>|Пользователи' => 'admin-user',
		),
	)
);
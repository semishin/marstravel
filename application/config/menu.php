<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array
(
	Application::NAME => array
	(
        '<i class="fa fa-picture-o"></i>|Слайды' => 'admin-slide',
        '<i class="fa fa-paint-brush"></i>|Баннеры' => 'admin-banner',
//        '<i class="fa fa-bell-o"></i>|Коментарии' => 'admin-comment',
//        '<i class="fa fa-bell-o"></i>|Заявки от клиентов' => 'admin-brief',
        '<i class="fa fa-bell"></i>|Вопросы с сайта' => 'admin-question',
        '<i class="fa fa-money"></i>|Партнеры' => 'admin-partner',
        '<i class="fa fa-hotel"></i>|Отели' => 'admin-hotel',
        '<i class="fa fa-camera"></i>|Достопримеч.' => array(
            '<i class="fa fa-camera"></i>|Категории дост.' => 'admin-sight_category',
            '<i class="fa fa-camera"></i>|Достопримеч.' => 'admin-sight',
        ),
        '<i class="fa fa-flag-o"></i>|Экскурсии' => array(
            '<i class="fa fa-flag"></i>|Категории экск.' => 'admin-excursion_category',
            '<i class="fa fa-flag-o"></i>|Экскурсии' => 'admin-excursion',
        ),
        '<i class="fa fa-location-arrow"></i>|Города' => 'admin-city',
        '<i class="fa fa-map-marker"></i>|Туры' => 'admin-tour',
        '<i class="fa fa-bookmark"></i>|Заказы' => 'admin-order',
        '<i class="fa fa-bookmark-o"></i>|Заказы по купонам' => 'admin-ordercoupon',
        '<i class="fa fa-barcode"></i>|Купоны' => array(
            '<i class="fa fa-barcode"></i>|Фирмы' => 'admin-coupon_firm',
            '<i class="fa fa-barcode"></i>|Купоны' => 'admin-coupon',
        ),
		'<i class="fa fa-key"></i>|Войти' => 'admin-auth:login',
		'<i class="fa fa-key"></i>|Сбросить пароль' => 'admin-auth:reset_password_step_1',
		'<i class="fa fa-gears"></i>|Служебное' => array(
			'<i class="fa fa-gear"></i>|Настройки' => 'admin-config',
			'<i class="fa fa-user"></i>|Пользователи' => 'admin-user',
		),
        '<i class="fa fa-picture-o"></i>|Цены на рейсы' => 'admin-priceflight',

	)
);
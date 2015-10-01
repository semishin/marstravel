<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 */

return array(
    'admin.slide.index' => array(
        'title' => 'Список слайдов',
        'route' => 'admin-slide'
    ),
    'admin.slide.edit' => array(
        'title' => 'Редактирование слайда',
        'route' => 'admin-slide:edit',
        'parent' => 'admin.slide.index'
    ),
    'admin.slide.create' => array(
        'title' => 'Добавление слайда',
        'route' => 'admin-slide:create',
        'parent' => 'admin.slide.index'
    ),

    'admin.banner.index' => array(
        'title' => 'Список баннеров',
        'route' => 'admin-banner'
    ),
    'admin.banner.edit' => array(
        'title' => 'Редактирование баннеров',
        'route' => 'admin-banner:edit',
        'parent' => 'admin.banner.index'
    ),
    'admin.banner.create' => array(
        'title' => 'Добавление баннеров',
        'route' => 'admin-banner:create',
        'parent' => 'admin.banner.index'
    ),

    'admin.tour.index' => array(
        'title' => 'Список туров',
        'route' => 'admin-tour'
    ),
    'admin.tour.edit' => array(
        'title' => 'Редактирование туров',
        'route' => 'admin-tour:edit',
        'parent' => 'admin.tour.index'
    ),
    'admin.tour.create' => array(
        'title' => 'Добавление тура',
        'route' => 'admin-tour:create',
        'parent' => 'admin.tour.index'
    ),

    'admin.coupon.index' => array(
        'title' => 'Список сертификатов',
        'route' => 'admin-coupon'
    ),
    'admin.coupon.edit' => array(
        'title' => 'Редактирование сертификатов',
        'route' => 'admin-coupon:edit',
        'parent' => 'admin.coupon.index'
    ),
    'admin.coupon.create' => array(
        'title' => 'Добавление сертификатов',
        'route' => 'admin-coupon:create',
        'parent' => 'admin.coupon.index'
    ),

    'admin.coupon_firm.index' => array(
        'title' => 'Список фирм',
        'route' => 'admin-coupon_firm'
    ),
    'admin.coupon_firm.edit' => array(
        'title' => 'Редактирование фирм',
        'route' => 'admin-coupon_firm:edit',
        'parent' => 'admin.coupon_firm.index'
    ),
    'admin.coupon_firm.create' => array(
        'title' => 'Добавление фирм',
        'route' => 'admin-coupon_firm:create',
        'parent' => 'admin.coupon_firm.index'
    ),

    'admin.hotel.index' => array(
        'title' => 'Список отелей',
        'route' => 'admin-hotel'
    ),
    'admin.hotel.edit' => array(
        'title' => 'Редактирование отелей',
        'route' => 'admin-hotel:edit',
        'parent' => 'admin.hotel.index'
    ),
    'admin.hotel.create' => array(
        'title' => 'Добавление отелей',
        'route' => 'admin-hotel:create',
        'parent' => 'admin.hotel.index'
    ),

    'admin.sight.index' => array(
        'title' => 'Список достопримечательностей',
        'route' => 'admin-sight'
    ),
    'admin.sight.edit' => array(
        'title' => 'Редактирование достопримечательностей',
        'route' => 'admin-sight:edit',
        'parent' => 'admin.sight.index'
    ),
    'admin.sight.create' => array(
        'title' => 'Добавление достопримечательностей',
        'route' => 'admin-sight:create',
        'parent' => 'admin.sight.index'
    ),

    'admin.sight_category.index' => array(
        'title' => 'Список категорий достопримечательностей',
        'route' => 'admin-sight_category'
    ),
    'admin.sight_category.edit' => array(
        'title' => 'Редактирование категории достопримечательностей',
        'route' => 'admin-sight_category:edit',
        'parent' => 'admin.sight_category.index'
    ),
    'admin.sight_category.create' => array(
        'title' => 'Добавление категории достопримечательностей',
        'route' => 'admin-sight_category:create',
        'parent' => 'admin.sight_category.index'
    ),

    'admin.excursion.index' => array(
        'title' => 'Список экскурсий',
        'route' => 'admin-excursion'
    ),
    'admin.excursion.edit' => array(
        'title' => 'Редактирование экскурсий',
        'route' => 'admin-excursion:edit',
        'parent' => 'admin.excursion.index'
    ),
    'admin.excursion.create' => array(
        'title' => 'Добавление экскурсий',
        'route' => 'admin-excursion:create',
        'parent' => 'admin.excursion.index'
    ),

    'admin.excursion_category.index' => array(
        'title' => 'Список категорий экскурсий',
        'route' => 'admin-excursion_category'
    ),
    'admin.excursion_category.edit' => array(
        'title' => 'Редактирование категории экскурсии',
        'route' => 'admin-excursion_category:edit',
        'parent' => 'admin.excursion_category.index'
    ),
    'admin.excursion_category.create' => array(
        'title' => 'Добавление категории экскурсии',
        'route' => 'admin-excursion_category:create',
        'parent' => 'admin.excursion_category.index'
    ),

    'admin.partner.index' => array(
        'title' => 'Список партнеров',
        'route' => 'admin-partner'
    ),
    'admin.partner.edit' => array(
        'title' => 'Редактирование партнеров',
        'route' => 'admin-partner:edit',
        'parent' => 'admin.partner.index'
    ),
    'admin.partner.create' => array(
        'title' => 'Добавление партнеров',
        'route' => 'admin-partner:create',
        'parent' => 'admin.partner.index'
    ),

    'admin.city.index' => array(
        'title' => 'Список городов',
        'route' => 'admin-city'
    ),
    'admin.city.edit' => array(
        'title' => 'Редактирование городов',
        'route' => 'admin-city:edit',
        'parent' => 'admin.city.index'
    ),
    'admin.city.create' => array(
        'title' => 'Добавление городов',
        'route' => 'admin-city:create',
        'parent' => 'admin.city.index'
    ),

    'admin.question.index' => array(
        'title' => 'Список вопросов',
        'route' => 'admin-question'
    ),
    'admin.question.edit' => array(
        'title' => 'Редактирование вопросов',
        'route' => 'admin-question:edit',
        'parent' => 'admin.question.index'
    ),
    'admin.question.create' => array(
        'title' => 'Добавление вопросов',
        'route' => 'admin-question:create',
        'parent' => 'admin.question.index'
    ),

    'admin.order.index' => array(
        'title' => 'Список заказов',
        'route' => 'admin-order'
    ),
    'admin.order.edit' => array(
        'title' => 'Редактирование заказов',
        'route' => 'admin-order:edit',
        'parent' => 'admin.order.index'
    ),
    'admin.order.create' => array(
        'title' => 'Добавление заказов',
        'route' => 'admin-order:create',
        'parent' => 'admin.order.index'
    ),

    'admin.ordercoupon.index' => array(
        'title' => 'Список заказов по сертификатам',
        'route' => 'admin-ordercoupon'
    ),
    'admin.ordercoupon.edit' => array(
        'title' => 'Редактирование заказов по сертификатам',
        'route' => 'admin-ordercoupon:edit',
        'parent' => 'admin.ordercoupon.index'
    ),
    'admin.ordercoupon.create' => array(
        'title' => 'Добавление заказов по сертификатам',
        'route' => 'admin-ordercoupon:create',
        'parent' => 'admin.ordercoupon.index'
    ),




    'admin.brief.index' => array(
        'title' => 'Список заявок',
        'route' => 'admin-brief'
    ),
    'admin.brief.edit' => array(
        'title' => 'Редактирование заявок',
        'route' => 'admin-brief:edit',
        'parent' => 'admin.brief.index'
    ),
    'admin.brief.create' => array(
        'title' => 'Добавление заявки',
        'route' => 'admin-brief:create',
        'parent' => 'admin.brief.index'
    ),




    'admin.comment.index' => array(
        'title' => 'Список отзывов',
        'route' => 'admin-comment'
    ),
    'admin.comment.edit' => array(
        'title' => 'Редактирование отзыва',
        'route' => 'admin-comment:edit',
        'parent' => 'admin.comment.index'
    ),
    'admin.comment.create' => array(
        'title' => 'Добавление отзыва',
        'route' => 'admin-comment:create',
        'parent' => 'admin.comment.index'
    ),
);
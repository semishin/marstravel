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

    'admin.feedb.index' => array(
        'title' => 'Список обратной связи',
        'route' => 'admin-feedb'
    ),
    'admin.feedb.edit' => array(
        'title' => 'Редактирование сообщений',
        'route' => 'admin-feedb:edit',
        'parent' => 'admin.feedb.index'
    ),
    'admin.feedb.create' => array(
        'title' => 'Добавление сообщений',
        'route' => 'admin-feedb:create',
        'parent' => 'admin.feedb.index'
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
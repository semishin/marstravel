<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

Route::set('site-auth', 'auth')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'auth',
        'action'     => 'index',
    ));

Route::set('site-auth-logout', 'auth/logout')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'auth',
        'action'     => 'logout',
    ));


Route::set('site-user', 'user')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'user',
        'action'     => 'index',
    ));

Route::set('site-user-create-coupon', 'user/create_coupon/<id>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'user',
        'action'     => 'createCoupon',
    ));

Route::set('site-auth-save-profile', 'user/save')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'user',
        'action'     => 'save',
    ));

Route::set('site-user-profile', 'user/profile')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'user',
        'action'     => 'profile',
    ));

Route::set('site-user-all_coupons_tour', 'user/all_coupons/(<url>(/<page>))', array('url' => '.*', 'page' => '\d+'))
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'user',
        'action'     => 'all_coupons',
    ));

Route::set('site-index', '')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'index',
		'action' => 'index',
		'menu' => true,
		'name' => 'Главная'
	));

Route::set('site-contacts', 'contacts')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'contacts',
    ));

Route::set('site-about_us', 'about-us')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'about_us',
    ));

Route::set('site-our_partners', 'our-partners')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'our_partners',
    ));

Route::set('site-weather', 'weather')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'weather',
    ));

Route::set('site-about_turkey', 'about-turkey')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'about_turkey',
    ));

Route::set('site-touroperator', 'touroperator')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'touroperator',
    ));

Route::set('site-advertising', 'advertising')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'advertising',
    ));

Route::set('site-hotels', 'hotels')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'hotel',
        'action'     => 'index',
    ));

Route::set('site-hotel-ajax', 'hotel/ajax')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'hotel',
        'action'     => 'ajax',
    ));

Route::set('site-hotel-more', 'hotel/more')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'hotel',
        'action'     => 'more',
    ));

Route::set('site-hotel', 'hotel/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'hotel',
        'action'     => 'item',
    ));

Route::set('site-sights', 'sights')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'sight',
        'action'     => 'index',
    ));

Route::set('site-sight-ajax', 'sight/ajax')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'sight',
        'action'     => 'ajax',
    ));

Route::set('site-sight-more', 'sight/more')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'sight',
        'action'     => 'more',
    ));

Route::set('site-sight-item', 'sight/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'sight',
        'action'     => 'item',
    ));

Route::set('site-excursions', 'excursions')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'excursion',
        'action'     => 'index',
    ));
Route::set('site-auth-login', 'auth/login')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'auth',
        'action'     => 'login',
    ));

Route::set('site-excursion-ajax', 'excursion/ajax')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'excursion',
        'action'     => 'ajax',
    ));

Route::set('site-excursion-more', 'excursion/more')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'excursion',
        'action'     => 'more',
    ));

Route::set('site-excursion', 'excursion/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'excursion',
        'action'     => 'item',
    ));

Route::set('site-tour-item', 'tour/<url>')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'tour',
        'action'     => 'item',
    ));

Route::set('site-tour-info', 'tour/get/info')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'tour',
        'action'     => 'info',
    ));

Route::set('site-question', 'question/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'question',
        'action'     => 'add',
    ));

Route::set('site-order', 'order/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'order',
        'action'     => 'add',
    ));

Route::set('site-ordercoupon-add', 'ordercoupon/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ordercoupon',
        'action'     => 'add',
    ));

Route::set('site-ordercoupon-code', 'ordercoupon/code')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'ordercoupon',
        'action'     => 'code',
    ));



Route::set('site-search', 'search(/<page>)', array('page' => '\d+'))
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'search',
        'action' => 'index',
    ));

Route::set('site-page', '<url>', array('url' => '.*'))
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'page',
        'action'     => 'index',
    ));

Route::set('site-comment', 'comment')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'comment',
        'action'     => 'index',
    ));

Route::set('site-comments', 'comments/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'comment',
        'action'     => 'add',
    ));


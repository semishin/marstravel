<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

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
//
//Route::set('site-hotels', 'hotels')
//    ->defaults(array(
//        'directory' => 'site',
//        'controller' => 'page',
//        'action'     => 'hotels',
//    ));

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

Route::set('site-sight', 'sight/<url>')
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




Route::set('site-brif', 'brif')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'index',
        'action' => 'brif'
    ));

Route::set('site-email_index', 'email_index')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'index',
        'action' => 'email_index'
    ));

Route::set('site-brief', 'brief/add')
    ->defaults(array(
        'directory' => 'site',
        'controller' => 'brief',
        'action'     => 'add',
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
/*


Route::set('site-callback', 'request/callback')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'callback',
	));
	
Route::set('site-contacts', 'about-us/contacts')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'index',
	));
	
Route::set('site-thanks', 'thanks')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'index',
		'action'     => 'thanks',
	));
	
Route::set('site-contacts-callback-ajax', 'feedback/callback/ajax')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'callbackajax',
	));
	
Route::set('site-contacts-ajax', 'feedback/ajax')
	->defaults(array(
		'directory' => 'site',
		'controller' => 'contact',
		'action'     => 'ajax',
	));


*/
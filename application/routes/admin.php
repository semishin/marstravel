<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

$adminPrefix = Kohana::$config->load('extasy')->admin_path_prefix;

Route::set('admin-slide', $adminPrefix . 'slide(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'slide',
        'action' => 'index'
    ));

Route::set('admin-tour', $adminPrefix . 'tour(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'tour',
        'action' => 'index'
    ));

Route::set('admin-partner', $adminPrefix . 'partner(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'partner',
        'action' => 'index'
    ));

Route::set('admin-feedb', $adminPrefix . 'feedb(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'feedb',
        'action' => 'index'
    ));



Route::set('admin-brief', $adminPrefix . 'brief(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'brief',
        'action' => 'index'
    ));





Route::set('admin-comment', $adminPrefix . 'comment(/<action>(/<id>))')
    ->defaults(array(
        'directory' => 'admin',
        'controller' => 'comment',
        'action' => 'index'
    ));

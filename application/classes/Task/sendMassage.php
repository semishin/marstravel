<?php defined('SYSPATH') or die('No direct script access.');

class Task_ParseComments extends Minion_Task
{
    protected function _execute(array $params)
    {
        $getDate =  ORM::factory('Coupon')->where('call_back_date', '=', date('Y-m-d'))->find_all();
        $countDate =  ORM::factory('Coupon')->where('call_back_date', '=', date('Y-m-d'))->count_all();
        if ($countDate > 0) {
            foreach ($getDate as $item) {
                $callBackMessage = View::factory('site/message/callBackMessage', array(
                    'name' => $item->name,
                    'code' => $item->code,
                    'url' => $_SERVER['SERVER_NAME'].'/coupons/'.$item->code.'-'.$item->tour_id
                ))->render();
                Helpers_Email::send(Kohana::$config->load('mailer.admin'), $_SERVER['SERVER_NAME'], $callBackMessage, true);
            }
        }
    }
}
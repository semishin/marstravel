<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Order extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');
        if ($this->request->is_ajax()) {
            $fio = $this->request->post('fio');
            $dob = $this->request->post('dob');
            $passport = $this->request->post('passport');
            $validity = $this->request->post('validity');
            $issuedby = $this->request->post('issuedby');
            $email = $this->request->post('email');
            $phone = $this->request->post('phone');
            $payment = $this->request->post('payment');
            $agreement = $this->request->post('agreement');
            $surcharge = $this->request->post('surcharge');

            $order = ORM::factory('Order');
            $order->fio = $fio;
            $order->dob = $dob;
            $order->passport = $passport;
            $order->validity = $validity;
            $order->issuedby = $issuedby;
            $order->email = $email;
            $order->phone = $phone;
            $order->payment = $payment;
            $order->agreement = $agreement;
            $order->surcharge = $surcharge;
            $order->save();

//            try {
//                Email::send(Kohana::$config->load('properties.email'), array(Kohana::$config->load('properties.email'), 'Marstravel'),
//                    'Новая вопрос от клиентов',
//                    'Имя - ' . $name . '<br/>' .
//                    'Email - ' . $email . '<br/>' .
//                    'Телефон - ' . $phone . '<br/>' .
//                    'Текст вопроса - ' . $question . '<br/>',
//                    /*html*/
//                    true
//                );
//            } catch (Exception $e) {}
//
            exit(json_encode(array()));
        }
        $this->forward_404();
    }
}
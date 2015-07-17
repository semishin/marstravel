<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Order extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');


        if ($this->request->is_ajax()) {
            $tour_id = $this->request->post('tour_id');
            $date = $this->request->post('date');
            $quantity_adults = $this->request->post('quantity_adults');
            $quantity_children = $this->request->post('quantity_children');
            $cost = $this->request->post('cost');
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
            $number_order = mb_substr(md5(time()), 0, 8);

            $order = ORM::factory('Order');
            $order->tour_id = $tour_id;
            $order->date = $date;
            $order->quantity_adults = $quantity_adults;
            $order->quantity_children = $quantity_children;
            $order->cost = $cost;
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
            $order->number_order = $number_order;
            $order->save();

            try {
                Email::send(Kohana::$config->load('properties.email'), array(Kohana::$config->load('properties.email'), 'Marstravel'),
                    'Новый заказ',
                    'ФИО - ' . $fio . '<br/>' .
                    'Email - ' . $email . '<br/>' .
                    'Телефон - ' . $phone . '<br/>' .
                    'Номер заказа - ' . $number_order . '<br/>',
                    /*html*/
                    true
                );
            } catch (Exception $e) {}

            exit(json_encode(array('number_order' => $number_order)));
        }
        $this->forward_404();
    }
}
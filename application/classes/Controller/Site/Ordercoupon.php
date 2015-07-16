<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ordercoupon extends Controller_Site
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
            $coupon_id = $this->request->post('coupon_id');
            $agreement = $this->request->post('agreement');
            $surcharge = $this->request->post('surcharge');
            $number_order = mb_substr(md5(time()), 0, 8);

            $ordercoupon = ORM::factory('Ordercoupon');
            $ordercoupon->tour_id = $tour_id;
            $ordercoupon->date = $date;
            $ordercoupon->quantity_adults = $quantity_adults;
            $ordercoupon->quantity_children = $quantity_children;
            $ordercoupon->cost = $cost;
            $ordercoupon->fio = $fio;
            $ordercoupon->dob = $dob;
            $ordercoupon->passport = $passport;
            $ordercoupon->validity = $validity;
            $ordercoupon->issuedby = $issuedby;
            $ordercoupon->email = $email;
            $ordercoupon->phone = $phone;
            $ordercoupon->coupon_id = $coupon_id;
            $ordercoupon->agreement = $agreement;
            $ordercoupon->surcharge = $surcharge;
            $ordercoupon->number_order = $number_order;
            $ordercoupon->save();

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

            exit(json_encode(array('number_order' => $number_order)));
        }
        $this->forward_404();
    }

    public function action_code()
    {
        $this->set_metatags_and_content('', 'page');
        $code = $this->request->post('code');
        $tour_id = $this->request->post('tour_id');

        $coupon_check = ORM::factory('Coupon')
            ->where('active','=',1)
            ->where('tour_id','=', $tour_id)
            ->where('code','=', $code)
            ->limit(1)
            ->find();


        if ($coupon_check->id) {
            $coupon_id = $coupon_check->id;
            $coupon_check->active = 0;
            $coupon_check->save();
        } else {
            $coupon_id = 0;
        }


        if ($this->request->is_ajax()) {

            exit(json_encode(array('coupon_id' => $coupon_id)));
        }
        $this->forward_404();
    }
}
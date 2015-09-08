<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Order extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');

        if ($this->request->is_ajax()) {
            $coupon_id = $this->request->post('coupon_id');
            if(!$coupon_id) {
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

                $data_tour =  ORM::factory('Tour')->where('id', '=', $tour_id)->find();
                $cost_flight = ORM::factory('PriceFlight')->where('end_date', '>=', $date)->where('start_date', '<=', $date)->find();

                if($quantity_adults + $quantity_children == 1){
                    if(!$data_tour->price_single){
                        $price_single = 0;
                    }else{
                        $price_single = $data_tour->price_single;
                    }
                }

                $order = ORM::factory('Order');
                $order->tour_id = $tour_id;
                $order->date = $date;
                $order->quantity_adults = $quantity_adults;
                $order->quantity_children = $quantity_children;
                $order->price_adults = $data_tour->price *  $quantity_adults;
                $order->price_child = $data_tour->price_child * $quantity_children;
                $order->cost = $cost;
                $order->fio = $fio;
                $order->dob = $dob;
                $order->total_price = ($data_tour->price *  $quantity_adults) + ($data_tour->price_child * $quantity_children) + $cost_flight->price + $price_single;
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
            } else {
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
                    exit(json_encode(array('number_order' => 'false')));
                }
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

                try {
                    Email::send(Kohana::$config->load('properties.email'), array(Kohana::$config->load('properties.email'), 'Marstravel'),
                        'Новый заказ по купонам',
                        'ФИО - ' . $fio . '<br/>' .
                        'Email - ' . $email . '<br/>' .
                        'Телефон - ' . $phone . '<br/>' .
                        'Номер заказа - ' . $number_order . '<br/>',
                        /*html*/
                        true
                    );
                } catch (Exception $e) {}
            }

            exit(json_encode(array('number_order' => $number_order)));
        }
        $this->forward_404();
    }
}
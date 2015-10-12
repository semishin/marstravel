<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Order extends Controller_Site
{
    public function action_add()
    {
        if ($this->request->is_ajax()) {
            $this->set_metatags_and_content('', 'page');
            $pre_data = Session::instance()->get('pre_data');
            $pre_data = json_encode($pre_data);
            $coupon_id = $this->request->post('coupon_id');
            if(!$coupon_id) {
                $tour_id = $this->request->post('tour_id');
                $date = $this->request->post('date');
                $quantity_adults = $this->request->post('quantity_adults');
                $quantity_children = $this->request->post('quantity_children');
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


                if($quantity_adults + $quantity_children == 1){
                    if(!$data_tour->price_single){
                        $price_single = 0;
                    }else{
                        $price_single = $data_tour->price_single;
                    }
                }

                $cost_flight = ORM::factory('PriceFlight')
                    ->where('tour_id', '=', $tour_id)
                    ->where('free_places', '>=', $quantity_adults + $quantity_children)
                    ->where('end_date', '>=', $date)
                    ->where('start_date', '<=', $date)
                    ->find();

                $total_price = ($data_tour->price *  $quantity_adults) + ($data_tour->price_child * $quantity_children) + ($cost_flight->price * ($quantity_adults + $quantity_children)) + $price_single;

                $order = ORM::factory('Order');
                $order->tour_id = $tour_id;
                $order->date = $date;
                $order->quantity_adults = $quantity_adults;
                $order->quantity_children = $quantity_children;
                $order->price_adults = $data_tour->price *  $quantity_adults;
                $order->price_child = $data_tour->price_child * $quantity_children;
                $order->price_flight = $cost_flight->price;
                $order->fio = $fio;
                $order->dob = $dob;
                $order->data_people = $pre_data;
                $order->total_price = $total_price;
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
                $user_message = View::factory('site/message/order_usermessage', array(
                    'fio' => $fio,
                    'quantity_adults' => $quantity_adults,
                    'quantity_children' => $quantity_children,
                    'total_price' => $total_price,
                    'email' => $email,
                    'phone' => $phone,
                    'tour' => $data_tour,
                    'payment' => $payment,
                ))->render();

                $admin_message = View::factory('site/message/order_adminmessage', array(
                    'fio' => $fio,
                    'quantity_adults' => $quantity_adults,
                    'quantity_children' => $quantity_children,
                    'total_price' => $total_price,
                    'email' => $email,
                    'phone' => $phone,
                    'tour' => $data_tour,
                    'payment' => $payment,
                ))->render();
                Helpers_Email::send(Kohana::$config->load('mailer.admin'), 'Новая заявка '.$fio.' '.$phone, $admin_message, true);
                Helpers_Email::send($email, 'Заявка '.$fio.' '.$phone, $user_message, true);
            } else {
                $code = $this->request->post('code');
                $tour_id = $this->request->post('tour_id');
                $coupon_check = ORM::factory('Coupon')
                    ->where('active','=',0)
                    ->where('tour_id','=', $tour_id)
                    ->where('code','=', $code)
                    ->limit(1)
                    ->find();
                if ($coupon_check->id) {
                    $coupon_id = $coupon_check->id;
                    $coupon_check->active_firm = 1;
                    $coupon_check->active = 1;
                    $coupon_check->save();
                } else {
                    exit(json_encode(array('number_order' => 'false')));
                }
                $date = $this->request->post('date');
                $quantity_adults = $this->request->post('quantity_adults');
                $quantity_children = $this->request->post('quantity_children');
                $fio = $this->request->post('fio');
                $dob = $this->request->post('dob');
                $passport = $this->request->post('passport');
                $validity = $this->request->post('validity');
                $issuedby = $this->request->post('issuedby');
                $email = $this->request->post('email');
                $phone = $this->request->post('phone');
                $agreement = $this->request->post('agreement');
                $surcharge = $this->request->post('surcharge');
                if($quantity_adults + $quantity_children == 1) {
                    $surcharge = 1;
                }
                $number_order = mb_substr(md5(time()), 0, 8);
                $data_tour =  ORM::factory('Tour')->where('id', '=', $tour_id)->find();
                $cost_flight = ORM::factory('PriceFlight')
                    ->where('tour_id', '=', $tour_id)
                    ->where('free_places', '>=', $quantity_adults + $quantity_children)
                    ->where('end_date', '>=', $date)
                    ->where('start_date', '<=', $date)
                    ->find();
                $ordercoupon = ORM::factory('Ordercoupon');
                $ordercoupon->tour_id = $tour_id;
                $ordercoupon->date = $date;
                $ordercoupon->quantity_adults = $quantity_adults;
                $ordercoupon->quantity_children = $quantity_children;
                $ordercoupon->price_flight = $cost_flight->price;
                $ordercoupon->fio = $fio;
                $ordercoupon->dob = $dob;
                $ordercoupon->data_people = $pre_data;
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

                $user_message = View::factory('site/message/order_usermessage', array(
                    'fio' => $fio,
                    'quantity_adults' => $quantity_adults,
                    'quantity_children' => $quantity_children,
                    'cost_flight' => $cost_flight->price,
                    'email' => $email,
                    'phone' => $phone,
                    'tour' => $data_tour,
                    'code_certificate' => $code,
                    'payment' => null,
                ))->render();

                $admin_message = View::factory('site/message/order_adminmessage', array(
                    'fio' => $fio,
                    'quantity_adults' => $quantity_adults,
                    'quantity_children' => $quantity_children,
                    'cost_flight' => $cost_flight->price,
                    'email' => $email,
                    'phone' => $phone,
                    'tour' => $data_tour,
                    'code_certificate' => $code,
                    'payment' => null,
                ))->render();
                Helpers_Email::send(Kohana::$config->load('mailer.admin'), 'Новый заказ '.$fio.' '.$phone, $admin_message, true);
                Helpers_Email::send($email, 'Новый заказ '.$fio.' '.$phone, $user_message, true);
            }
            Session::instance()->destroy('pre_data');
            exit(json_encode(array('number_order' => $number_order)));
        }
        $this->forward_404();
    }

    public function action_preOrder()
    {
        Session::instance()->set('pre_data', $_POST);
        $pre_data=  Session::instance()->get('pre_data');
        exit(json_encode(array($pre_data)));
    }

}
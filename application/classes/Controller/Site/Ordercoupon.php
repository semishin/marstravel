<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ordercoupon extends Controller_Site
{
    public function action_code()
    {
        $this->set_metatags_and_content('', 'page');
        $code = $this->request->post('code');
        $tour_id = $this->request->post('tour_id');
        $date = $this->request->post('date');
        $quantity_children = $this->request->post('quantity_children');
        $quantity_adults = $this->request->post('quantity_adults');
        $quantity_people = $quantity_children + $quantity_adults;
        $coupon_check = ORM::factory('Coupon')
            ->where('active_firm','=',1)
            ->where('tour_id','=', $tour_id)
            ->where('code','=', $code)
            ->limit(1)
            ->find();

        $cost_flight = ORM::factory('PriceFlight')->where('free_places', '>=', $quantity_people)->where('end_date', '>=', $date)->where('start_date', '<=', $date)->find();


        if ($coupon_check->id) {
            $coupon_id = $coupon_check->id;
        } else {
            $coupon_id = 0;
        }


        if ($this->request->is_ajax()) {

            exit(json_encode(array('cost_flight_view' => number_format($cost_flight->price * $quantity_people, 0, ' ', ' '), 'cost_flight' => $cost_flight->price * $quantity_people,  'coupon_id' => $coupon_id, 'code_coupon' => $coupon_check->code)));
        }
        $this->forward_404();
    }
}
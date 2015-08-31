<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Ordercoupon extends Controller_Site
{
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
        } else {
            $coupon_id = 0;
        }


        if ($this->request->is_ajax()) {

            exit(json_encode(array('coupon_id' => $coupon_id, 'code_coupon' => $coupon_check->code)));
        }
        $this->forward_404();
    }
}
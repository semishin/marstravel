<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Tour extends Controller_Site
{

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'tour');

        $this->template->images = json_decode($this->_model->images, true);

        $ids = @unserialize($this->_model->route);

        $citiesHash = array();
        if ($ids) {
            $cities = ORM::factory('City')->where('id', 'IN', $ids)->find_all()->as_array();
            foreach ($cities as $city) {
                $citiesHash[$city->id] = $city;
            }
        }
        $this->template->route = $ids;
        $this->template->cities = $citiesHash;

    }

    public function action_info()
    {
        $quantity_children = $this->request->post('quantity_children');
        $quantity_adults = $this->request->post('quantity_adults');
        $date = $this->request->post('date');
        if(!$quantity_adults){
            $quantity_adults = 2;
        }
        $quantity_people = $quantity_children + $quantity_adults;
        if($date){
            $PDO = ORM::factory('PriceFlight')->PDO();
            $date = explode('/', $date);
            $date = $date[2].'-'.$date[1].'-'.$date[0];
            $cost_flight = ORM::factory('PriceFlight')->where('free_places', '>=', $quantity_people)->where('start_date', '<=', $date)->find();
            exit(json_encode(array('cost_flight_view' => number_format($cost_flight->price, 0, ' ', ' '), 'cost_flight' => $cost_flight->price, '$date' => $query)));
        }
        $free_date = ORM::factory('PriceFlight')->where('free_places', '>=', $quantity_people)->find_all();
        $days = [];
        foreach($free_date as $item){
            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
        }
        foreach ($days_array as  $date) {
            foreach($date as $index => $item) {
                $days[] = date('Y-m-d', $item);
            }
        }
        exit(json_encode(array('days' => $days)));
    }

}

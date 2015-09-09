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
        $current_date = date("Y-m-d");
        $free_date = ORM::factory('PriceFlight')->where('free_places', '>=', 2)->where('start_date', '<=', $current_date)->order_by('start_date')->find();
        $days = [];
        $count_places = 0;
        foreach($free_date as $item){
            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
            if($current_date == range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60))){
                $current_date = range(strtotime($item->start_date), strtotime($item->end_date), (48*60*60));
            }
        }
        $this->template->free_date = $free_date;
        $this->template->route = $ids;
        $this->template->current_date = $current_date;
        $this->template->cities = $citiesHash;

    }

    public function action_info()
    {
        $quantity_children = $this->request->post('quantity_children');
        $quantity_adults = $this->request->post('quantity_adults');
        $date = $this->request->post('date');
        $get_carent_date = $this->request->post('get_carent_date');
        $current_date = date("Y-m-d");
        if(!$quantity_adults){
            $quantity_adults = 2;
        }
        $quantity_people = $quantity_children + $quantity_adults;
        if($date){
            $get_date = new DateTime($date);
            $date = $get_date->format('Y-m-d');
            $cost_flight = ORM::factory('PriceFlight')->where('free_places', '>=', $quantity_people)->where('end_date', '>=', $date)->where('start_date', '<=', $date)->find();
            exit(json_encode(array('cost_flight_view' => number_format($cost_flight->price, 0, ' ', ' '), 'cost_flight' => $cost_flight->price, 'quantity_adults' => $quantity_adults, 'quantity_children' => $quantity_children)));
        }
        $free_date = ORM::factory('PriceFlight')->where('free_places', '>=', $quantity_people)->where('end_date', '>=', $current_date)->find_all();
        $days = [];
        $count_places = 0;
        foreach($free_date as $item){
            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
            $count_places += $item->free_places;
        }
        if($count_places < $quantity_people){
            exit(json_encode(array('message' => 'Извините. На данный момент нету столько свободных мест')));

        }
        foreach ($days_array as  $date) {
            foreach($date as $index => $item) {
                if(date('Y-m-d', $item) > $current_date){
                    $days[] = date('Y-m-d', $item);
                }
            }
        }
        exit(json_encode(array('days' => $days, 'quantity_adults' => $quantity_adults, 'quantity_children' => $quantity_children)));
    }

}

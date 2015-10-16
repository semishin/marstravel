<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Tour extends Controller_Site
{

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'tour');
        $this->template->images = json_decode($this->_model->images, true);
        $ids = @unserialize($this->_model->route);
        $count_places = 0;
        $citiesHash = array();
        if ($ids) {
            $cities = ORM::factory('City')->where('id', 'IN', $ids)->find_all()->as_array();
            foreach ($cities as $city) {
                $citiesHash[$city->id] = $city;
            }
        }
        $current_date = date("Y-m-d");
        $free_date = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $this->_model->id)
            ->where('free_places', '>=', 1)
            ->where('start_date', '>=', $current_date)
            ->order_by('start_date')->find();

        $free_date_total = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $this->_model->id)
            ->where('free_places', '>=', 1)
            ->where('end_date', '>=', $current_date)
            ->find_all();
        $min_price_flight = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $this->_model->id)
            ->where('free_places', '>', 0)
            ->order_by('price', 'ASC')->find();
        $days = array();
        foreach($free_date_total as $item){
            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
            $count_places += $item->free_places;
        }

        foreach ($days_array as  $dat) {
            foreach($dat as $index => $item) {
                if(date('Y-m-d', $item) > $current_date){
                    $days[] = date('Y-m-d', $item);
                }
            }
        }
        $this->template->free_date = $free_date;
        $this->template->route = $ids;
        $this->template->current_date = $days[0];
        $this->template->cities = $citiesHash;
        $this->template->min_price_flight = $min_price_flight;
        $this->template->start_count_places = $count_places;
    }

//    public function action_info()
//    {
//        $actual_date = date('d-m-Y');
//        $quantity_children = $this->request->post('quantity_children');
//        $quantity_adults = $this->request->post('quantity_adults');
//        $selected_date = $this->request->post('date');
//        $tour_id = $this->request->post('tour_id');
//        $quantity_people = $quantity_children + $quantity_adults;
//        $total_places_places = 0;
//        $days = array();
//        $tour = ORM::factory('Tour')->where('id', '=', $tour_id)->find();
//        $total_free_places_date = ORM::factory('PriceFlight')
//            ->where('tour_id', '=', $tour_id)
//            ->where('free_places', '>=', $quantity_people)
//            ->where('end_date', '>=', $actual_date)
//            ->find_all();
//        foreach($total_free_places_date as $item){
//            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
//            $total_places_places += $item->free_places;
//        }
//        if(!$selected_date){
//            foreach ($days_array as  $dat) {
//                foreach($dat as $index => $item) {
//                    if(date('Y-m-d', $item) > $actual_date){
//                        $days[] = date('Y-m-d', $item);
//                    }
//                }
//            }
//            $cost_flight = ORM::factory('PriceFlight')
//                ->where('tour_id', '=', $tour_id)
//                ->where('free_places', '>=', $quantity_people)
//                ->where('end_date', '>=', $get_carent_date)
//                ->where('start_date', '<=', $get_carent_date)
//                ->find();
//            exit(json_encode(array(
//                'not_free_places_carent_date' => 'Выберите дату',
//                'min_date_start' =>  $days[0],
//                'days' => $days)));
//        }else{
//
//        }
//        if($date){
//            $format_date = new DateTime($date);
//            $date = $format_date->format('Y-m-d');
//        }
//        $current_date = date("Y-m-d");
//        if(!$quantity_adults){
//            $quantity_adults = 2;
//        }
//        $tour = ORM::factory('Tour')->where('id', '=', $tour_id)->find();
//
//        $cost_flight = ORM::factory('PriceFlight')
//            ->where('tour_id', '=', $tour_id)
//            ->where('free_places', '>=', $quantity_people)
//            ->where('end_date', '>=', $get_carent_date)
//            ->where('start_date', '<=', $get_carent_date)
//            ->find();
//
//        $free_date_total = ORM::factory('PriceFlight')
//            ->where('tour_id', '=', $tour_id)
//            ->where('free_places', '>=', $quantity_people)
//            ->where('end_date', '>=', $current_date)
//            ->find_all();
//
//        $free_place_carent_date = ORM::factory('PriceFlight')
//            ->where('tour_id', '=', $tour_id)
//            ->where('free_places', '>=', $quantity_adults)
//            ->where('end_date', '>=', $get_carent_date)
//            ->where('start_date', '<=', $get_carent_date)
//            ->order_by('start_date')
//            ->find();
//
//        if(!$date && !$get_carent_date && !$quantity_children){
//            foreach($free_date_total as $item){
//                $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
//                $count_places += $item->free_places;
//            }
//            foreach ($days_array as  $dat) {
//                foreach($dat as $index => $item) {
//                    if(date('Y-m-d', $item) > $current_date){
//                        $days[] = date('Y-m-d', $item);
//                    }
//                }
//            }
//            exit(json_encode(array(
//                'not_free_places_carent_date' => 'Выберите дату',
//                'min_date_start' => $min_date_start,
//                'days' => $days)));
//        }
//
//
//
//        foreach($free_date_total as $item){
//            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
//            $count_places += $item->free_places;
//        }
//        if($count_places < $quantity_people){
//            exit(json_encode(array('message' => 'Извините. На данный момент нет столько свободных мест',
//                                    'min_date_start' => $min_date_start,)));
//        }
//
//        if(!$get_carent_date || (($free_place_carent_date->free_places + 5) < $quantity_people) &&  $free_place_carent_date->free_places < $quantity_people){
//            foreach ($days_array as  $dat) {
//                foreach($dat as $index => $item) {
//                    if(date('Y-m-d', $item) > $current_date){
//                        $days[] = date('Y-m-d', $item);
//                    }
//                }
//            }
//            exit(json_encode(array(
//                'not_free_places_carent_date' => 'Выберите дату',
//                'min_date_start' => $min_date_start,
//                'days' => $days)));
//        }
//
//        if($free_place_carent_date->free_places < $quantity_people){
//            foreach ($days_array as  $dat) {
//                foreach($dat as $index => $item) {
//                    if(date('Y-m-d', $item) > $current_date){
//                        $days[] = date('Y-m-d', $item);
//                    }
//                }
//            }
//            exit(json_encode(array(
//                'not_free_places_carent_date' => 'Извините. На текущую дату '. $get_carent_date .' нет '. $quantity_people .' мест',
//                'days' => $days, 'min_date_start' => $min_date_start)));
//        }
//
//        foreach ($days_array as  $dat) {
//            foreach($dat as $index => $item) {
//                if(date('Y-m-d', $item) > $current_date){
//                    $days[] = date('Y-m-d', $item);
//                }
//            }
//        }
//        if($quantity_people == 1 && $tour->price_single){
//            $price_single = $tour->price_single;
//        } else {
//            $price_single = 0;
//        }
//        $total_cost_not_coupon = ($cost_flight->price * $quantity_people) + ($tour->price * $quantity_adults) + ($tour->price_child * $quantity_children) + $price_single;
//        $total_cost_coupon = $cost_flight->price * $quantity_people;
//        exit(json_encode(array(
//            'days' => $days,
//            'quantity_adults' => $quantity_adults,
//            'quantity_children' => $quantity_children,
//            'total_cost_not_coupon' => $total_cost_not_coupon,
//            'total_cost_coupon' => $total_cost_coupon,
//            'cost_flight' => $cost_flight->price,
//            'free_place_carent_date' => $free_place_carent_date,
//            'min_date_start' => $min_date_start)));
//    }
//
    public function action_info()
    {
        $min_date_start = date("Y-m-d");
        $quantity_children = $this->request->post('quantity_children');
        $quantity_adults = $this->request->post('quantity_adults');
        $date = $this->request->post('date');
        $get_carent_date = $this->request->post('get_carent_date');
        $tour_id = $this->request->post('tour_id');
        $quantity_people = $quantity_children + $quantity_adults;
        $days = array();
        $count_places = 0;
        if($date){
            $format_date = new DateTime($date);
            $date = $format_date->format('Y-m-d');
        }
        $current_date = date("Y-m-d");
        if(!$quantity_adults){
            $quantity_adults = 2;
        }
        $tour = ORM::factory('Tour')->where('id', '=', $tour_id)->find();

        $cost_flight = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $tour_id)
            ->where('free_places', '>=', $quantity_people)
            ->where('end_date', '>=', $get_carent_date)
            ->where('start_date', '<=', $get_carent_date)
            ->find();

        $free_date_total = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $tour_id)
            ->where('free_places', '>=', $quantity_people)
            ->where('end_date', '>=', $current_date)
            ->find_all();

        $free_place_carent_date = ORM::factory('PriceFlight')
            ->where('tour_id', '=', $tour_id)
            ->where('free_places', '>=', $quantity_adults)
            ->where('end_date', '>=', $get_carent_date)
            ->where('start_date', '<=', $get_carent_date)
            ->order_by('start_date')
            ->find();


        foreach($free_date_total as $item){
            $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
            $count_places += $item->free_places;
        }
        if($count_places < $quantity_people){
            exit(json_encode(array('message' => 'Извините. На данный момент нет столько свободных мест',
                'min_date_start' => $min_date_start)));
        }

        if(!$date && !$get_carent_date && !$quantity_children){
            foreach($free_date_total as $item){
                $days_array[] =  range(strtotime($item->start_date), strtotime($item->end_date), (24*60*60));
                $count_places += $item->free_places;
            }
            foreach ($days_array as  $dat) {
                foreach($dat as $index => $item) {
                    if(date('Y-m-d', $item) > $current_date){
                        $days[] = date('Y-m-d', $item);
                    }
                }
            }
            exit(json_encode(array(
                'not_free_places_carent_date' => 'Выберите дату',
                'min_date_start' => $min_date_start,
                'days' => $days)));
        }


        if(!$get_carent_date || (($free_place_carent_date->free_places + 5) < $quantity_people) &&  $free_place_carent_date->free_places < $quantity_people){
            foreach ($days_array as  $dat) {
                foreach($dat as $index => $item) {
                    if(date('Y-m-d', $item) > $current_date){
                        $days[] = date('Y-m-d', $item);
                    }
                }
            }
            exit(json_encode(array(
                'not_free_places_carent_date' => 'Выберите дату',
                'min_date_start' => $min_date_start,
                'days' => $days)));
        }

        if($free_place_carent_date->free_places < $quantity_people){
            foreach ($days_array as  $dat) {
                foreach($dat as $index => $item) {
                    if(date('Y-m-d', $item) > $current_date){
                        $days[] = date('Y-m-d', $item);
                    }
                }
            }
            exit(json_encode(array(
                'not_free_places_carent_date' => 'Извините. На текущую дату '. $get_carent_date .' нет '. $quantity_people .' мест',
                'days' => $days, 'min_date_start' => $min_date_start)));
        }

        foreach ($days_array as  $dat) {
            foreach($dat as $index => $item) {
                if(date('Y-m-d', $item) > $current_date){
                    $days[] = date('Y-m-d', $item);
                }
            }
        }
        if($quantity_people == 1 && $tour->price_single){
            $price_single = $tour->price_single;
        } else {
            $price_single = 0;
        }
        $total_cost_not_coupon = ($cost_flight->price * $quantity_people) + ($tour->price * $quantity_adults) + ($tour->price_child * $quantity_children) + $price_single;
        $total_cost_coupon = $cost_flight->price * $quantity_people;
        exit(json_encode(array(
            'days' => $days,
            'quantity_adults' => $quantity_adults,
            'quantity_children' => $quantity_children,
            'total_cost_not_coupon' => $total_cost_not_coupon,
            'total_cost_coupon' => $total_cost_coupon,
            'cost_flight' => $cost_flight->price,
            'free_place_carent_date' => $free_place_carent_date,
            'min_date_start' => $min_date_start)));
    }

    public function action_ajax(){
        $quantity_children = $_GET['quantity_children'];
        $quantity_adults = $_GET['quantity_adults'];
        $view = View::factory('site/tour/ajax', array(
            'quantity_children' => $quantity_children,
            'quantity_adults' => $quantity_adults,
            'totla_people' => $quantity_children + $quantity_adults
        ))->render();
        exit($view);
    }

}

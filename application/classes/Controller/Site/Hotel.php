<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Hotel extends Controller_Site
{

    const LIMIT_ON_PAGE = 6;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

        $hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();
        $count_hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->count_all();

        //        Временный  массив для выборки городов:
        $hotel_cities = ORM::factory('Hotel')
            ->where('active', '=', 1)
            ->find_all()
            ->as_array();
        foreach ($hotel_cities as $item) {
            $temp_city[] = $item->city_id;
        }

        $cities = ORM::factory('City')
            ->where('active','=',1)
            ->where('id','IN',$temp_city)
//            ->order_by('position','asc')
            ->find_all()
            ->as_array();

        $this->template->s_title = 'Отели Турции';

        $this->template->count_hotel = $count_hotel;
        $this->template->hotel = $hotel;
        $this->template->cities = $cities;
    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'hotel');


//        $services = ORM::factory('Service')
//            ->where('category_id','=',$this->_model->category_id)
//            ->where('active','=',1)
//            ->order_by('position','asc')
//            ->find_all();
//        $this->template->services = $services;
//
//        $this->template->category = $this->_model->category;
        $this->template->images = json_decode($this->_model->images, true);

    }

    public function action_ajax()
    {
        $query = $this->request->post('query');
        $city_id = $this->request->post('city_id');
        $stars = $this->request->post('stars');

        $hotel = ORM::factory('Hotel')
            ->where('active', '=', 1);

        if ($query) {
            $hotel = $hotel->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $hotel = $hotel
                ->where('city_id', '=', $city_id);
        }
        if ($stars) {
            $hotel = $hotel
                ->where('stars', '=', $stars);
        }
        $hotel = $hotel
            ->order_by('id', 'desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        $count_hotel = ORM::factory('Hotel')
            ->where('active', '=', 1);
        if ($query) {
            $count_hotel = $count_hotel->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_hotel = $count_hotel
                ->where('city_id', '=', $city_id);
        }
        if ($stars) {
            $count_hotel = $count_hotel
                ->where('stars', '=', $stars);
        }
        $count_hotel = $count_hotel
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/hotel/ajax', array(
                        'hotel' => $hotel
                    ))->render(),
                    'count_hotel' => $count_hotel,
                    'more' => $count_hotel > self::LIMIT_ON_PAGE
                )
            )
        );
    }

    public function action_more()
    {
        $offset = $this->request->post('offset');
        $query = $this->request->post('query');
        $city_id = $this->request->post('city_id');
        $stars = $this->request->post('stars');

        if (!$offset) {
            $this->forward_404();
        }

        $hotel = ORM::factory('Hotel')
            ->where('active', '=', 1);

        if ($query) {
            $hotel = $hotel->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $hotel = $hotel
                ->where('city_id', '=', $city_id);
        }
        if ($stars) {
            $hotel = $hotel
                ->where('stars', '=', $stars);
        }
        $hotel = $hotel
            ->order_by('id', 'desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all()
            ->as_array();

        $count_hotel = ORM::factory('Hotel')
            ->where('active', '=', 1);
        if ($query) {
            $count_hotel = $count_hotel->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_hotel = $count_hotel
                ->where('city_id', '=', $city_id);
        }
        if ($stars) {
            $count_hotel = $count_hotel
                ->where('stars', '=', $stars);
        }
        $count_hotel = $count_hotel
            ->count_all();

        exit(
        json_encode(
            array(
                'html' => View::factory('site/hotel/more', array(
                    'hotel' => $hotel
                ))->render(),
                'count_hotel' => $count_hotel,
                'more' => $count_hotel > $offset + self::LIMIT_ON_PAGE,
            )
        )
        );
    }

}

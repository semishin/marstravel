<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Hotel extends Controller_Site
{

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

        $hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->order_by('id','desc')
//            ->limit(self::LIMIT_ON_PAGE_BANNERS)
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

    public function action_city()
    {
        $city_id = $this->request->post('city_id');
        $hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->where('city_id','=',$city_id)
            ->order_by('id','desc')
//            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();
        $count_hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->where('city_id','=',$city_id)
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/hotel/city', array(
                        'hotel' => $hotel,
                    ))->render(),
    //                'more' => $count_product > self::LIMIT_ON_PAGE
                )
            )
        );
    }

    public function action_star()
    {
        $star = $this->request->post('star');
        $hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->where('stars','=',$star)
            ->order_by('id','desc')
//            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();
        $count_hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->where('stars','=',$star)
            ->count_all();

        exit(
        json_encode(
            array(
                'html' => View::factory('site/hotel/star', array(
                    'hotel' => $hotel,
                ))->render(),
                //                'more' => $count_product > self::LIMIT_ON_PAGE
            )
        )
        );
    }


}

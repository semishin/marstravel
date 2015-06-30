<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Excursion extends Controller_Site
{

    const LIMIT_ON_PAGE = 6;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

        $excursion = ORM::factory('Excursion')
            ->where('active','=',1)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();
        $count_excursion = ORM::factory('Excursion')
            ->where('active','=',1)
            ->count_all();

        //        Временный  массив для выборки городов и категорий:
        $excursion_cities = ORM::factory('Excursion')
            ->where('active', '=', 1)
            ->find_all()
            ->as_array();
        foreach ($excursion_cities as $item) {
            $temp_city[] = $item->city_id;
            $temp_category[] = $item->category_id;
        }

        $cities = ORM::factory('City')
            ->where('active','=',1)
            ->where('id','IN',$temp_city)
            ->find_all()
            ->as_array();
        $categories = ORM::factory('Excursion_Category')
            ->where('active','=',1)
            ->where('id','IN',$temp_category)
            ->find_all()
            ->as_array();

        $this->template->s_title = 'Экскурсии по Турции';

        $this->template->excursion = $excursion;
        $this->template->count_excursion = $count_excursion;
        $this->template->cities = $cities;
        $this->template->categories = $categories;
    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'excursion');


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
    {   $query = $this->request->post('query');
        $city_id = $this->request->post('city_id');
        $category_id = $this->request->post('category_id');

        $excursion = ORM::factory('Excursion')
            ->where('active','=',1);

        if ($query) {
            $excursion = $excursion->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $excursion = $excursion
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $excursion = $excursion
                ->where('category_id','=',$category_id);
        }
        $excursion = $excursion
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        $count_excursion = ORM::factory('Excursion')
            ->where('active','=',1);
        if ($query) {
            $count_excursion = $count_excursion->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_excursion = $count_excursion
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $count_excursion = $count_excursion
                ->where('category_id','=',$category_id);
        }
        $count_excursion = $count_excursion
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/excursion/ajax', array(
                        'excursion' => $excursion
                    ))->render(),
                    'count_excursion' => $count_excursion,
                    'more' => $count_excursion > self::LIMIT_ON_PAGE
                )
            )
        );
    }

    public function action_more()
    {
        $offset = $this->request->post('offset');
        $query = $this->request->post('query');
        $city_id = $this->request->post('city_id');
        $category_id = $this->request->post('category_id');

        if (!$offset) {
            $this->forward_404();
        }

        $excursion = ORM::factory('Excursion')
            ->where('active','=',1);

        if ($query) {
            $excursion = $excursion->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $excursion = $excursion
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $excursion = $excursion
                ->where('category_id','=',$category_id);
        }
        $excursion = $excursion
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all()
            ->as_array();

        $count_excursion = ORM::factory('Excursion')
            ->where('active','=',1);
        if ($query) {
            $count_excursion = $count_excursion->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_excursion = $count_excursion
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $count_excursion = $count_excursion
                ->where('category_id','=',$category_id);
        }
        $count_excursion = $count_excursion
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/excursion/more', array(
                        'excursion' => $excursion
                    ))->render(),
                    'count_excursion' => $count_excursion,
                    'more' => $count_excursion > $offset + self::LIMIT_ON_PAGE,
                )
            )
        );
    }

}

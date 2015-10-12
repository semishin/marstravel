<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Sight extends Controller_Site
{

    private $_items_on_page = 6;
    const LIMIT_ON_PAGE = 6;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

        $sight = ORM::factory('Sight')
            ->where('active','=',1)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();
        $count_sight = ORM::factory('Sight')
            ->where('active','=',1)
            ->count_all();
        $count_excursion = ORM::factory('Sight')
            ->where('active','=',1)
            ->where('excursion','=',1)
            ->count_all();

        //        Временный  массив для выборки городов и категорий:
        $sight_cities = ORM::factory('Sight')
            ->where('active', '=', 1)
            ->find_all()
            ->as_array();
        foreach ($sight_cities as $item) {
            $temp_city[] = $item->city_id;
            $temp_category[] = $item->category_id;
        }

        $cities = ORM::factory('City')
            ->where('active','=',1)
            ->where('id','IN',$temp_city)
            ->find_all()
            ->as_array();
        $categories = ORM::factory('Sight_Category')
            ->where('active','=',1)
            ->where('id','IN',$temp_category)
            ->find_all()
            ->as_array();

        $this->template->s_title = 'Достопримечательности Турции';

        $this->template->sight = $sight;
        $this->template->count_sight = $count_sight;
        $this->template->count_excursion = $count_excursion;
        $this->template->cities = $cities;
        $this->template->categories = $categories;
    }

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'sight');

        $PDO = ORM::factory('Excursion')->PDO();
        $query = "SELECT excursions.url, excursions.name, excursions.main_image, excursions.id
                        FROM sight_excursion
                        LEFT JOIN sights ON sights.id = sight_excursion.sight_id
                        LEFT JOIN excursions ON excursions.id = sight_excursion.excursion_id
                        WHERE sight_excursion.sight_id = {$this->_model->id}";
        $excursions = $PDO->query($query)->fetchAll();
        $this->template->images = json_decode($this->_model->images, true);
        $this->template->excursions = $excursions;

    }

    public function action_ajax()
    {   $query = $this->request->post('query');
        $city_id = $this->request->post('city_id');
        $category_id = $this->request->post('category_id');
        $excursions = $this->request->post('excursions');

        $sight = ORM::factory('Sight')
            ->where('active','=',1);

        if ($query) {
            $sight = $sight->and_where_open()->where('name', 'like', '%' . $query . '%')
                        ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $sight = $sight
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $sight = $sight
                ->where('category_id','=',$category_id);
        }
        if ($excursions) {
            $sight = $sight
                ->where('excursion','=',1);
        }
        $sight = $sight
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->find_all()
            ->as_array();

        $count_sight = ORM::factory('Sight')
            ->where('active','=',1);
        if ($query) {
            $count_sight = $count_sight->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_sight = $count_sight
               ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $count_sight = $count_sight
                ->where('category_id','=',$category_id);
        }
        if ($excursions) {
            $count_sight = $count_sight
                ->where('excursion','=',1);
        }
        $count_sight = $count_sight
            ->count_all();

        $count_excursion = ORM::factory('Sight')
                ->where('active','=',1)
                ->where('excursion','=',1);
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
        if ($excursions) {
            $count_excursion = $count_excursion
                ->where('excursion','=',1);
        }
        $count_excursion = $count_excursion
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/sight/ajax', array(
                        'sight' => $sight
                    ))->render(),
                    'count_sight' => $count_sight,
                    'count_excursion' => $count_excursion,
                    'more' => $count_sight > self::LIMIT_ON_PAGE
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
        $excursions = $this->request->post('excursions');

        if (!$offset) {
            $this->forward_404();
        }

        $sight = ORM::factory('Sight')
            ->where('active','=',1);

        if ($query) {
            $sight = $sight->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $sight = $sight
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $sight = $sight
                ->where('category_id','=',$category_id);
        }
        if ($excursions) {
            $sight = $sight
                ->where('excursion','=',1);
        }
        $sight = $sight
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all()
            ->as_array();

        $count_sight = ORM::factory('Sight')
            ->where('active','=',1);
        if ($query) {
            $count_sight = $count_sight->and_where_open()->where('name', 'like', '%' . $query . '%')
                ->or_where('content', 'like', '%' . $query . '%')->and_where_close();
        }
        if ($city_id) {
            $count_sight = $count_sight
                ->where('city_id','=',$city_id);
        }
        if ($category_id) {
            $count_sight = $count_sight
                ->where('category_id','=',$category_id);
        }
        if ($excursions) {
            $count_sight = $count_sight
                ->where('excursion','=',1);
        }
        $count_sight = $count_sight
            ->count_all();

        $count_excursion = ORM::factory('Sight')
            ->where('active','=',1)
            ->where('excursion','=',1);
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
        if ($excursions) {
            $count_excursion = $count_excursion
                ->where('excursion','=',1);
        }
        $count_excursion = $count_excursion
            ->count_all();

        exit(
            json_encode(
                array(
                    'html' => View::factory('site/sight/more', array(
                        'sight' => $sight
                    ))->render(),
                    'count_sight' => $count_sight,
                    'count_excursion' => $count_excursion,
                    'more' => $count_sight > $offset + self::LIMIT_ON_PAGE,
                )
            )
        );
    }

}

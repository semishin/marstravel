<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Site
{
    public function action_contacts()
    {
        $this->set_metatags_and_content('contacts', 'page');
    }

    public function action_about_us()
    {
        $this->set_metatags_and_content('about-us', 'page');
    }

    public function action_our_partners()
    {
        $this->set_metatags_and_content('our-partners', 'page');
    }

    public function action_hotels()
    {
        $this->set_metatags_and_content('hotels', 'page');

        $hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->order_by('id','desc')
//            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();
        $count_hotel = ORM::factory('Hotel')
            ->where('active','=',1)
            ->count_all();

        $this->template->count_hotel = $count_hotel;
        $this->template->hotel = $hotel;
    }

    public function action_about_turkey()
    {
        $this->set_metatags_and_content('about-turkey', 'page');
    }

    public function action_sight()
    {
        $this->set_metatags_and_content('sight', 'page');

        $sight = ORM::factory('Sight')
            ->where('active','=',1)
            ->order_by('id','desc')
//            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();
        $count_sight = ORM::factory('Sight')
            ->where('active','=',1)
            ->count_all();

        $this->template->count_sight = $count_sight;
        $this->template->sight = $sight;
    }

    public function action_weather()
    {
        $this->set_metatags_and_content('weather', 'page');
    }

    public function action_advertising()
    {
        $this->set_metatags_and_content('advertising', 'page');
    }

}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Site
{
    const LIMIT_ON_PAGE_BANNERS = 1;

    public function action_contacts()
    {
        $this->set_metatags_and_content('contacts', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

    public function action_about_us()
    {
        $this->set_metatags_and_content('about-us', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

    public function action_our_partners()
    {
        $this->set_metatags_and_content('our-partners', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

    public function action_about_turkey()
    {
        $this->set_metatags_and_content('about-turkey', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

    public function action_weather()
    {
        $this->set_metatags_and_content('weather', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

    public function action_advertising()
    {
        $this->set_metatags_and_content('advertising', 'page');

        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $left_banner = ORM::factory('Banner')
            ->where('active','=',1)
            ->where('type','=',2)
            ->order_by('id','desc')
            ->limit(self::LIMIT_ON_PAGE_BANNERS)
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->left_banner = $left_banner;
    }

}
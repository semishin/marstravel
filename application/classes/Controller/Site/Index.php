<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Index extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;

    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');

//        $masters = ORM::factory('Master')
//            ->where('active','=',1)
//            ->order_by('position','asc')
//            ->limit(self::LIMIT_ON_PAGE_MASTERS)
//            ->find_all()
//            ->as_array();
//
//        $this->template->masters = $masters;
        $slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $count_slide = ORM::factory('Slide')
            ->where('active','=',1)
            ->count_all();
        $tour = ORM::factory('Tour')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all()
            ->as_array();

        $this->template->slide = $slide;
        $this->template->count_slide = $count_slide;
        $this->template->tour = $tour;

        $this->template->set_layout('layout/site/global');
    }

    public function action_brif()
    {
        $this->template->set_layout('site/index/brif');
    }

    public function action_email_index()
    {
        $this->template->set_layout('site/index/email_index');
    }
}

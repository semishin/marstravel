<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Review extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;
    const LIMIT_ON_PAGE_BANNERS = 1;

    public function action_index()
    {
        $this->set_metatags_and_content('review', 'page');
        $review = ORM::factory('Review')
            ->where('active','=',1)
            ->order_by('created_at')
            ->find_all();
        $count_review = ORM::factory('Review')
            ->where('active','=',1)
            ->count_all();
        $this->template->review = $review;
        $this->template->count_review = $count_review;


        $this->template->set_layout('layout/site/global');
    }
}

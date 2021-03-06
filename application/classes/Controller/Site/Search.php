<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Site_Search extends Controller_Site {

    public function action_index()    {

        $this->set_metatags_and_content('', 'page');

        $limit = 9;

        $page = Arr::get($_GET, 'p');

        if (!$page) {
            $page = 1;
        }

        $offset = $limit * $page - $limit;

        $search_result = ORM::factory('Tour')->search(
            array('name', 'content', 'short_content'),
            Arr::get($_GET, 'q'),
            $limit,
            $offset,
            Arr::get($_GET, 'order'),
            Arr::get($_GET, 'dest')
        );

        $count_pages = ceil($search_result['count_all'] / $limit);

        if ($count_pages && $page > $count_pages || $page < 1) {
            $this->forward_404();
        }

        $this->template->pagination = View::factory('site/search/pagination', array(
            'page' => $page,
            'count_pages' => $count_pages
        ));

        $this->template->s_title = 'Результаты поиска по запросу - '.Arr::get($_GET, 'q');

        $this->template->countall = $search_result['count_all'];
        $this->template->search_result = $search_result['result'];
        $this->template->count_pages = $count_pages;
        $this->template->set_layout('layout/site/global');

    }
}
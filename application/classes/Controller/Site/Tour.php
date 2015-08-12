<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Tour extends Controller_Site
{

    public function action_item()
    {
        $this->set_metatags_and_content($this->param('url'), 'tour');

        $this->template->images = json_decode($this->_model->images, true);

        $ids = @unserialize($this->_model->route);

        $citiesHash = array();
        if ($ids) {
            $cities = ORM::factory('City')->where('id', 'IN', $ids)->find_all()->as_array();
            foreach ($cities as $city) {
                $citiesHash[$city->id] = $city;
            }
        }

        $this->template->route = $ids;
        $this->template->cities = $citiesHash;

    }

}

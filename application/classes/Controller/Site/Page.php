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
    }

    public function action_about_turkey()
    {
        $this->set_metatags_and_content('about-turkey', 'page');
    }

    public function action_sight()
    {
        $this->set_metatags_and_content('sight', 'page');
    }

    public function action_weather()
    {
        $this->set_metatags_and_content('weather', 'page');
    }

}
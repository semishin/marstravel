<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_DefaultUserController extends Controller_Site
{
    public function before()
    {
        parent::before();
        if (!Auth::instance()->logged_in()) {
            return $this->redirect('/auth');
        }
    }
}

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Auth extends Controller_Site
{
    public function action_index()
    {
        if (Auth::instance()->logged_in())
        {
            return $this->redirect('/user');
        } else {
            $this->set_metatags_and_content('', 'page');
            $this->template->set_layout('layout/site/global');
        }
    }

    public function action_login()
    {
        if ($this->request->is_ajax()) {
            $validation = Validation::factory($_POST)
                ->rule('email', 'not_empty')
                ->rule('email', 'email')
                ->rule('password', 'not_empty')
                ->rule('password', 'min_length', array(':value', '4'));
            if(!$validation->check()){
                $result = 'fail';
                exit(json_encode(array('message' => $result)));
            };
            $email = $this->request->post('email');
            $password = $this->request->post('password');
            if($this->request->post('remember')){
                $remember = true;
            } else {
                $remember = false;
            }
            if( ! Auth::instance()->login($email, $password, $remember))
            {
                $result = 'fail';
            } else {
                $result = 'success';
            }
            exit(json_encode(array('message' => $result)));
        }
        $this->forward_404();
    }

    public function action_logout()
    {
        Auth::instance()->logout(TRUE);
        return $this->redirect('/auth');

    }
}

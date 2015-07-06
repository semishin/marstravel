<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Question extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');
        if ($this->request->is_ajax()) {
            $email = $this->request->post('email');
            $name = $this->request->post('name');
            $phone = $this->request->post('phone');
            $question = $this->request->post('question');

            $question_db = ORM::factory('Question');
            $question_db->email = $email;
            $question_db->name = $name;
            $question_db->phone = $phone;
            $question_db->question = $question;
            $question_db->save();

            try {
                Email::send(Kohana::$config->load('properties.email'), array(Kohana::$config->load('properties.email'), 'Marstravel'),
                    'Новая вопрос от клиентов',
                    'Имя - ' . $name . '<br/>' .
                    'Email - ' . $email . '<br/>' .
                    'Телефон - ' . $phone . '<br/>' .
                    'Текст вопроса - ' . $question . '<br/>',
                    /*html*/
                    true
                );
            } catch (Exception $e) {}

            exit(json_encode(array()));
        }
        $this->forward_404();
    }
}
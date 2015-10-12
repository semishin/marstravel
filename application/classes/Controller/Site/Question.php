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
            $theme = $this->request->post('theme');

            $question_db = ORM::factory('Question');
            $question_db->email = $email;
            $question_db->name = $name;
            $question_db->phone = $phone;
            $question_db->question = $question;
            $question_db->theme = $theme;
            $question_db->save();

            $tour_name = ORM::factory('Tour')->where('id', '=', $theme)->find();
            if($tour_name->name){
                $theme_name = $tour_name->name;
            }else{
                $theme_name = 'Общие вопросы';
            }

            $user_message = View::factory('site/message/question_usermessage', array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'theme' => $theme_name,
                'question' => $question
            ))->render();
            $admin_message = View::factory('site/message/question_adminmessage', array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'theme' => $theme_name,
                'question' => $question
            ))->render();
            Helpers_Email::send(Kohana::$config->load('mailer.admin'), 'Новый вопрос с сайта '.$_SERVER['SERVER_NAME'].' '.$theme_name, $admin_message, true);
            Helpers_Email::send($email, 'Сообщение консультанту '.$name.' '.$phone, $user_message, true);

            exit(json_encode(array('user_message' => 'succes')));
        }
        $this->forward_404();
    }
}
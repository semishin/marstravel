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

            $user_message = View::factory('site/message/question_usermessage', array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
            ))->render();
            Helpers_Email::send($email, 'Сообщение консультанту '.$name.' '.$phone, $user_message, true);

            exit(json_encode(array('$user_message' => $user_message)));
        }
        $this->forward_404();
    }
}
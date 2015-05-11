<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Brief extends Controller_Site
{
    public function action_add()
    {
        $this->set_metatags_and_content('', 'page');
        if ($this->request->is_ajax()) {
            $email = $this->request->post('email');
            $name = $this->request->post('name');
            $phone = $this->request->post('phone');
            $core = $this->request->post('core');
            $type = $this->request->post('type');
            $purpose = $this->request->post('purpose');
            $brand = $this->request->post('brand');
            $example = $this->request->post('example');
            $section = $this->request->post('section');
            $language = $this->request->post('language');
            $style = $this->request->post('style');
            $budget = $this->request->post('budget');
            $additional = $this->request->post('additional');

            $brief = ORM::factory('Brief');
            $brief->email = $email;
            $brief->name = $name;
            $brief->phone = $phone;
            $brief->core = $core;
            $brief->type = serialize($type);
            $brief->purpose = serialize($purpose);
            $brief->brand = $brand;
            $brief->example = $example;
            $brief->section = serialize($section);
            $brief->language = serialize($language);
            $brief->style = serialize($style);
            $brief->budget = $budget;
            $brief->additional = serialize($additional);
            $brief->save();

            Email::send(Kohana::$config->load('mailer.admin'), array('info@ariol.by', 'Ariol'),
                'Новая заявка в контактах',
                'Имя - '.$name.'<br/>'.
                'Email - '.$email.'<br/>'.
                'Телефон - '.$phone.'<br/>'.
                'Текст письма - '. $core.'<br/>',
                /*html*/true
            );

            exit(json_encode(array()));
        }
        $this->forward_404();
    }
}
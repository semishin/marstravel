<?php defined('SYSPATH') or die('No direct script access.');

class Model_Question extends ORM
{
    protected $_table_name = 'questions';

    protected $_belongs_to = array(

    );

    public function labels()
    {
        return array(
            'name' => 'Имя',
            'question' => 'Вопрос',
            'email' => 'Email',
            'phone' => 'Номер телефона',
            'themeName' => 'Тема'
        );
    }

    public function form()
    {
        return new Form_Admin_Question($this);
    }



    protected $_grid_columns = array(
        'name' => array(
            'type' => 'link',
            'route_str' =>  'admin-question:edit?id=${id}',
            'title' => '${name}'
        ),
        'email' => null,
        'themeName' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-question:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-question:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_themeName()
    {
        $tour = ORM::factory('Tour')->where('id', '=', $this->theme)->find();
       if($tour->name){
           $theme = $tour->name;
       }else{
           $theme = 'Общие вопросы';
       }
        return $theme;
    }
}
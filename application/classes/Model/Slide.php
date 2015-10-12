<?php defined('SYSPATH') or die('No direct script access.');

class Model_Slide extends ORM
{
    protected $_table_name = 'slides';

    protected $_belongs_to = array(
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'link' => 'Ссылка',
            'image'=>'Изображение',
            'content' => 'Контент',
            'active' => 'Активность',
            'position' => 'Позиция',
        );
    }

    public function form()
    {
        return new Form_Admin_Slide($this);
    }

    protected $_grid_columns = array(

        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-slide:edit?id=${id}',
            'title' => '${name}'
        ),
        'position' => null,
        'active' => 'bool',

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-slide:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-slide:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function sortable_fields()
    {
        return array(
            'name',
            'position'
        );
    }
}
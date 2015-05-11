<?php defined('SYSPATH') or die('No direct script access.');

class Model_Partner extends ORM
{
    protected $_table_name = 'partners';

//    protected $_has_many = array(
//        'ourproducts' => array(
//            'model' => 'Ourproduct',
//            'foreign_key' => 'master_id'
//        )
//    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Имя',
            'active' => 'Активность',
            'images' => 'Изображение'
        );
    }

    public function form()
    {
        return new Form_Admin_Partner($this);
    }

    protected $_grid_columns = array(

        'name' => null,
        'active' => null,

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-partner:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-partner:delete?id=${id}',
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
            'active'
        );
    }
}
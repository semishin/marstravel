<?php defined('SYSPATH') or die('No direct script access.');

class Model_City extends ORM
{
    protected $_table_name = 'cities';

    protected $_belongs_to = array(
    );

    protected $_has_many_to_save = array(
        'tour'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'city_id',
            'through'      => 'tour_cities',
            'far_key'      => 'tour_id',
        )
    );

    protected $_has_many = array(
        'tour'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'city_id',
            'through'      => 'tour_cities',
            'far_key'      => 'tour_id',
        )
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Название',
            'active' => 'Активность',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
        );
    }

    public function form()
    {
        return new Form_Admin_City($this);
    }

    protected $_grid_columns = array(

        'name' => null,
        'active' => null,
        'latitude' => null,
        'longitude' => null,

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-city:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-city:delete?id=${id}',
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
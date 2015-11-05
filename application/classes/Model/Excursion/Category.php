<?php defined('SYSPATH') or die('No direct script access.');

class Model_Excursion_Category extends ORM
{
    protected $_table_name = 'excursion_categories';

    protected $_has_many = array(
        'excursion' => array(
            'model' => 'Excursion',
            'foreign_key' => 'category_id'
        )
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'active' => 'Активность'
        );
    }

    public function form()
    {
        return new Form_Admin_Excursion_Category($this);
    }

//    public function save($validation)
//    {
//        $this->md5_url = md5($this->url);
//
//        parent::save($validation);
//
//    }

    protected $_grid_columns = array(

        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-excursion_category:edit?id=${id}',
            'title' => '${name}'
        ),
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-excursion_category:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-excursion_category:delete?id=${id}',
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
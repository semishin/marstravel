<?php defined('SYSPATH') or die('No direct script access.');

class Model_Banner extends ORM
{
    protected $_table_name = 'banners';

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
            'link' => 'Ссылка',
            'type' => 'Расположение баннера',
            'active' => 'Активность',
            'image' => 'Изображение'
        );
    }

    public function form()
    {
        return new Form_Admin_Banner($this);
    }

    protected $_grid_columns = array(

        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-banner:edit?id=${id}',
            'title' => '${name}'
        ),
        'link' => null,
        'active' => 'bool',

        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-banner:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-banner:delete?id=${id}',
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
//            'type',
            'active'
        );
    }

//    public function fetchLeft()
//    {
//        return $this->where('active', '=', 1)->where('type', '=', 2)->order_by('id', 'DESC')->find();
//    }
//
//    public function fetchTop()
//    {
//        return $this->where('active', '=', 1)->where('type', '=', 1)->order_by('id', 'DESC')->find()->as_array();
//    }
}
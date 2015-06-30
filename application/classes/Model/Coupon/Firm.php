<?php defined('SYSPATH') or die('No direct script access.');

class Model_Coupon_Firm extends ORM
{
    protected $_table_name = 'coupon_firms';

    protected $_has_many = array(
        'coupon' => array(
            'model' => 'Coupon',
            'foreign_key' => 'firm_id'
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
        return new Form_Admin_Coupon_Firm($this);
    }

    protected $_grid_columns = array(

        'name' => null,
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon_firm:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon_firm:delete?id=${id}',
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
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Coupon extends ORM
{
    protected $_table_name = 'coupons';

    protected $_belongs_to = array(
        'firm' => array(
            'model'       => 'Coupon_Firm',
            'foreign_key' => 'firm_id',
        ),
        'tour' => array(
            'model'       => 'Tour',
            'foreign_key' => 'tour_id',
        )
    );

    protected $_has_many = array(
        'ordercoupon' => array(
            'model' => 'Ordercoupon',
            'foreign_key' => 'coupon_id'
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'code' => 'Код',
            'firm_id' => 'Фирма',
            'tour_id' => 'Тур',
            'active' => 'Активность',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'email',
            'active_firm' => 'Активность заказа'
        );
    }

    public function form()
    {
        return new Form_Admin_Coupon($this);
    }

    protected $_grid_columns = array(
        'code' => null,
        'firm_id' => array(
            'type' => 'template',
            'template' => '${firm_name}'
        ),
        'tour_id' => array(
            'type' => 'template',
            'template' => '${tour_name}'
        ),
        'name' => null,
        'phone' => null,
        'email' => null,
        'active' => 'bool',
        'active_firm' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_firm_name()
    {
        return $this->firm->name;
    }

    public function get_tour_name()
    {
        return $this->tour->name;
    }

    public function sortable_fields()
    {
        return array(
            'code',
            'firm_id',
            'tour_id',
            'active'
        );
    }
}
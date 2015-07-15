<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ordercoupon extends ORM
{
    protected $_table_name = 'orders_coupon';

    protected $_belongs_to = array(
        'coupon' => array(
            'model'       => 'Coupon',
            'foreign_key' => 'coupon_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'fio' => 'ФИО',
            'dob' => 'Дата рождения',
            'passport' => 'Номер паспорта',
            'validity' => 'Срок действия',
            'issuedby' => 'Кем выдан',
            'email' => 'Эл. почта',
            'phone' => 'Номер телефона',
            'agreement' => 'Согласие с условиями',
            'coupon_id' => 'Номер купона',
            'surcharge' => 'Доплата',
            'number_order' => 'Номер заказа'
        );
    }

    public function form()
    {
        return new Form_Admin_Ordercoupon($this);
    }

    public function save($validation)
    {
        $this->number_order = md5(time());

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'id' => null,
        'fio' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-ordercoupon:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-ordercoupon:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );


    public function sortable_fields()
    {
        return array(
            'id',
            'fio'
        );
    }
}
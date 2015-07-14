<?php defined('SYSPATH') or die('No direct script access.');

class Model_Order extends ORM
{
    protected $_table_name = 'orders';

    protected $_belongs_to = array(

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
            'payment' => 'Способ оплаты',
            'surcharge' => 'Доплата',
            'number_order' => 'Номер заказа'
        );
    }

    public function form()
    {
        return new Form_Admin_Order($this);
    }

    public function save($validation)
    {
        if (!$this->number_order) {
            $this->number_order = mb_substr(md5(time()), 0, 8);
        }

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'id' => null,
        'fio' => null,
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-order:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-order:delete?id=${id}',
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
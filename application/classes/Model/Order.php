<?php defined('SYSPATH') or die('No direct script access.');

class Model_Order extends ORM
{
    protected $_table_name = 'orders';

    protected $_belongs_to = array(
        'tour' => array(
            'model'       => 'Tour',
            'foreign_key' => 'tour_id',
        ),
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'tour_id' => 'Тур',
            'date' => 'Дата тура',
            'quantity_adults' => 'Количество взрослых',
            'quantity_children' => 'Количество детей',
            'cost' => 'Стоимость',
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
            'number_order' => 'Номер заказа',
            'active' => 'Активность'
        );
    }

    public function form()
    {
        return new Form_Admin_Order($this);
    }

    public function save($validation)
    {
//        if (!$this->number_order) {
//            $this->number_order = mb_substr(md5(time()), 0, 8);
//        }

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'tour_id' => array(
            'type' => 'link',
            'route_str' => 'admin-order:edit?id=${id}',
            'title' => '${tour_name}'
        ),
        'date' => null,
        'fio' => null,
        'number_order' => null,
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

    public function get_tour_name()
    {
        return $this->tour->name;
    }

    public function sortable_fields()
    {
        return array(
            'tour_id',
            'date',
            'fio',
            'number_order'
        );
    }
}
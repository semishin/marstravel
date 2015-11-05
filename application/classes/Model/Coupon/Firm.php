<?php defined('SYSPATH') or die('No direct script access.');

class Model_Coupon_Firm extends ORM
{
    protected $_table_name = 'coupon_firms';

    protected $_belongs_to = array(
        'coupon' => array(
            'model' => 'Coupon',
            'foreign_key' => 'firm_id'
        ),
    );

    protected $_has_many_to_save = array(
        'tour' => array(
            'model'=> 'Tour',
            'foreign_key' => 'firm_id',
            'through'      => 'firm_tours',
            'far_key'      => 'tour_id',
        )
    );


    protected $_has_many = array(
        'tour' => array(
            'model'=> 'Tour',
            'foreign_key' => 'firm_id',
            'through'      => 'firm_tours',
            'far_key'      => 'tour_id',
        )
    );


    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'active' => 'Активность',
            'address' => 'Адрес',
            'description' => 'Описание',
            'contact' => 'Контакты',
            'requisites' => 'Реквизиты',
            'phone' => 'Телефон',
			'user_id' => 'Пользователь',
            'partner_id' => 'Партнер',
            'tour' => 'Туры',
            'start_name_certificate' => 'Начало наиминования сертификата'
        );
    }

    public function form()
    {
        return new Form_Admin_Coupon_Firm($this);
    }

    protected $_grid_columns = array(

        'name' => array(
            'type' => 'link',
            'route_str' =>  'admin-coupon_firm:edit?id=${id}',
            'title' => '${name}'
        ),
        'active' => 'bool',
        'address' => null,
        'contact' => null,
        'phone' => null,
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
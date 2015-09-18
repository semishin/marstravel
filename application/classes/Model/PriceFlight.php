<?php defined('SYSPATH') or die('No direct script access.');

class Model_PriceFlight extends ORM
{
    protected $_table_name = 'prices_flights';
    protected $_belongs_to = array(
        'tour' => array(
            'model'       => 'Tour',
            'foreign_key' => 'tour_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'price' => 'Цена',
            'start_date' => 'Начальная дата',
            'end_date' => 'Конечная дата',
            'active' => 'Активность',
            'total_places' => 'Всего мест',
            'free_places' => 'Осталось мест',
            'tour_id' => 'Тур'
        );
    }

    public function form()
    {
        return new Form_Admin_PriceFlight($this);
    }

    protected $_grid_columns = array(
        'price' => null,
        'start_date' => null,
        'end_date' => null,
        'total_places' => null,
        'free_places' => null,
        'active' => 'bool',
        'tour_id' => array(
            'type' => 'template',
            'template' => '${tour_name}'
        ),
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-priceflight:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-priceflight:delete?id=${id}',
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
            'price',
            'tour_id'
        );
    }

}
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tour extends ORM
{
    protected $_table_name = 'tours';

    protected $_belongs_to = array(

    );

    protected $_has_many_to_save = array(
        'excursion'    => array(
            'model'=> 'Excursion',
            'foreign_key' => 'tour_id',
            'through'      => 'tour_excursion',
            'far_key'      => 'excursion_id',
        )
    );

    protected $_has_many = array(
        'coupon' => array(
            'model' => 'Coupon',
            'foreign_key' => 'tour_id'
        ),
        'order' => array(
            'model' => 'Order',
            'foreign_key' => 'tour_id'
        ),
        'excursion'    => array(
            'model'=> 'Excursion',
            'foreign_key' => 'tour_id',
            'through'      => 'tour_excursion',
            'far_key'      => 'excursion_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
//            'cities' => 'Города',
            'price' => 'Стоимость',
            'slogan' => 'Слоган',
            'route' => 'Маршрут',
            'short_content' => 'Сокращенный контент',
            'content' => 'Контент',
            'main_image' => 'Главное изображение',
            'images' => 'Изображения',
            'active' => 'Активность',
            'included' => 'В стоимость входит',
            'excluded' => 'В стоимость не входит',
            'position' => 'Позиция',
            'url' => 'Ссылка',
            'd1_name' => '1 день заголовок',
            'd1_content' => '1 день описание',
            'd2_name' => '2 день заголовок',
            'd2_content' => '2 день описание',
            'd3_name' => '3 день заголовок',
            'd3_content' => '3 день описание',
            'd4_name' => '4 день заголовок',
            'd4_content' => '4 день описание',
            'd5_name' => '5 день заголовок',
            'd5_content' => '5 день описание',
            'd6_name' => '6 день заголовок',
            'd6_content' => '6 день описание',
            'd7_name' => '7 день заголовок',
            'd7_content' => '7 день описание',
            'd8_name' => '8 день заголовок',
            'd8_content' => '8 день описание',
            's_title' => 'SEO title',
            's_description' => 'SEO categorydescription',
            's_keywords' => 'SEO keywords'
        );
    }

    public function form()
    {
        return new Form_Admin_Tour($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-tour:edit?id=${id}',
            'title' => '${name}'
        ),
        'position' => null,
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-tour:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-tour:delete?id=${id}',
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
            'position',
            'active'
        );
    }
}
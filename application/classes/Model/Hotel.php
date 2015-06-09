<?php defined('SYSPATH') or die('No direct script access.');

class Model_Hotel extends ORM
{
    protected $_table_name = 'hotels';

    protected $_belongs_to = array(
        'city' => array(
            'model'       => 'City',
            'foreign_key' => 'city_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'city_id' => 'Город или курорт',
            'content' => 'Описание',
            'active' => 'Активность',
            'main_image' => 'Главное изображение',
            'images' => 'Изображения',
            'stars' => 'Кол-во звезд',
            'url' => 'URL',
            'link_site' => 'Ссылка на сайт',
            'link_booking' => 'Ссылка на букинг',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords'
        );
    }

    public function form()
    {
        return new Form_Admin_Hotel($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => null,
        'city_id' => array(
            'type' => 'template',
            'template' => '${city_name}'
        ),
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-hotel:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-hotel:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_city_name()
    {
        return $this->city->name;
    }

    public function sortable_fields()
    {
        return array(
            'name',
            'city_id',
            'active'
        );
    }
}
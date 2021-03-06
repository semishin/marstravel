<?php defined('SYSPATH') or die('No direct script access.');

class Model_Excursion extends ORM
{
    protected $_table_name = 'excursions';

    protected $_belongs_to = array(
        'city' => array(
            'model'       => 'City',
            'foreign_key' => 'city_id',
        ),
        'category' => array(
            'model'       => 'Excursion_Category',
            'foreign_key' => 'category_id',
        )
    );

    protected $_has_many_to_save = array(
        'tours'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'excursion_id',
            'through'      => 'tour_excursion',
            'far_key'      => 'tour_id',
        ),
        'tours_facultative'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'excursion_id',
            'through'      => 'tour_excursion_facultative',
            'far_key'      => 'tour_id',
        )
    );

    protected $_has_many = array(
        'tours'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'excursion_id',
            'through'      => 'tour_excursion',
            'far_key'      => 'tour_id',
        ),
        'tours_facultative'    => array(
            'model'=> 'Tour',
            'foreign_key' => 'excursion_id',
            'through'      => 'tour_excursion_facultative',
            'far_key'      => 'tour_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'city_id' => 'Город или курорт',
            'category_id' => 'Категория',
            'tours' => 'Туры',
            'content' => 'Описание',
            'active' => 'Активность',
            'main_image' => 'Главное изображение',
            'images' => 'Изображения',
            'url' => 'URL',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords',
            'tours_facultative' => 'Факультативные экскурсии'
        );
    }

    public function form()
    {
        return new Form_Admin_Excursion($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-excursion:edit?id=${id}',
            'title' => '${name}'
        ),
        'city_id' => array(
            'type' => 'template',
            'template' => '${city_name}'
        ),
        'category_id' => array(
            'type' => 'template',
            'template' => '${category_name}'
        ),
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-excursion:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-excursion:delete?id=${id}',
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

    public function get_category_name()
    {
        return $this->category->name;
    }

    public function sortable_fields()
    {
        return array(
            'name',
            'city_id',
            'category_id',
            'active'
        );
    }
}
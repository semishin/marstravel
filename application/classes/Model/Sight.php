<?php defined('SYSPATH') or die('No direct script access.');

class Model_Sight extends ORM
{
    protected $_table_name = 'sights';

    protected $_belongs_to = array(
        'city' => array(
            'model'       => 'City',
            'foreign_key' => 'city_id',
        ),
        'category' => array(
            'model'       => 'Sight_Category',
            'foreign_key' => 'category_id',
        )
    );

    protected $_has_many_to_save = array(
        'excursions'    => array(
            'model'=> 'Excursion',
            'foreign_key' => 'excursion_id',
            'through'      => 'sight_excursion',
            'far_key'      => 'sight_id',
        )
    );

    protected $_has_many = array(
        'excursions'    => array(
            'model'=> 'Excursion',
            'foreign_key' => 'excursion_id',
            'through'      => 'sight_excursion',
            'far_key'      => 'sight_id',
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'city_id' => 'Город или курорт',
            'category_id' => 'Категория',
            'content' => 'Описание',
            'active' => 'Активность',
            'main_image' => 'Главное изображение',
            'images' => 'Изображения',
            'excursions' => 'Экскурсии',
            'url' => 'URL',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
            's_keywords' => 'SEO keywords'
        );
    }

    public function form()
    {
        return new Form_Admin_Sight($this);
    }

    public function save($validation)
    {
        $this->md5_url = md5($this->url);

        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-sight:edit?id=${id}',
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
            'route_str' => 'admin-sight:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-sight:delete?id=${id}',
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
            'excursion',
            'active'
        );
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tour extends ORM
{
    protected $_table_name = 'tours';

//    protected $_belongs_to = array(
//        'category' => array(
//            'model'       => 'Service_Category',
//            'foreign_key' => 'category_id',
//        )
//    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Наименование',
            'price' => 'Стоимость',
            'short_content' => 'Сокращенный контент',
            'content' => 'Контент',
            'main_image' => 'Главное изображение',
            'images' => 'Изображения',
            'active' => 'Активность',
            'included' => 'В стоимость входит',
            'excluded' => 'В стоимость не входит',
            'position' => 'Позиция',
            'url' => 'Ссылка',
            '1d_name' => '1 день заголовок',
            '1d_content' => '1 день описание',
            '2d_name' => '2 день заголовок',
            '2d_content' => '2 день описание',
            '3d_name' => '3 день заголовок',
            '3d_content' => '3 день описание',
            '4d_name' => '4 день заголовок',
            '4d_content' => '4 день описание',
            '5d_name' => '5 день заголовок',
            '5d_content' => '5 день описание',
            '6d_name' => '6 день заголовок',
            '6d_content' => '6 день описание',
            '7d_name' => '7 день заголовок',
            '7d_content' => '7 день описание',
            '8d_name' => '8 день заголовок',
            '8d_content' => '8 день описание',
            's_title' => 'SEO title',
            's_description' => 'SEO description',
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
        'name' => null,
        'position' => null,
        'active' => null,
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
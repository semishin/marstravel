<?php defined('SYSPATH') or die('No direct script access.');

class Model_Review extends ORM
{
    protected $_table_name = 'reviews';

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'name' => 'Имя',
            'text' => 'Комментарий',
            'image' => 'Картинка',
            'created_at' => 'Дата создания',
            'tour_id' => 'Тур',
            'active' => 'Активность',
            'start_date' => 'Начало тура',
            'end_date' => 'Окончание тура',
            'rating' => 'Оценка',
        );
    }

    public function form()
    {
        return new Form_Admin_Review($this);
    }

    public function save($validation)
    {
        parent::save($validation);

    }

    protected $_grid_columns = array(
        'name' => array(
            'type' => 'link',
            'route_str' => 'admin-review:edit?id=${id}',
            'title' => '${name}'
        ),
        'created_at' => null,
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-review:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-review:delete?id=${id}',
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
            'id',
            'active'
        );
    }
}
<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Excursion extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $tours = ORM::factory('Tour')->order_by('name', 'ASC')->find_all();
        $tours_facultative = ORM::factory('Tour')->order_by('name', 'ASC')->find_all();

        $tours_list = array();
        foreach ($tours as $item) {
            $tours_list[$item->id] = $item->name;
        }

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('city_id', new CM_Field_Select_ORM(ORM::factory('City')), 2);
        $this->set_field('category_id', new CM_Field_Select_ORM(ORM::factory('Excursion_Category')), 4);
        $this->set_field('tours', new CM_Field_Manytomany($tours_list, $this->get_model()), 1);
        $this->set_field('tours_facultative', new CM_Field_Manytomany($tours_list, $this->get_model()), 1);
        $this->set_field('active', new CM_Field_Boolean(), 6);
        $this->set_field('main_image', new CM_Field_File(), 10);
        $this->set_field('images', new CM_Field_Multifile(),12);
        $this->set_field('url', new CM_Field_String(), 13);
        $this->set_field('content', new CM_Field_HTML(), 14);
        $this->set_field('s_title', new CM_Field_String(), 16);
        $this->set_field('s_description', new CM_Field_Text(), 18);
        $this->set_field('s_keywords', new CM_Field_Text(), 19);

        $fieldgroups = array(
            'Основные данные' => array('name', 'city_id', 'category_id', 'tours', 'tours_facultative', 'active', 'main_image', 'images', 'url', 'content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
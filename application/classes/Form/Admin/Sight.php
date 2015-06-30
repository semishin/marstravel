<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Sight extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('city_id', new CM_Field_Select_ORM(ORM::factory('City')), 2);
        $this->set_field('category_id', new CM_Field_Select_ORM(ORM::factory('Sight_Category')), 4);
        $this->set_field('active', new CM_Field_Boolean(), 6);
        $this->set_field('excursion', new CM_Field_Boolean(), 8);
        $this->set_field('main_image', new CM_Field_File(), 10);
        $this->set_field('images', new CM_Field_Multifile(),12);
        $this->set_field('url', new CM_Field_String(), 13);
        $this->set_field('content', new CM_Field_HTML(), 14);
        $this->set_field('s_title', new CM_Field_String(), 16);
        $this->set_field('s_description', new CM_Field_Text(), 18);
        $this->set_field('s_keywords', new CM_Field_Text(), 19);

        $fieldgroups = array(
            'Основные данные' => array('name', 'city_id', 'category_id', 'active', 'excursion', 'main_image', 'images', 'url', 'content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
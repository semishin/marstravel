<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Hotel extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('city_id', new CM_Field_Select_ORM(ORM::factory('City')), 2);
        $this->set_field('active', new CM_Field_Boolean(), 4);
        $this->set_field('stars', new CM_Field_Select(array(1 => '1 звезда', 2 => '2 звезды', 3 => '3 звезды', 4 => '4 звезды', 5 => '5 звезд')), 5);
        $this->set_field('main_image', new CM_Field_File(), 6);
        $this->set_field('images', new CM_Field_Multifile(),7);
        $this->set_field('url', new CM_Field_String(), 8);
        $this->set_field('link_site', new CM_Field_String(), 9);
        $this->set_field('link_booking', new CM_Field_String(), 10);
        $this->set_field('email', new CM_Field_String(), 11);
        $this->set_field('phone', new CM_Field_String(), 12);
        $this->set_field('address', new CM_Field_String(), 13);
        $this->set_field('content', new CM_Field_HTML(), 14);
        $this->set_field('short_content', new CM_Field_HTML(), 15);
        $this->set_field('s_title', new CM_Field_String(), 16);
        $this->set_field('s_description', new CM_Field_Text(), 18);
        $this->set_field('s_keywords', new CM_Field_Text(), 19);

        $fieldgroups = array(
            'Основные данные' => array('name', 'city_id', 'active', 'stars', 'main_image', 'images', 'url', 'link_site', 'link_booking', 'email', 'phone', 'address', 'content', 'short_content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
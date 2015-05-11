<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Brief extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 1);
        $this->set_field('email', new CM_Field_String(), 3);
        $this->set_field('phone', new CM_Field_String(), 5);
        $this->set_field('core', new CM_Field_Text(), 7);
        $this->set_field('type', new CM_Field_Array(
            new CM_Field_String()
        ), 9);
        $this->set_field('purpose', new CM_Field_Array(
            new CM_Field_String()
        ), 11);
        $this->set_field('brand', new CM_Field_Text(), 13);
        $this->set_field('example', new CM_Field_Text(), 15);
        $this->set_field('section', new CM_Field_Array(
            new CM_Field_String()
        ), 17);
        $this->set_field('language', new CM_Field_Array(
            new CM_Field_String()
        ), 19);
        $this->set_field('style', new CM_Field_Array(
            new CM_Field_String()
        ), 21);
        $this->set_field('budget', new CM_Field_Text(), 23);
        $this->set_field('additional', new CM_Field_Array(
            new CM_Field_String()
        ), 25);

        $fieldgroups = array(
            'Основные данные' => array('name', 'email', 'phone', 'core'),
            'Подробности' => array('type', 'purpose', 'brand', 'example', 'section', 'language', 'style', 'budget', 'additional'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

/**

 * @version SVN: $Id:$

 */



class Form_Filter_Sight extends CM_Form_Abstract

{

    protected function init()

    {

        $this->add_plugin(new CM_Form_Plugin_ORM_Labels());

        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Like('name'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('city_id'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('category_id'));

        $this->set_field('name', new CM_Field_String());
        $this->set_field('city_id',  new CM_Field_Select_ORM(ORM::factory('City')));
        $this->set_field('category_id',  new CM_Field_Select_ORM(ORM::factory('Sight_Category')));

        $this->set_method('get');

    }

}
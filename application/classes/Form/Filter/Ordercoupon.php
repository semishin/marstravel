<?php defined('SYSPATH') or die('No direct script access.');

/**

 * @version SVN: $Id:$

 */



class Form_Filter_Ordercoupon extends CM_Form_Abstract

{

    protected function init()

    {

        $this->add_plugin(new CM_Form_Plugin_ORM_Labels());

        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Like('fio'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Like('number_order'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('tour_id'));

        $this->set_field('fio', new CM_Field_String());
        $this->set_field('number_order', new CM_Field_String());
        $this->set_field('tour_id',  new CM_Field_Select_ORM(ORM::factory('Tour')));

        $this->set_method('get');

    }

}
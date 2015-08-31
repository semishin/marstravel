<?php defined('SYSPATH') or die('No direct script access.');

/**

 * @version SVN: $Id:$

 */



class Form_Filter_Coupon extends CM_Form_Abstract

{

    protected function init()

    {

        $this->add_plugin(new CM_Form_Plugin_ORM_Labels());

        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('firm_id'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Like('code'));
        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('tour_id'));

        $this->set_field('firm_id',  new CM_Field_Select_ORM(ORM::factory('Coupon_Firm')));
        $this->set_field('code', new CM_Field_String());
        $this->set_field('tour_id',  new CM_Field_Select_ORM(ORM::factory('Tour')));


        $this->set_method('get');

    }

}
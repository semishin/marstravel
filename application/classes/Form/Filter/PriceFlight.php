<?php defined('SYSPATH') or die('No direct script access.');

/**

 * @version SVN: $Id:$

 */



class Form_Filter_PriceFlight extends CM_Form_Abstract

{

    protected function init()

    {

        $this->add_plugin(new CM_Form_Plugin_ORM_Labels());

        $this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('tour_id'));
		$this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('start_date'));
		$this->add_plugin(new CM_Form_Plugin_ORM_Filter_Equals('end_date'));
		
		
		$this->set_field('start_date',  new CM_Field_Date('start_date'));
		$this->set_field('end_date',  new CM_Field_Date('end_date'));
        $this->set_field('tour_id',  new CM_Field_Select_ORM(ORM::factory('Tour')));

        $this->set_method('get');

    }

}
<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Coupon extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());
		
		
		$this->set_field('active_firm', new CM_Field_Boolean(), 0);
        $this->set_field('activate_phone', new CM_Field_Boolean(), 1);
		$this->set_field('active', new CM_Field_Boolean(), 2);
        $this->set_field('manager_mars', new CM_Field_String(), 10);
        $this->set_field('date_phone', new CM_Field_Date(), 20);
        $this->set_field('call_back_date', new CM_Field_Date(), 25);
        $this->set_field('status_work_client', new CM_Field_String(), 30);
        $this->set_field('contract_signature', new CM_Field_Date(), 40);
        $this->set_field('send_contract_email', new CM_Field_Date(), 50);
        $this->set_field('date_get_order', new CM_Field_Date(), 60);
        $this->set_field('send_all_document', new CM_Field_Date(), 70);
        
        $this->set_field('review', new CM_Field_Text(), 90);
        $this->set_field('sent_other_tour', new CM_Field_Boolean(), 100);
        $this->set_field('code', new CM_Field_String(), 110);
        $this->set_field('created_at', new CM_Field_String(), 115);
        $this->set_field('firm_id', new CM_Field_Select_ORM(ORM::factory('Coupon_Firm')), 120);
        $this->set_field('tour_id', new CM_Field_Select_ORM(ORM::factory('Tour')), 130);
        $this->set_field('name', new CM_Field_String(), 140);
        $this->set_field('date_birth', new CM_Field_String(), 150);
        $this->set_field('phone', new CM_Field_String(), 160);
        $this->set_field('email', new CM_Field_String(), 170);
        $this->set_field('name_manager', new CM_Field_String(), 180);



        $this->get_field('code')->set_attributes(array('disabled'));
        $this->get_field('firm_id')->set_attributes(array('disabled'));
        $this->get_field('tour_id')->set_attributes(array('disabled'));
        $this->get_field('created_at')->set_attributes(array('disabled'));

        

    }
}
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

        $this->set_field('code', new CM_Field_String(), 0);
        $this->set_field('firm_id', new CM_Field_Select_ORM(ORM::factory('Coupon_Firm')), 2);
        $this->set_field('tour_id', new CM_Field_Select_ORM(ORM::factory('Tour')), 4);
        $this->set_field('active', new CM_Field_Boolean(), 6);
        $this->set_field('active_firm', new CM_Field_Boolean(), 10);

    }
}
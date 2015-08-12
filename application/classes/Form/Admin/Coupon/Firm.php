<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Coupon_Firm extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('active', new CM_Field_Boolean(), 2);
        $this->set_field('phone', new CM_Field_String(), 4);
        $this->set_field('address', new CM_Field_String(), 6);
        $this->set_field('contact', new CM_Field_String(), 8);
        $this->set_field('description', new CM_Field_HTML(), 10);
        $this->set_field('requisites', new CM_Field_HTML(), 10);

    }
}
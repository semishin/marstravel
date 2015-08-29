<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_PriceFlight extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('price', new CM_Field_String(), 2);
        $this->set_field('start_date', new CM_Field_Date(), 4);
        $this->set_field('end_date', new CM_Field_Date(), 6);
        $this->set_field('total_places', new CM_Field_String(), 8);
        $this->set_field('free_places', new CM_Field_String(), 10);
        $this->set_field('active', new CM_Field_Boolean(), 12);

    }
}
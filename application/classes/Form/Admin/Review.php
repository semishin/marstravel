<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Review extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('tour_id', new CM_Field_Select_ORM(ORM::factory('Tour')), 10);
        $this->set_field('start_date', new CM_Field_Date(), 11);
        $this->set_field('end_date', new CM_Field_Date(), 12);
        $this->set_field('rating', new CM_Field_String(), 15);
        $this->set_field('text', new CM_Field_HTML(), 20);
        $this->set_field('image', new CM_Field_Multifile(),30);
        $this->set_field('active', new CM_Field_Boolean(), 40);
    }

}
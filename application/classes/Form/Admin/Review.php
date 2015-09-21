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
        $this->set_field('text', new CM_Field_HTML(), 4);
        $this->set_field('image', new CM_Field_File(), 8);
        $this->set_field('active', new CM_Field_Boolean(), 33);
    }

}
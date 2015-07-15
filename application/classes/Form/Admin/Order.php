<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Order extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('tour_id', new CM_Field_Select_ORM(ORM::factory('Tour')), 1);
        $this->set_field('date', new CM_Field_String(), 3);
        $this->set_field('quantity_adults', new CM_Field_String(), 5);
        $this->set_field('quantity_children', new CM_Field_String(), 7);
        $this->set_field('cost', new CM_Field_String(), 9);
        $this->set_field('fio', new CM_Field_String(), 11);
        $this->set_field('dob', new CM_Field_String(), 13);
        $this->set_field('passport', new CM_Field_String(), 15);
        $this->set_field('validity', new CM_Field_String(), 17); //срок действия
        $this->set_field('issuedby', new CM_Field_String(), 19);  //выдан
        $this->set_field('email', new CM_Field_String(), 21);
        $this->set_field('phone', new CM_Field_String(), 23);
        $this->set_field('agreement', new CM_Field_Boolean(), 25); //согласие
        $this->set_field('payment', new CM_Field_Select(array(1 => 'Оплатить в офисе', 2 => 'Картой онлайн', 3 => 'Терминалы', 4 => 'Отделения сотовой связи')), 27);
        $this->set_field('surcharge', new CM_Field_Boolean(), 29); //доплата
        $this->set_field('number_order', new CM_Field_String(), 31);
        $this->set_field('active', new CM_Field_Boolean(), 33);
    }
}
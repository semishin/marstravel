<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @version SVN: $Id:$
 * @author o.zgolich
 */

class Form_Admin_Tour extends CM_Form_Abstract
{
    protected function init()
    {
        $this->add_plugin(new CM_Form_Plugin_ORM());

        $this->set_field('name', new CM_Field_String(), 0);
        $this->set_field('price', new CM_Field_String(), 2);
        $this->set_field('short_content', new CM_Field_HTML(), 4);
        $this->set_field('content', new CM_Field_HTML(), 6);
        $this->set_field('main_image', new CM_Field_File(),8);
        $this->set_field('images', new CM_Field_Multifile(),10);
        $this->set_field('active', new CM_Field_Boolean(), 12);
        $this->set_field('included', new CM_Field_Text(), 14);
        $this->set_field('excluded', new CM_Field_Text(), 16);
        $this->set_field('position', new CM_Field_Int(), 18);
        $this->set_field('url', new CM_Field_String(), 20);

        $this->set_field('1d_name', new CM_Field_String(), 22);
        $this->set_field('1d_content', new CM_Field_HTML(), 24);
        $this->set_field('2d_name', new CM_Field_String(), 26);
        $this->set_field('2d_content', new CM_Field_HTML(), 28);
        $this->set_field('3d_name', new CM_Field_String(), 30);
        $this->set_field('3d_content', new CM_Field_HTML(), 32);
        $this->set_field('4d_name', new CM_Field_String(), 34);
        $this->set_field('4d_content', new CM_Field_HTML(), 36);
        $this->set_field('5d_name', new CM_Field_String(), 38);
        $this->set_field('5d_content', new CM_Field_HTML(), 40);
        $this->set_field('6d_name', new CM_Field_String(), 42);
        $this->set_field('6d_content', new CM_Field_HTML(), 44);
        $this->set_field('7d_name', new CM_Field_String(), 46);
        $this->set_field('7d_content', new CM_Field_HTML(), 48);
        $this->set_field('8d_name', new CM_Field_String(), 50);
        $this->set_field('8d_content', new CM_Field_HTML(), 52);

        $this->set_field('s_title', new CM_Field_String(), 54);
        $this->set_field('s_description', new CM_Field_Text(), 56);
        $this->set_field('s_keywords', new CM_Field_Text(), 58);

        $fieldgroups = array(
            'Основные данные' => array( 'name',
                                        'price',
                                        'short_content',
                                        'content',
                                        'main_image',
                                        'images',
                                        'active',
                                        'included',
                                        'excluded',
                                        'position',
                                        'url',
                                        '1d_name',
                                        '1d_content',
                                        '2d_name',
                                        '2d_content',
                                        '3d_name',
                                        '3d_content',
                                        '4d_name',
                                        '4d_content',
                                        '5d_name',
                                        '5d_content',
                                        '6d_name',
                                        '6d_content',
                                        '7d_name',
                                        '7d_content',
                                        '8d_name',
                                        '8d_content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
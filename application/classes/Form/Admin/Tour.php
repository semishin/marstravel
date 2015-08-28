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

//        $cities = ORM::factory('City')->order_by('name', 'ASC')->find_all();
//
//        $cities_list = array();
//        foreach ($cities as $item) {
//            $cities_list[$item->id] = $item->name;
//        }

        $this->set_field('name', new CM_Field_String(), 0);
//        $this->set_field('cities', new CM_Field_Manytomany($cities_list, $this->get_model()), 1);
        $this->set_field('price', new CM_Field_String(), 1);
        $this->set_field('price_child', new CM_Field_String(), 2);
        $this->set_field('slogan', new CM_Field_String(), 3);
        $this->set_field('route', new CM_Field_Array(new CM_Field_Select_ORM(ORM::factory('City'))), 4);
        $this->set_field('short_content', new CM_Field_HTML(), 5);
        $this->set_field('content', new CM_Field_HTML(), 6);
        $this->set_field('main_image', new CM_Field_File(),8);
        $this->set_field('images', new CM_Field_Multifile(),10);
        $this->set_field('active', new CM_Field_Boolean(), 12);
        $this->set_field('included', new CM_Field_HTML(), 14);
        $this->set_field('excluded', new CM_Field_HTML(), 16);
        $this->set_field('position', new CM_Field_Int(), 18);
        $this->set_field('url', new CM_Field_String(), 20);
        $this->set_field('d1_name', new CM_Field_String(), 22);
        $this->set_field('d1_content', new CM_Field_HTML(), 24);
        $this->set_field('d2_name', new CM_Field_String(), 26);
        $this->set_field('d2_content', new CM_Field_HTML(), 28);
        $this->set_field('d3_name', new CM_Field_String(), 30);
        $this->set_field('d3_content', new CM_Field_HTML(), 32);
        $this->set_field('d4_name', new CM_Field_String(), 34);
        $this->set_field('d4_content', new CM_Field_HTML(), 36);
        $this->set_field('d5_name', new CM_Field_String(), 38);
        $this->set_field('d5_content', new CM_Field_HTML(), 40);
        $this->set_field('d6_name', new CM_Field_String(), 42);
        $this->set_field('d6_content', new CM_Field_HTML(), 44);
        $this->set_field('d7_name', new CM_Field_String(), 46);
        $this->set_field('d7_content', new CM_Field_HTML(), 48);
        $this->set_field('d8_name', new CM_Field_String(), 50);
        $this->set_field('d8_content', new CM_Field_HTML(), 52);

        $this->set_field('s_title', new CM_Field_String(), 54);
        $this->set_field('s_description', new CM_Field_Text(), 56);
        $this->set_field('s_keywords', new CM_Field_Text(), 58);

        $fieldgroups = array(
            'Основные данные' => array( 'name',
//                                        'cities',
                                        'price',
                                        'price_child',
                                        'slogan',
                                        'route',
                                        'short_content',
                                        'content',
                                        'main_image',
                                        'images',
                                        'active',
                                        'included',
                                        'excluded',
                                        'position',
                                        'url',
                                        'd1_name',
                                        'd1_content',
                                        'd2_name',
                                        'd2_content',
                                        'd3_name',
                                        'd3_content',
                                        'd4_name',
                                        'd4_content',
                                        'd5_name',
                                        'd5_content',
                                        'd6_name',
                                        'd6_content',
                                        'd7_name',
                                        'd7_content',
                                        'd8_name',
                                        'd8_content'),
            'Мета данные' => array('s_title', 's_description', 's_keywords'),
        );

        $this->add_plugin(new CM_Form_Plugin_Fieldgroups($fieldgroups));
    }
}
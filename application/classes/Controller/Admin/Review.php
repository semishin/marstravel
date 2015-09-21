<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Review extends Controller_Crud
{
    protected $_model = 'Review';
    public function before_fetch(ORM $item)
    {
        if (isset($_GET['cancel_filter']))
        {
            $this->redirect('/' . Extasy_Url::url_to_route($this->get_index_route()));
        }
        $filter_form = new Form_Filter_Tour($item);
        if (isset($_GET['filter']))
        {
            $filter_form->submit();
        }
        $this->template->filter_form = $filter_form;
        return parent::before_fetch($item);
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Order extends Controller_Crud
{
    protected $_model = 'Order';
    public function before_fetch(ORM $item)
    {
        if (isset($_GET['cancel_filter']))
        {
            $this->redirect('/' . Extasy_Url::url_to_route($this->get_index_route()));
        }
        $filter_form = new Form_Filter_Order($item);
        if (isset($_GET['filter']))
        {
            $filter_form->submit();
        }
        $this->template->filter_form = $filter_form;
        return parent::before_fetch($item);
    }

    public function action_view()
    {
        $order = ORM::factory('Order', $this->request->param('id'));
        $this->template->order = $order;
    }
}

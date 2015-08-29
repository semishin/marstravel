<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_User extends Controller_Site_DefaultUserController
{
    public function action_index()
    {
        $this->set_metatags_and_content('', 'page');
        $tour = ORM::factory('Tour')
            ->where('active','=',1)
            ->order_by('position','asc')
            ->find_all();
        $this->template->s_title = 'Туры';
        $this->template->tour = $tour;
        $this->template->set_layout('layout/site/global_user');
    }

    public function action_login()
    {
        if ($this->request->is_ajax()) {
            $email = $this->request->post('email');
            $password = $this->request->post('password');
            if($this->request->post('remember')){
                $remember = true;
            } else {
                $remember = false;
            }
            if( ! Auth::instance()->login($email, $password, $remember))
            {
                $result = 'fail';
            } else {
                $result = 'success';
            }
            exit(json_encode(array('message' => $result)));
        }
        $this->forward_404();
    }

    public function action_createCoupon()
    {
        $tour_id = $this->param('id');

            $code_coupon = substr(md5(microtime()), rand(0, 5), rand(11, 16));

            $tour = ORM::factory('Tour')
                ->where('id','=', $tour_id)
                ->find();

        if (!$tour->id) {
            $this->forward_404();
        }
        $firm_id = ORM::factory('Coupon_Firm')
            ->where('id','=', Auth::instance()->get_user()->id)
            ->find();
            $user_id = Auth::instance()->get_user()->id;
            $coupon = ORM::factory('Coupon');
            $coupon->code = $code_coupon;
            $coupon->tour_id = $tour_id;
            $coupon->active = 1;
            $coupon->user_id = $user_id;
            $coupon->firm_id = $firm_id;
            $coupon->save();

            $pagePdf = View::factory('site/pdf/index', array(
                'code' => $code_coupon,
                'tour' => $tour
            ))->render();
            $pdfName = $code_coupon.'-'.$tour_id.'.pdf';
            $dirPdf = $_SERVER['DOCUMENT_ROOT'].'/coupons/';
            $mpdf = new mPDF('blank', 'A4', '8', 'Arial', 15, 5, 7, 7, 10, 10);
            $mpdf->WriteHTML($pagePdf);
            $mpdf->Output($dirPdf.$pdfName, 'F');

        if (ob_get_level()) {
            ob_end_clean();
        }
        // заставляем браузер показать окно сохранения файла
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($dirPdf.$pdfName));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($dirPdf.$pdfName));
        // читаем файл и отправляем его пользователю
        readfile($dirPdf.$pdfName);
        exit;

    }

    public function action_profile()
    {
        $profile = ORM::factory('Coupon_Firm')
            ->where('user_id','=', Auth::instance()->get_user()->id)
            ->find();
        $this->template->profile = $profile;
        $this->template->name =  Auth::instance()->get_user()->name;
        $this->template->email =  Auth::instance()->get_user()->email;
        $this->template->s_title = 'Профиль';
        $this->template->set_layout('layout/site/global_user');
    }

    public function action_save()
    {
        if ($this->request->is_ajax()) {
            $profile = ORM::factory('Coupon_Firm')->where('user_id', '=',  Auth::instance()->get_user()->id)->find();
            $profile->name = $this->request->post('name');
            $profile->phone = $this->request->post('phone');
            $profile->contact = $this->request->post('contact');
            $profile->address = $this->request->post('address');
            $profile->requisites = $this->request->post('requisites');
            $profile->description = $this->request->post('description');
            $profile->save();
            exit(json_encode(array('message' => 'success')));
            }
        $this->forward_404();
    }

    public function action_all_coupons()
    {
        $this->set_metatags_and_content('all_coupons', 'page');
        $page =  $_GET['page'];
        if(!$page) {
            $page = 1;
        }
        $limit = 20;
        $offset = $page * $limit - $limit;
        $tour_url = $this->param('url');
        $tour = ORM::factory('Tour')
            ->where('url','=',$tour_url)
            ->find();
        $coupon = ORM::factory('Coupon')
            ->where('tour_id', '=', $tour->id)
            ->where('user_id', '=',  Auth::instance()->get_user()->id)
            ->offset($offset)->limit($limit)
            ->find_all();
        $total_coupon = ORM::factory('Coupon')
            ->where('tour_id', '=', $tour->id)
            ->where('user_id', '=',  Auth::instance()->get_user()->id)
            ->count_all();
        $this->template->tour = $tour;
        $this->template->coupon = $coupon;
        $total_page = ceil($total_coupon / $limit);
        $this->template->s_title = 'Купоны';
        $this->template->pagination =
            Pagination::factory(
                array(
                    'total_items'    => $total_page,
                    'items_per_page' => '',
                    'view' => 'extasy/pagination/basic',
                    'current_page'   => array('source' => 'query_string', 'key' => 'page'),
                )
            )->render();
        $this->template->set_layout('layout/site/global_user');
    }

}

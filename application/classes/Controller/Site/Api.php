<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Api extends Controller_Site_DefaultUserController
{
    public function action_certificate()
    {
        $code = $this->request->post('code');

        $firm = ORM::factory('Coupon_Firm')
                ->where('code','=', $code)
                ->find();

        if (!$firm) {
            exit(json_encode(array('error' => 'bad user')));
        } else {
            $tour_id = $this->request->post('tour_id');
            $email = $this->request->post('email');
            $name = $this->request->post('name');
            $phone = $this->request->post('phone');
            $date_birth = $this->request->post('date_birth');
            $name_manager = $this->request->post('name_manager');

            if ($tour_id && $email && $name && $phone && $date_birth && $name_manager) {

                $checkDuplicate = ORM::factory('Coupon')->where('email', '=', $email)
                                    ->where('phone', '=', $phone)
                                    ->where('created_at', '=', date('Y-m-d'))
                                    ->find();

                if (!$checkDuplicate->id) {

                    $tour = ORM::factory('Tour')
                        ->where('id', '=', $tour_id)
                        ->find();


                    $firm = ORM::factory('Coupon_Firm')
                        ->where('code','=', $code)
                        ->find();

                    $partner = ORM::factory('Partner')
                        ->where('id', '=', $firm->partner_id)
                        ->find();

                    $code_coupon = $this->generateCode();
                    $coupon = ORM::factory('Coupon');
                    $coupon->tour_id = $tour_id;
                    $coupon->active = 0;
                    $coupon->active_firm = 0;
                    $coupon->activate_phone = 0;
                    $coupon->user_id = $firm->user_id;
                    $coupon->firm_id = $firm->id;
                    $coupon->email = $email;
                    $coupon->name = $name;
                    $coupon->phone = $phone;
                    $coupon->name_manager = $name_manager;
                    $coupon->date_birth = $date_birth;
                    $coupon->code = $code_coupon;
                    $coupon->save();

                    if ($tour->plus == 1) {
                        $certificate_content = ORM::factory('Config')
                            ->where('key', '=', 'content_plus')
                            ->find();
                        $certificate_rule = ORM::factory('Config')
                            ->where('key', '=', 'rule_plus')
                            ->find();
                    } else {
                        $certificate_content = ORM::factory('Config')
                            ->where('key', '=', 'content')
                            ->find();
                        $certificate_rule = ORM::factory('Config')
                            ->where('key', '=', 'rule')
                            ->find();
                    }

                    $pagePdf = View::factory('site/pdf/index', array(
                        'code' => $code_coupon,
                        'tour' => $tour,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'certificate_content' => $certificate_content->value,
                        'certificate_rule' => $certificate_rule->value,
                        'background' => $partner->background,
                        'partner_name' => $partner->name,
                        'partner_image' => $partner->image,
                        'plus' => $tour->plus,
                    ))->render();

                    $pdfName = $code_coupon . '-' . $tour_id . '.pdf';
                    $dirPdf = $_SERVER['DOCUMENT_ROOT'] . '/coupons/';
                    $mpdf = new mPDF('blank', 'A4', '8', 'Arial', 0, 0, 0, 0, 0, 0);
                    $mpdf->WriteHTML($pagePdf);
                    $mpdf->Output($dirPdf . $pdfName, 'F');

                    if (ob_get_level()) {
                        ob_end_clean();
                    }

                    $urlFile = 'http://'.$_SERVER['SERVER_NAME'].'/coupons/'.$pdfName;

                    exit(json_encode(array('id' => $tour_id,
                                            'code' => $code_coupon,
                                            'name' => $name,
                                            'email' => $email,
                                            'date_birth' => $date_birth,
                                            'phone' => $phone,
                                            'name_manager' => $name_manager,
                                            'file' => $urlFile,
                                            'created_at' => date('Y-m-d'))));
                } else {
                    exit(json_encode(array('error' => 'bad user')));
                }
            } else {
                exit(json_encode(array('error' => 'bad user')));
            }
        }
    }

    public function generateCode()
    {
        $code_coupon = rand(11111111, 99999999);
        $check_rand_code = ORM::factory('Coupon')
            ->where('code','=', $code_coupon)
            ->find();
        if ($check_rand_code->code) {
            $this->generateCode();
        } else {
            return $code_coupon;
        }
    }

    public function action_list()
    {
        $code = $this->request->post('code');

        $firm = ORM::factory('Coupon_Firm')
            ->where('code', '=', $code)
            ->find();

        if (!$firm->id) {
            exit(json_encode(array('error' => 'bad user')));
        } else {
            $coupon = ORM::factory('Coupon')
                ->where('firm_id', '=',  $firm->id)
                ->find_all();
            $data = [];
            foreach($coupon as $key  =>  $item){
                $urlFile = 'http://'.$_SERVER['SERVER_NAME'].'/coupons/'.$item->code.'-'.$item->id.'.pdf';
                $data[$key]['id'] = $item->id;
                $data[$key]['code'] = $item->code;
                $data[$key]['name'] = $item->name;
                $data[$key]['email'] = $item->email;
                $data[$key]['date_birth'] = $item->date_birth;
                $data[$key]['phone'] = $item->phone;
                $data[$key]['name_manager'] = $item->name_manager;
                $data[$key]['file'] = $urlFile;
                $data[$key]['created_at'] = $item->created_at;
            }

            $coupon = json_encode($data);
            exit(json_encode($coupon));

        }
    }

    public function action_item()
    {
        $code = $this->request->post('code');

        $firm = ORM::factory('Coupon_Firm')
            ->where('code', '=', $code)
            ->find();

        if (!$firm) {
            exit(json_encode(array('error' => 'bad user')));
        } else {
            $id = $this->request->post('id');

            $coupon = ORM::factory('Coupon')->where('id', '=', $id)->where('firm_id', '=', $firm->id)->find();

            if (!$coupon->id) {
                exit(json_encode(array('error' => 'bad user')));
            }

            $urlFile = 'http://'.$_SERVER['SERVER_NAME'].'/coupons/'.$coupon->code.'-'.$coupon->id.'.pdf';

            exit(json_encode(array('id' => $coupon->id,
                'code' => $coupon->code,
                'name' => $coupon->name,
                'email' => $coupon->email,
                'date_birth' => $coupon->date_birth,
                'phone' => $coupon->phone,
                'name_manager' => $coupon->name_manager,
                'file' => $urlFile,
                'created_at' => $coupon->created_at)));
        }
    }

}

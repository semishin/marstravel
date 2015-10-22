<?php defined('SYSPATH') or die('No direct script access.');

class Model_Coupon extends ORM
{
    protected $_table_name = 'coupons';

    protected $_belongs_to = array(
        'firm' => array(
            'model'       => 'Coupon_Firm',
            'foreign_key' => 'firm_id',
        ),
        'tour' => array(
            'model'       => 'Tour',
            'foreign_key' => 'tour_id',
        )
    );

    protected $_has_many = array(
        'ordercoupon' => array(
            'model' => 'Ordercoupon',
            'foreign_key' => 'coupon_id'
        )
    );

    public function labels()
    {
        return array(
            'id' => 'Идентификатор',
            'code' => 'Номер сертификата',
            'firm_id' => 'Фирма',
            'tour_id' => 'Тур',
            'active' => 'Сертификат использован',
            'activate_phone' => 'Активирован вручную',
            'active_firm' => 'Активирован на сайте',
            'date_phone' => 'Дата звонка (заявки)',
            'status_work_client' => 'Статус работы с клиентом',
            'contract_signature' => 'Дата подписания договора в офисе',
            'send_contract_email' => 'Дата отправления договора клиенту по email',
            'sent_other_tour' => 'Высланы ли другие предложения Marstravel',
            'review' => 'Отзыв клиента',
            'date_get_order' => 'Дата получения договора, подписанного клиентом',
            'manager_mars' => 'Ф.И. Менеджера , принявшего  звонок (заявку)',
            'send_all_document' => 'Дата оправления клиенту  всех документов необходимых для использования сертификата',
            'created_at' => 'Дата выдачи сертификата',
            'name' => 'ФИО владельца сертификата',
            'date_birth' => 'Дата рождения владельца сертификата',
            'phone' => 'Телефон владельца сертификата',
            'email' => 'Email владельца сертификата',
            'name_manager' => 'ФИО менеджера, выдавшего сертификат',
			'tour_name' => 'Тур'
        );
    }

    public function form()
    {
        return new Form_Admin_Coupon($this);
    }

    protected $_grid_columns = array(
        'activate_phone' => 'bool',
		'active_firm' => 'bool',
		'code' => null,
		'created_at' => null,
		'tour_name' => null,
		'name' => null,
		'date_birth' => null,
        'active' => 'bool',
        'edit' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon:edit?id=${id}',
            'title' => '<i class="fa fa-edit"></i>',
            'color' => 'green',
            'alternative' => 'Редактировать'
        ),
        'delete' => array(
            'width' => '40',
            'type' => 'link',
            'route_str' => 'admin-coupon:delete?id=${id}',
            'title' => '<i class="fa fa-trash-o"></i>',
            'alternative' => 'Удалить',
            'color' => 'red',
            'confirm' => 'Вы уверены?'
        )
    );

    public function get_firm_name()
    {
        return $this->firm->name;
    }

    public function get_status_name()
    {
        switch($this->active) {
            case '0':
                $status_name = '<span class="label label-info">Новый</span>';
                break;
            case '1':
                $status_name = '<span class="label label-primary">Подтверждён</span>';
                break;
        }
        return $status_name;
    }

    public function get_tour_name()
    {
        return $this->tour->name;
    }

    public function sortable_fields()
    {
        return array(
            'code',
            'firm_id',
            'tour_id',
            'active'
        );
    }

    public function save($validation)
    {
        parent::save($validation);
        if ($this->active == 1) {
            $ordercoupon = ORM::factory('Ordercoupon', $this->id);
            if($ordercoupon->coupon_id) {
                $ordercoupon->status = 5;
                $ordercoupon->update();
            }
        }
    }
}
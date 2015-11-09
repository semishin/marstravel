<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Statistic extends Controller_Crud
{
    protected $_model = 'Statistics';
    public function action_index()
    {
        $PDO = ORM::factory('Coupon')->PDO();

        $queryActive = "(SELECT COUNT(coupons.id) FROM coupons
                           WHERE coupons.activate_phone = 1) as 'count_activated'";
        $queryUsed = "(SELECT COUNT(coupons.id) FROM coupons
                        WHERE coupons.active = 1) as 'count_used'";

        $query = "SELECT coupon_firms.name,
                    COUNT(coupons.id) as count_total,
                    $queryActive,
                    $queryUsed
                    FROM coupons
                    LEFT JOIN coupon_firms ON coupon_firms.id = coupons.firm_id
                    GROUP BY coupons.firm_id";

        $coupons = $PDO->query($query)->fetchAll(PDO::FETCH_ASSOC);

        $this->template->coupons = $coupons;


    }
}

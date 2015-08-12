<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/user"><i class="icon icon_turkey"></i><span>Купоны</span></a></li>
                            <li><a href="/user/profile"><i class="icon icon_attractions"></i><span>Профиль</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h2>Купоны</h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>Наименование тура</th>
                    <th>Купон</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($tour as $item) {
                    $coupon = ORM::factory('Coupon')
                        ->where('tour_id','=',$item->id)
                        ->count_all();
                    ?>
                    <tr>
                        <td><a href="/user/all_coupons/<?php echo $item->url;?>" target="_blank"><?php echo $item->name;?></a>  (<?php echo $coupon?>)</td>
                        <td><a href="/user/create_coupon/<?php echo $item->id;?>" target="_blank"><span class="label label-success" style="font-size: 12px;">Сгенерировать купон</span></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/user" class="active"><i class="icon icon_turkey"></i><span>Сертификаты</span></a></li>
                            <li><a href="/user/profile"><i class="icon icon_attractions"></i><span>Профиль</span></a></li>
                        </ul>
                        <p>
                            <a href="/auth/logout" class="black_btn logout_btn">Выйти</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h2>Сертификаты</h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>Наименование тура</th>
                    <th>Сертификат</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($tour as $item) {
                    $coupon = ORM::factory('Coupon')
                        ->where('tour_id','=',$item->id)
                        ->where('user_id','=', Auth::instance()->get_user()->id)
                        ->count_all();
                    ?>
                    <tr>
                        <td><a href="/user/all_coupons/<?php echo $item->url;?>" target="_blank"><?php echo $item->name;?></a>  <span class="add_quantity">(<?php echo $coupon?>)</span></td>
                        <td><a href="#generate_code" class="generate_code" data-quantity="<?php echo $coupon;?>" data-tour_id="<?php echo $item->id?>" data-tour_name="<?php echo $item->name?>" target="_blank"><span class="label label-success" style="font-size: 12px;">Сгенерировать сертификат</span></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<input type="hidden" name="server_name" value="<?php echo $_SERVER['SERVER_NAME']?>">

<div style="display: none">
    <div id="generate_code">
        <p class="lightbox_header name_tour_header"></p>
        <p class="lightbox_header">Заполните данные</p>
        <form id="create_coupon_form" ACTION="" METHOD="POST" role="form" class="lightbox_form" data-id="1">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="ФИО" name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group" style="position: relative;">
                <input id='datetimepicker' type="text" class="form-control" id="date_birth" placeholder="Дата рождения" name="date_birth">
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker').datetimepicker({
                        viewMode: 'years',
                        locale: 'ru',
                        format: 'YYYY-MM-DD'
                    });
                });
            </script>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Номер телефона" name="phone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="name_manager" placeholder="ФИО менеджера выдавшего сертификат" name="name_manager">
            </div>
            <a href="/user/create_coupon/" class="red_btn" id="certificate_data_user" data-id="">Сохранить</a>
        </form>
    </div>
</div>
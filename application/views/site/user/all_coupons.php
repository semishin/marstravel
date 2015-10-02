<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/user"  class="active"><i class="icon icon_turkey"></i><span>Сертификаты</span></a></li>
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
            <h2>Сертификаты - <?php echo $tour->name;?></h2>
            <?php foreach($coupon as $item) { ?>

            <?php } ?>
            <?php if(!$item->code) { ?>
                <h2>Нет сертификатов по данному туру</h2>
            <?php } else { ?>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>№(код) сертификата</th>
                    <th>Дата выдачи сертификата</th>
                    <th>ФИО владельца сертификата</th>
                    <th>Дата рождения владельца сертификата</th>
                    <th>Телефон владельца сертификата</th>
                    <th>email владельца сертификата</th>
                    <th>ФИО менеджера, выдавшего сертификат</th>
                    <th>Статус</th>
                    <th>Печать</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($coupon as $item) { ?>
                    <tr>
                        <td><?php echo $item->code;?></td>
                        <td><?php echo $item->created_at;?></td>
                        <td><?php echo $item->name?></td>
                        <td><?php echo $item->date_birth?></td>
                        <td><?php echo $item->phone?></td>
                        <td><?php echo $item->email?></td>
                        <td><?php echo $item->name_manager?></td>
                        <td><?php if($item->active_firm == 0) { ?><span class="label label-success">Не активирован</span><?php } else { ?> <span class="label label-danger">Активирован</span><?php } ?></td>
                        <td> <button data-tour_id="<?php echo $item->tour_id;?>" data-code_coupon="<?php echo $item->code;?>" type="button" class="btn btn-primary btn-sm " name="print_page">Распечатать сертификат</button></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="row">
                <div class="paginator">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>
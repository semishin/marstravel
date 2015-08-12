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
            <h2>Купоны - <?php echo $tour->name;?></h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>Код купона</th>
                    <th>Статус</th>
                    <th>Печать</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($coupon as $item) { ?>
                    <tr>
                        <td><?php echo $item->code;?></td>
                        <td><?php if($item->active == 1) { ?><span class="label label-success">Не использован</span><?php } else { ?> <span class="label label-danger">Использован</span><?php } ?></td>
                        <td> <button data-tour_id="<?php echo $item->tour_id;?>" data-code_coupon="<?php echo $item->code;?>" type="button" class="btn btn-primary btn-sm " name="print_page">Распечатать купон</button></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="paginator">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>
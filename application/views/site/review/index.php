<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Отзывы</p>
    </div>
</div>
<div class="col-xs-12">
    <?php foreach ($review as $item) { ?>
        <div class="page_info">
            <div class="hotel_contacts col-xs-12">
                <p><b><?php echo $item->name;?></b></p>
            </div>
            <hr>
            <div class="add_margin col-xs-12"><?php echo $item->text;?></div>
            <div class="col-xs-12">
                <div class="image">
                    <?php if($item->image) { ?>
                        <img src="<?php echo Lib_Image::resize_bg($item->image, 'review',$item->id, 370, 258); ?>" class="img-responsive">
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($count_review > 6) { ?>
        <p class="text-center"><button type="button" id="more_hotel" class="btn load_button black_btn">Загрузить ещё</button></p>
    <?php } ?>
</div>
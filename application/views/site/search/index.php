<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>На главную</span></a>
        <p class="text-center header"><?php echo $s_title ?></p>

    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <div class="hotels_block">
                <div class="row">
                    <?php if(!$search_result) { ?>
                        <div class="alert alert-danger search">По вашему запросу ничего не найдено</div>
                    <?php } ?>
                    <?php foreach ($search_result as $index => $item) { ?>
                        <div class="col-xs-4">
                            <div class="hotel">
                                <div class="image">
                                    <a href="/tour/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'tour',$item->id, 370, 258); ?>" class="img-responsive"></a>
                                </div>
                                <div class="name">
                                    <a href="/tour/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if($count_pages > 1) { ?>
                <div class="col-xs-12">
                    <?php echo $pagination; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
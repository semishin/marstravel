<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="tour_header_block">
        <p class="text-center header"><?php echo $name?></p>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-7">
            <img src="<?php echo Lib_Image::resize_bg($main_image, 'sight',$id, 664, 382); ?>" class="<?php if ($index == 0) echo "current"  ?>" style="<?php if ($index == 0) echo "display: block;" ?>">
        </div>
        <div class="col-xs-5">
            <div class="description_on_left">
                <?php echo $content;?>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header">Дополнительные изображения</p>
                    <p class="text">
                        <?php foreach($images as $item) { ?>
                            <a class="images_sight" rel="gallery1" href="<?php echo $item;?>" title="<?php echo $name?>">
                                <img src="<?php echo $item;?>">
                            </a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header">Экскурсии в которые входит достопримечательность</p>
                    <?php foreach($tours as $items) { ?>
                    <a href="/tour/<?php echo $items['url'];?>"><?php echo $items['name']?>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
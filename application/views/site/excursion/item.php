
<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/excursions" class="back_to_main">&larr; <span>К списку экскурсий</span></a>
        <p class="text-center header"><?php echo $name ?></p>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-7">
            <?php if($main_image){?>
            <img src="<?php echo Lib_Image::resize_bg($main_image, 'sight',$id, 664, 382); ?>" class="<?php if ($index == 0) echo "current"  ?>" style="<?php if ($index == 0) echo "display: block;" ?>">
            <?php } else { ?>
                <img src="holder.js/670x400">
            <?php } ?>
        </div>
        <div class="col-xs-5">
            <p style="text-align:justify">
                <?php echo $content;?>
          </p>
        </div>
        <?php if($images) { ?>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header mb30">Дополнительные изображения</p>
                    <p class="text">
                        <?php foreach($images as $item) { ?>
                            <a class="images_sight" rel="gallery1" href="<?php echo $item;?>" title="<?php echo $name?>">
                                <img src="<?php echo $item;?>" class="img-rounded col-xs-3 mb30" />
                            </a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header">Экскурсии в которые входит достопримечательность</p>
                    <?php foreach($tours as $items) { ?>
                        <a href="/tour/<?php echo $items['url'];?>"><?php echo $items['name']?><br>
                     <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
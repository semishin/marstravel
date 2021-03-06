<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
		<a href="/sights" class="back_to_main">&larr; <span>Все достопримечательности</span></a>
        <p class="text-center header"><?php echo $name?></p>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-7 mb30">
            <?php if($main_image) { ?>
                <img  src="<?php echo Lib_Image::resize_bg($main_image, 'sight',$id, 664, 382); ?>" class="<?php if ($index == 0) echo "current"  ?> img-responsive" style="<?php if ($index == 0) echo "display: block;" ?>">
            <?php } else { ?>
                <img src="holder.js/600x350">
            <?php } ?>
        </div>
        <div class="col-xs-5">
            <div class="description_on_left">
              <?php echo $content;?>
            </div>
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
        <?php if($excursions) { ?>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header mb30">Экскурсии по достопримечательности - <?php echo $name;?></p>
                    </div>
                     <div class="row">
                    <?php foreach($excursions as $items) { ?>
                        <div class="col-sm-3">
                            <a href="/excursion/<?php echo $items['url'];?>" title="<?php echo $items['name']?>">
                                <img src="<?php echo Lib_Image::resize_bg($items['main_image'], 'excursion', $items['id'], 664, 382)?>" class="img-responsive mb30" />
                            </a>
                            <a class="black_link"  href="/excursion/<?php echo $items['url'];?>"><?php echo $items['name']?></a>
                        </div>
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="col-xs-12">
    <div class="slider">
        <?php echo View::factory('site/slider/index', array('slide' => $slide, 'count_slide' => $count_slide))?>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/about-turkey"><i class="icon icon_turkey"></i><span>О Турции</span></a></li>
                            <li><a href="/hotels"><i class="icon icon_hotel"></i><span>Отели Турции</span></a></li>
                            <li><a href="/sights"><i class="icon icon_attractions"></i><span>Достопримечательности</span></a></li>
                            <li><a href="/weather"><i class="icon icon_weather"></i><span>Погода в Турции</span></a></li>
                            <li><a href="/excursions"><i class="icon icon_excursions"></i><span>Экскурсии</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-xs-4">
                    <?php foreach ($left_banner as $item) { ?>
                        <a href="<?php echo $item->link ?>">
                            <div class="left_banner" style="height: 343px;background:url(<?php echo Lib_Image::crop($item->image, 'banner',$item->id, 282, 360); ?>);"></div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h1 style="margin-top: 0px;"><?php echo $name ?></h1>
            <?php echo $content ?>
        </div>

    </div>
</div>
<div class="col-xs-12">
    <div class="slider">
        <div class="slider_shadow"></div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-md-9 col-xs-8 left_part">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($slide as $index => $item) { ?>
                            <div class="item <?php if (!$index) { ?>active<?php } ?>">
                                <a href="<?php echo $item->link ?>">
                                    <img src="<?php echo Lib_Image::crop($item->image, 'slide',$item->id, 905, 489); ?>" class="img-responsive">
                                </a>
                                <div class="carousel-caption"></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-3 col-xs-4 right_part">
                    <?php foreach ($slide as $index => $item) { ?>
                        <div class="slide_text <?php if (!$index) { ?>active<?php } ?> text<?php echo $index ?>">
                            <p class="text-center"><?php echo $item->name ?></p>
                            <p class="text-center"><i><?php echo $item->content ?></i></p>
                        </div>
                    <?php } ?>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php for ($i = 0; $i < $count_slide; $i++) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php if (!$i) { ?>class="active"<?php } ?>></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
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
                            <li><a href="/sight"><i class="icon icon_attractions"></i><span>Достопримечательности</span></a></li>
                            <li><a href="/hotels"><i class="icon icon_hotel"></i><span>Отели Турции</span></a></li>
                            <li><a href="/weather"><i class="icon icon_weather"></i><span>Погода в Турции</span></a></li>
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

            <!-- <div class="left_menu">
                 <ul class="list-unstyled">
                     <li><a href="#"><i class="icon icon_turkey"></i><span>О Турции</span></a></li>
                     <li><a href="#"><i class="icon icon_attractions"></i><span>Достопримечательности</span></a></li>
                     <li><a href="#"><i class="icon icon_hotel"></i><span>Отели Турции</span></a></li>
                     <li><a href="#"><i class="icon icon_weather"></i><span>Погода в Турции</span></a></li>
                 </ul>
             </div>
             <div class="left_banner">
                 <p class="text-center">Баннерная реклама</p>
                 <p class="text-center"><i>Рекламный<br>
                     баннер<br>
                     270 х 283<br>
                     пикселей</i></p>
                 <div class="button text-center"><a href="#">Подробности</a></div>
             </div>-->

        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <?php foreach ($tour as $index => $item) { ?>
                <div class="tour">
                    <div class="row">
                        <div class="col-xs-8 left_part">
                            <div class="brief_info">
                                <div class="top">
                                    <a href="/tour/<?php echo $item->url ?>"><p class="text-center header"><?php echo $item->name ?></p></a>
                                    <p class="text-center duration">7 ночей 8 дней</p>
                                    <ul class="list-inline cities text-center">
                                        <li><a href="#">Стамбул</a></li>
                                        <li><a href="#">Троя</a></li>
                                        <li><a href="#">Пергам</a></li>
                                        <li><a href="#">Кушадасы</a></li>
                                        <li><a href="#">Памуккале</a></li>
                                        <li><a href="#">Aнталия</a></li>
                                    </ul>
                                    <p class="text-center description">
                                        <?php echo $item->content ?>
                                    </p>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        <p>Стоимость на человека</p>
                                        <b><?php echo $item->price ?> руб.</b>
                                    </div>
                                    <div class="button">
                                        <a href="/tour/<?php echo $item->url ?>" class="red_btn">Полная информация</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 right_part">
                            <div class="image">

                                <div class="star_label_trans">
                                    <div class="star"></div><div class="text"><p><b><?php echo $item->slogan ?></b></p></div><div class="border"></div>
                                </div>

                                <div class="triangle"></div>
                                <a href="/tour/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'tour',$item->id, 300, 330); ?>" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
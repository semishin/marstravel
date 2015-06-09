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
                            <li><a href="/sights"><i class="icon icon_attractions"></i><span>Достопримечательности</span></a></li>
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
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h1 style="margin-top: 0px;"><?php echo $name ?></h1>
            <?php echo $content ?>
            <iframe scrolling="no" frameBorder="0" src="http://pogoda.turtella.ru/i/p2j8s/map/#weather,,33.59450187499998,38.76391027071685,6" style="width:100%; height: 480px; border: none;"></iframe>
        </div>
    </div>
</div>
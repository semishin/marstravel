<div class="col-xs-12">
    <div class="slider">
        <?php echo View::factory('site/slider/index', array('slide' => $slide, 'count_slide' => $count_slide))?>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <?php echo View::factory('layout/site/menu/index');?>
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
            <div class="payment_kinds_block">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="payment_kinds_header"><b>Удобные способы оплаты.</b> <span class="text-muted">5 простых способа оплатить свою поездку</span></div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment_kinds_item blue">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                4000 платежных терминала<br>
                                по всей России!<br>
                                К Вашим услугам Pay.Travel
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment_kinds_item orange">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                Банковская карта<br>
                                Visa
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment_kinds_item red">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                Банковская карта<br>
                                Mastercard
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="payment_kinds_item grey">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                Наличными у нас в офисе<br>
                                или курьеру
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment_kinds_item grey_light">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                Безналичные платежи<br>
                                Распечатай счет и оплати<br>
                                в своем банке
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment_kinds_item green">
                            <div class="payment_image"></div>
                            <div class="payment_text">
                                Распечатай квитанцию<br>
                                и оплати в Сбербанке
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($images) { $images = json_decode($images)?>
            <div class="col-xs-12">
                <div class="adventure_program">
                    <div class="intro">
                        <p class="text">
                            <?php foreach($images as $item) { ?>
                                <a class="images_sight " rel="gallery1" href="<?php echo $item;?>" title="<?php echo $name?>">
                                    <img src="<?php echo $item;?>" class="img-rounded col-xs-4 mb30" />
                                </a>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
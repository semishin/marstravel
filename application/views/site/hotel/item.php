<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <div class="hotel_stars"><span><?php echo $stars ?></span></div>
        <a href="/hotels" class="back_to_main">&larr; <span>К списку отелей</span></a>
        <p class="text-center header"><?php echo $name ?></p>
        <p class="text-center duration"><?php echo $model->city->name ?></p>
    </div>
</div>

<div class="col-xs-12">
    <div class="full_width">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=29uD3jKC-8XFdTlfCwkxSmnSQkYPbrYH&id=map"></script>
        <div id="map" style="width: 100%; height: 275px"></div>
    </div>
</div>
<div class="col-xs-12">
    <div class="page_info">
        <div class="hotel_contacts col-xs-12">
            <p class="header">Контактная информация</p>
            <p><b>Адрес:</b> <?php echo $address ?></p>
            <p><b>Тел. / Факс:</b> <?php echo $phone ?></p>
            <p><b>Электронный адрес:</b> <?php echo $email ?></p>
            <p><b>Сайт отеля:</b> <a href="http://<?php echo $link_site ?>"><?php echo $link_site ?></a></p>
        </div>

        <hr>

        <p class="header col-xs-12">О отеле</p>
        <div class="add_margin col-xs-12"><?php echo $content ?></div>


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
    </div>
</div>
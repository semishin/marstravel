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
        <div class="hotel_contacts">
            <p class="header">Контактная информация</p>
            <p><b>Адрес:</b><?php echo $address ?></p>
            <p><b>Тел. / Факс:</b><?php echo $phone ?></p>
            <p><b>Электронный адрес:</b><?php echo $email ?></p>
            <p><b>Сайт отеля:</b><?php echo $link_site ?></p>
        </div>

        <hr>

        <p class="header">Об отеле</p>
        <p class="add_margin"><?php echo $content ?></p>

        <hr>

        <div class="gallery">
            <div class="item">
                <?php foreach ($images as $image) { ?>
                    <div class="col-xs-12 col-sm-4">
                        <a href="<?php echo $image ?>" class="fancygallery"><img src="<?php echo Lib_Image::resize_bg($image, 'hotel', $id, 375, 214); ?>"></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
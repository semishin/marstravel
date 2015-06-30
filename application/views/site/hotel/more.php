<?php foreach ($hotel as $item) { ?>
    <div class="col-xs-4">
        <div class="hotel">
            <div class="image">
                <div class="hotel_stars"><span><?php echo $item->stars ?></span></div>
                <a href="/hotel/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::resize_bg($item->main_image, 'hotel',$item->id, 370, 258); ?>" class="img-responsive"></a>
            </div>
            <div class="name">
                <a href="/hotel/<?php echo $item->url ?>"><?php echo $item->name ?></a>
            </div>
        </div>
    </div>
<?php } ?>
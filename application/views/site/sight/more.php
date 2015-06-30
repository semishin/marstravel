<?php foreach ($sight as $item) { ?>
    <div class="col-xs-4">
        <div class="sight">
            <div class="image">
                <a href="/sight/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::resize_bg($item->main_image, 'sight',$item->id, 370, 258); ?>" class="img-responsive"></a>
            </div>
            <div class="name">
                <a href="/sight/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                <p class="additional_text"><?php echo $item->city_name ?>, <?php echo $item->category_name ?></p>
            </div>
        </div>
    </div>
<?php } ?>
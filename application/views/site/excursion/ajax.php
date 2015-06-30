<?php foreach ($excursion as $item) { ?>
    <div class="col-xs-4">
        <div class="sight">
            <div class="image">
                <a href="/excursion/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::resize_bg($item->main_image, 'excursion',$item->id, 370, 258); ?>" class="img-responsive"></a>
            </div>
            <div class="name">
                <a href="/excursion/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                <p class="additional_text"><?php echo $item->city_name ?>, <?php echo $item->category_name ?></p>
            </div>
        </div>
    </div>
<?php } ?>
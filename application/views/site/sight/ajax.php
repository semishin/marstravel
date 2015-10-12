<script>
    $('.sights_block').each(function(i,elem) {
        $(this).find('.sight .name').equalizeHeights();
    });
</script>
<script src="/marstravel-bootstrap/js/holder.js"></script>
<?php foreach ($sight as $item) { ?>
    <div class="col-xs-4">
        <div class="sight">
            <div class="image">
                <a href="/sight/<?php echo $item->url ?>">
                    <a href="/sight/<?php echo $item->url ?>">
                        <?php if($item->main_image) { ?>
                            <img src="<?php echo Lib_Image::resize_bg($item->main_image, 'sight',$item->id, 370, 258); ?>" class="img-responsive">
                        <?php } else { ?>
                            <img src="holder.js/370x258">
                        <?php } ?>
                </a>
            </div>
            <div class="name">
                <a href="/sight/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                <p class="additional_text"><?php echo $item->city_name ?><?php if($item->category_name) echo ', '?> <?php echo $item->category_name ?></p>
            </div>
        </div>
    </div>
<?php } ?>
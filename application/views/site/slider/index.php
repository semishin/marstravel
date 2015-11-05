<div class="slider_shadow"></div>
<div id="carousel-example-generic" class="carousel slide" data-interval="5000" data-ride="carousel">
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
            <ol class="carousel-indicators" style="display: none">
                <?php for ($i = 0; $i < $count_slide; $i++) { ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php if (!$i) { ?>class="active"<?php } ?>></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>
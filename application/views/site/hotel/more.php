<?php foreach ($hotel as $item) { ?>

    <div class="col-xs-12">
        <div class="hotel hotel2">
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <div class="image">
                        <div class="hotel_stars"><span><?php echo $item->stars ?></span></div>
                        <!--<a href="#"><img src="img/hotel.jpg" class="img-responsive"></a>-->
                        <div id="hotel-<?php echo $item->id ?>" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="/hotel/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::resize_bg($item->main_image, 'hotel',$item->id, 370, 258); ?>" class="img-responsive"></a>
                                </div>
                                <?php $item->images = json_decode($item->images, true);?>
                                <?php if ($item->images) {
                                    foreach ($item->images as $image) { ?>
                                        <div class="item">
                                            <a href="/hotel/<?php echo $item->url ?>">
                                                <img src="<?php echo Lib_Image::resize_bg($image, 'hotel', $item->id, 370, 258); ?>" class="img-responsive">
                                            </a>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div class="indicators_panel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#hotel-<?php echo $item->id ?>" data-slide-to="0" class="active"></li>
                                    <?php if ($item->images) {
                                        foreach ($item->images as $index=>$image) { ?>
                                            <li data-target="#hotel-<?php echo $item->id ?>" data-slide-to="<?php echo ($index+1) ?>"></li>
                                        <?php }
                                    } ?>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-8 col-md-8">
                    <div class="info">
                        <div class="name">
                            <a href="/hotel/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                        </div>
                        <div class="contacts">
                            <p><b>Адрес: </b><?php echo $item->address ?></p>
                            <p><b>Телефон: </b><?php echo $item->phone ?></p>
                            <p><b>Сайт отеля: </b><?php echo $item->link_site ?></p>
                        </div>
                        <div class="text">
                            <p><?php echo $item->short_content ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
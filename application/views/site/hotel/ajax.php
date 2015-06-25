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

<!--                    <div class="col-xs-12">-->
<!--                        <div class="block_pagination">-->
<!--                            <p class="text-center total_amount">Всего --><?php //echo $count_hotel; ?><!-- отелей</p>-->
<!--                            <ul class="pagination">-->
<!--                                <li><a href="#">Предыдущая</a></li>-->
<!--                                <li><a href="#" class="active">1</a></li>-->
<!--                                <li><a href="#">...</a></li>-->
<!--                                <li><a href="#">4</a></li>-->
<!--                                <li><a href="#">5</a></li>-->
<!--                                <li><a href="#">6</a></li>-->
<!--                                <li><a href="#">7</a></li>-->
<!--                                <li><a href="#">8</a></li>-->
<!--                                <li><a href="#">9</a></li>-->
<!--                                <li><a href="#">10</a></li>-->
<!--                                <li><a href="#">...</a></li>-->
<!--                                <li><a href="#">98</a></li>-->
<!--                                <li><a href="#">Следующая</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
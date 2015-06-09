<?php foreach ($sight as $item) { ?>
    <div class="col-xs-4">
        <div class="sight">
            <div class="image">
                <a href="/sight/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'sight',$item->id, 370, 258); ?>" class="img-responsive"></a>
            </div>
            <div class="name">
                <a href="/sight/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                <p class="additional_text"><?php echo $item->city_name ?>, <?php echo $item->category_name ?></p>
            </div>
        </div>
    </div>
<?php } ?>

                    <div class="col-xs-12">
                        <div class="block_pagination">
                            <p class="text-center total_amount">Всего <?php echo $count_sight; ?> мест</p>
                            <ul class="pagination">
                                <li><a href="#">Предыдущая</a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">98</a></li>
                                <li><a href="#">Следующая</a></li>
                            </ul>
                        </div>
                    </div>
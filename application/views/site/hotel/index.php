<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Отели Турции</p>
        <p class="text-center duration">всего <?php echo $count_hotel; ?> отелей</p>
        <p class="text-center additional_text">Чрезвычайно широкий и разнообразный выбор отелей, от шикарных сетевых гигантов на побережье Анталии
            до маленьких пансионов в горах турецкого Курдистана</p>
        <div class="filter">
            <div class="row">
                <div class="col-xs-4">
                    <select class="selectpicker form-control finder" data-live-search="true">
                        <option disabled selected style="display: none">Введите слово для поиска по местам</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                        <option>Gonash</option>
                    </select>
                </div>
                <div class="col-xs-3">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Город или курорт</option>
                        <?php foreach ($cities as $item) { ?>
                            <option><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-3">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Количество звезд</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <!--                <div class="col-xs-2">-->
                <!--                    <label class="checkbox">-->
                <!--                        <input type="checkbox" id="inlineCheckbox1" value="option1">С экскурсиями <sup><small>145</small></sup>-->
                <!--                    </label>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <div class="hotels_block">
                <div class="row">
                    <?php foreach ($hotel as $item) { ?>
                        <div class="col-xs-4">
                            <div class="hotel">
                                <div class="image">
                                    <div class="hotel_stars"><span><?php echo $item->stars ?></span></div>
                                    <a href="/hotel/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'hotel',$item->id, 370, 258); ?>" class="img-responsive"></a>
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
                </div>
            </div>
        </div>
    </div>
</div>
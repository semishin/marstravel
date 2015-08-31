<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Отели Турции</p>
        <p class="text-center duration" id="count_hotel">всего <?php echo $count_hotel; ?> отелей</p>
        <p class="text-center additional_text">Чрезвычайно широкий и разнообразный выбор отелей, от шикарных сетевых гигантов на побережье Анталии
            до маленьких пансионов в горах турецкого Курдистана</p>
        <div class="filter">
            <div class="row">
                <div class="col-xs-4">
                    <div class="bootstrap-select findsight">
                        <input type="text" class="form-control" placeholder="Введите слово для поиска по отелям">
                        <span id="find_btn" class="findhotel">Найти</span>
                    </div>
                </div>
                <div class="col-xs-4" id="cityhotel">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Город или курорт</option>
                        <option data-id="0">Все</option>
                        <?php foreach ($cities as $item) { ?>
                            <option data-id="<?php echo $item->id; ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-4" id="hotelstar">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Количество звезд</option>
                        <option value="0">Все</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
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
                </div>
            </div>
            <?php if ($count_hotel > 6) { ?>
                <p class="text-center"><button type="button" id="more_hotel" class="btn load_button black_btn">Загрузить ещё</button></p>
            <?php } ?>
        </div>
    </div>
</div>
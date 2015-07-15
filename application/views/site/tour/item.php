<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="tour_header_block">
        <p class="text-center header"><?php echo $name?></p>
        <p class="text-center duration">7 ночей 8 дней</p>
        <ul class="list-inline cities text-center">
            <?php foreach ($route as $index => $item) { ?>
                <li><a href="#yandex_map_with_route" data-img="img/logo-red.png" data-number="<?php echo $index; ?>" class="fancy"><?php echo $cities[$item]->name; ?></a></li>
            <?php } ?>
        </ul>
        <script>

        </script>
        <div style="display: none">
            <div id="yandex_map_with_route">
                <script>
                    var map, mapRoute;

                    ymaps.ready(function() {
                        map = new ymaps.Map('map', {
                            center: [39.52, 32.52],
                            zoom: 5
                        });
                    });

                    function createRoute() {
                        // Удаление старого маршрута
                        if (mapRoute) {
                            map.geoObjects.remove(mapRoute);
                        }

                        var cities_amount =  $("ul.cities > li").length;
                        var cities  = [];
                        var cities_images = [];
                        var i = 0;
                        //var country = "Турция";
                        var city_name = "none";
                        for(i=0; i<cities_amount; i++){
                            city_name =  $("ul.cities > li:nth-child(" + (i+1) + ") > a").text();
                            cities_images[i] = $("ul.cities > li:nth-child(" + (i+1) + ") > a").attr("data-img");

                            cities[i] = "Турция, "+ city_name +"";
                        }

                        // Создание маршрута
                        ymaps.route(cities, {mapStateAutoApply:true}).then(
                            function(route) {
                                map.geoObjects.add(route);

                                var points = route.getWayPoints();
                                // Задаем стиль метки - иконки будут красного цвета, и
                                // их изображения будут растягиваться под контент.
                                points.options.set('preset', 'twirl#redStretchyIcon');

                                for(i=0; i<cities_amount;i++){
                                    // Задаем контент меток.
                                    points.get(i).properties.set('iconContent', cities[i].substring(8));
                                    points.get(i).properties.set('balloonContent', "<p><img src="+cities_images[i]+" /></p><p>" + cities[i].substring(8)+"</p>");
                                    //points.get(i).properties.set('hintContent', 'hover');
                                }

                                //document.getElementById('route-length').innerHTML = 'Длина маршрута = ' + route.getHumanLength();
                                mapRoute = route;
                            },
                            function(error) {
                                alert('Невозможно построить маршрут');
                            }
                        );
                    }

                    $( ".cities a" ).click(function( event ) {
                        event.preventDefault();
                        var ballon_number = $(this).attr("data-number");
                        // Удаление старого маршрута
                        if (mapRoute) {
                            map.geoObjects.remove(mapRoute);
                        }

                        var cities_amount =  $("ul.cities > li").length;
                        var cities  = [];
                        var cities_images = [];
                        var i = 0;
                        var city_name = "none";
                        for(i=0; i<cities_amount; i++){
                            city_name =  $("ul.cities > li:nth-child(" + (i+1) + ") > a").text();
                            cities_images[i] = $("ul.cities > li:nth-child(" + (i+1) + ") > a").attr("data-img");
                            cities[i] = "Турция, "+ city_name +"";
                        }

                        // Создание маршрута
                        ymaps.route(cities, {mapStateAutoApply:true}).then(
                            function(route) {
                                map.geoObjects.add(route);

                                var points = route.getWayPoints();
                                // Задаем стиль метки - иконки будут красного цвета, и
                                // их изображения будут растягиваться под контент.
                                points.options.set('preset', 'twirl#redStretchyIcon');

                                for(i=0; i<cities_amount;i++){
                                    // Задаем контент меток.
                                    points.get(i).properties.set('iconContent', cities[i].substring(8));
                                    points.get(i).properties.set('balloonContent', "<p><img src="+cities_images[i]+" /></p><p>" + cities[i].substring(8)+"</p>");
                                }

                                var wayPoint = route.getWayPoints().get(ballon_number);
                                ymaps.geoObject.addon.balloon.get(wayPoint).open();


                                //points.get(ballon_number).properties.set('balloonContent', 'clicked-city');
                                //map.geoObject.get(0).Balloon.open();
                                //points.get(ballon_number).Ballon.open();

                                //document.getElementById('route-length').innerHTML = 'Длина маршрута = ' + route.getHumanLength();
                                mapRoute = route;
                            },
                            function(error) {
                                alert('Невозможно построить маршрут');
                            }
                        );
                    });
                </script>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-7">
            <div class="counter_slider">
                <div id="any_id" class="barousel">
                    <div class="barousel_image">
                        <?php foreach ($images as $index => $item) { ?>
                            <img src="<?php echo Lib_Image::resize_bg($item, 'tour',$id, 664, 382); ?>" class="<?php if ($index == 0) echo "current"  ?>" style="<?php if ($index == 0) echo "display: block;" ?>">
                            <!--<img src="<?php echo Lib_Image::resize_bg($item, 'tour',$id, 664, 382); ?>" class="current" style="display: inline">-->
                        <?php } ?>
                    </div>
                    <div class="barousel_content" style="display: none">
                        <!-- content 1 -->
                        <?php foreach ($images as $index=>$item) { ?>
                            <div <?php if (!$index) {?>class="default"<?php } ?>>
                                <p>1 slide</p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="barousel_nav">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-5">
            <div class="description_on_left">
                <p>Стоимость на человека <i class="tooltip_icon" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i></p>
                <p class="price"><?php echo $price?> руб.</p>
                <a href="#yandex_map_with_route" class="yellow_btn fancy" onclick="createRoute();">Посмотреть программу тура на карте</a>
                <p class="text">
                    <?php echo $short_content?>
                </p>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text-center header">Программа путешествия</p>
                    <p class="text-center duration">7 ночей 8 дней</p>
                    <p class="text"><?php echo $content?></p>
                </div>
                <div class="schedule">
                    <div class="day_description">
                        <div class="left">
                            <p class="number">1-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d1_name?></p>
                            <p><?php echo $d1_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">2-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d2_name?></p>
                            <p><?php echo $d2_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">3-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d3_name?></p>
                            <p><?php echo $d3_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">4-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d4_name?></p>
                            <p><?php echo $d4_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">5-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d5_name?></p>
                            <p><?php echo $d5_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">6-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d6_name?></p>
                            <p><?php echo $d6_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">7-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d7_name?></p>
                            <p><?php echo $d7_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="day_description">
                        <div class="left">
                            <p class="number">8-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo $d8_name?></p>
                            <p><?php echo $d8_content?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="two_half_block">
                <div class="left">
                    <p>В стоимость входит:</p>
                        <?php echo $included?>
                </div>
                <div class="right">
                    <p>В стоимость не входит:</p>
                        <?php echo $excluded?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="order_tour">
                <p class="text-center">Заказ тура</p>

                <div class="form-group date">
                    <p style="margin-bottom: 12px;padding-left: 25px;font-size: 16px;color: #111111;font-weight: bold">Выберите дату поездки</p>
                    <div class="input-group">
                        <input type="text" name="daterange" class="form-control" placeholder="Выберите дату" id="date">
                        <label class="input-group-addon" for="date">date</label>
                    </div>
                </div>

                <div class="form-group counter counter1">
                    <label for="adult_number">Количество взрослых</label>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
                        <input type="text" class="form-control" id="adult_number" placeholder="Выберите кол-во взрослых">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                </div>

                <div class="form-group counter counter2">
                    <label for="children_number">Количество детей</label>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
                        <input type="text" class="form-control" id="children_number" placeholder="Выберите кол-во детей">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                </div>

                <p class="total_price" data-price="<?php echo $price?>">Итоговая стоимость: <span></span><b>0 руб.</b></p>

                <a href="#pay" class="black_btn fancy" id="pay_btn_gen_1">Купить тур</a>
                <a href="#get_free" class="red_btn fancy">Получить бесплатно</a>
                <div class="clearfix"></div>

                <div style="display: none">
                    <div id="pay">
                        <p class="lightbox_header">Купить тур</p>
                        <p class="lightbox_text"><?php echo $name?></p>
                        <form role="form" class="lightbox_form" data-id="1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="fio_1" placeholder="ФИО" name="fio">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="dob_1" placeholder="Дата рождения" name="dob">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="passport_1" placeholder="Номер паспорта" name="passport">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="validity_1" placeholder="Срок действия" name="validity">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="issuedby_1" placeholder="Кем выдан" name="issuedby">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_1" placeholder="Введите email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone_1" placeholder="Номер телефона" name="phone">
                            </div>
                            <select required size = "1" id = "payment_1" name="payment">
                                <option disabled value = "0">Способ оплаты</option>
                                <option value = "1">Оплатить в офисе</option>
                                <option value = "2">Картой онлайн</option>
                                <option value = "3">Терминалы</option>
                                <option value = "4">Отделения сотовой связи</option>
                            </select>
                            <div class="form-group">
                                <label for="agreement_1">Согласие с условиями</label>
                                <input type="checkbox" class="form-control" id="agreement_1" name="agreement">
                            </div>
                            <div class="form-group">
                                <label for="surcharge_1">Доплата за одноместное размещение 120 долларов</label>
                                <input type="checkbox" class="form-control" id="surcharge_1" name="surcharge">
                            </div>
                            <a href="#" class="red_btn" id="pay_btn" data-id="<?php echo $id?>">Отправить</a>
                        </form>
                    </div>
                </div>
                <div style="display: none">
                    <div id="get_free">
                        <form role="form">
                            <div class="form-group">
                                <label for="Email_2">Email</label>
                                <input type="email" class="form-control" id="Email_2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="Name_2">Имя</label>
                                <input type="text" class="form-control" id="Name_2" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="Password_2">Пароль</label>
                                <input type="password" class="form-control" id="Password_2" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="Code_2">Промокод</label>
                                <input type="password" class="form-control" id="Code_2" placeholder="Code">
                            </div>
                            <button type="submit" class="btn btn-success" id="get_free_btn">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
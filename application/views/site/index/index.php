<div class="col-xs-12">
    <div class="slider">
            <?php echo View::factory('site/slider/index', array('slide' => $slide, 'count_slide' => $count_slide))?>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/about-turkey"><i class="icon icon_turkey"></i><span>О Турции</span></a></li>
                            <li><a href="/sights"><i class="icon icon_attractions"></i><span>Достопримечательности</span></a></li>
                            <li><a href="/hotels"><i class="icon icon_hotel"></i><span>Отели Турции</span></a></li>
                            <li><a href="/excursions"><i class="icon icon_excursions"></i><span>Экскурсии</span></a></li>
                            <li><a href="/weather"><i class="icon icon_weather"></i><span>Погода в Турции</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-xs-4">
                    <?php foreach ($left_banner as $item) { ?>
                        <a href="<?php echo $item->link ?>">
                            <img src="<?php echo Lib_Image::crop($item->image, 'banner',$item->id, 282, 360); ?>" class="left_banner img-responsive" />
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <?php foreach ($tour as $index => $item) { ?>
                <?php
                    $ids = @unserialize($item->route);

                    $citiesHash = array();
                    if ($ids) {
                        $cities = ORM::factory('City')->where('id', 'IN', $ids)->find_all()->as_array();
                        foreach ($cities as $city) {
                            $citiesHash[$city->id] = $city;
                        }
                    }
                ?>
                <div class="tour">
                    <div class="row">
                        <div class="col-xs-8 left_part">
                            <div class="brief_info">
                                <div class="top">
                                    <a href="/tour/<?php echo $item->url ?>"><p class="text-center header"><?php echo $item->name ?></p></a>
                                    <p class="text-center duration">7 ночей 8 дней</p>
                                    <ul class="list-inline cities text-center" data-id="<?php echo $index+1 ?>">
                                        <?php foreach ($ids as $item2) { ?>
                                            <li><a href="#yandex_map_with_route" class="fancy" data-img="" data-number="<?php echo $item2 ?>"><?php echo $citiesHash[$item2]->name; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <p class="text-center description">
                                        <?php echo $item->short_content ?>
                                    </p>
                                </div>
                                <div class="bottom">
                                    <div class="price">
                                        <p>Стоимость на человека</p>
                                        <b><?php echo $item->price ?> руб.</b>
                                    </div>
                                    <div class="button">
                                        <a href="/tour/<?php echo $item->url ?>" class="red_btn">Полная информация</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 right_part">
                            <div class="image">

                                <div class="star_label_trans">
                                    <div class="star"></div><div class="text"><p><b><?php echo $item->slogan ?></b></p></div><div class="border"></div>
                                </div>

                                <div class="triangle"></div>
                                <a href="/tour/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'tour',$item->id, 300, 330); ?>" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div style="display: none">
                <div id="yandex_map_with_route">
                    <script>
                        var map, mapRoute;

                        ymaps.ready(function() {
                            map = new ymaps.Map('map', {
                                center: [39.52, 32.52],
                                zoom: 6
                            });
                        });


                        $( ".cities a" ).click(function( event ) {
                            event.preventDefault();
                            var tour_number = $(this).parent().parent().attr("data-id");
                            var ballon_number = $(this).attr("data-number");
                            // Удаление старого маршрута
                            if (mapRoute) {
                                map.geoObjects.remove(mapRoute);
                            }

                            var cities_amount =  $("ul.cities[data-id="+tour_number+"] > li").length;

                            var cities  = [];
                            var cities_images = [];
                            var i = 0;
                            var city_name = "none";
                            for(i=0; i<cities_amount; i++){
                                city_name =  $("ul.cities[data-id="+tour_number+"] > li:nth-child(" + (i+1) + ") > a").text();
                                cities_images[i] = $("ul.cities[data-id="+tour_number+"] > li:nth-child(" + (i+1) + ") > a").attr("data-img");
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
                    <!--<div id="route-length"></div>-->
                </div>
            </div>
        </div>
    </div>
</div>
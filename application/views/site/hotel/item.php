<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <div class="hotel_stars"><span><?php echo $stars ?></span></div>
        <a href="/hotels" class="back_to_main">&larr; <span>К списку отелей</span></a>
        <p class="text-center header"><?php echo $name ?></p>
        <p class="text-center duration"><?php echo $model->city->name ?></p>
    </div>
</div>

<div class="col-xs-12">
    <div class="full_width">

        <script>
            ymaps.ready(init);

            function init() {
                var myMap = new ymaps.Map('map', {
                    center: [55.753994, 37.622093],
                    zoom: 9
                });

                // Поиск координат центра Нижнего Новгорода.
                ymaps.geocode('<?php echo $address?>', {
                    results: 1
                }).then(function (res) {

                    var firstGeoObject = res.geoObjects.get(0),

                        coords = firstGeoObject.geometry.getCoordinates(),
                    // Область видимости геообъекта.
                        bounds = firstGeoObject.properties.get('boundedBy');

                    // Добавляем первый найденный геообъект на карту.
                    myMap.geoObjects.add(firstGeoObject);
                    // Масштабируем карту на область видимости геообъекта.
                    myMap.setBounds(bounds, {
                        // Проверяем наличие тайлов на данном масштабе.
                        checkZoomRange: true
                    });

                    /**
                     * Все данные в виде javascript-объекта.
                     */
                    console.log('Все данные геообъекта: ', firstGeoObject.properties.getAll());
                    /**
                     * Метаданные запроса и ответа геокодера.
                     * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/GeocoderResponseMetaData.xml
                     */
                    console.log('Метаданные ответа геокодера: ', res.metaData);
                    /**
                     * Метаданные геокодера, возвращаемые для найденного объекта.
                     * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/GeocoderMetaData.xml
                     */
                    console.log('Метаданные геокодера: ', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData'));
                    /**
                     * Точность ответа (precision) возвращается только для домов.
                     * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/precision.xml
                     */
                    console.log('precision', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData.precision'));
                    /**
                     * Тип найденного объекта (kind).
                     * @see https://api.yandex.ru/maps/doc/geocoder/desc/reference/kind.xml
                     */
                    console.log('Тип геообъекта: %s', firstGeoObject.properties.get('metaDataProperty.GeocoderMetaData.kind'));
                    console.log('Название объекта: %s', firstGeoObject.properties.get('name'));
                    console.log('Описание объекта: %s', firstGeoObject.properties.get('description'));
                    console.log('Полное описание объекта: %s', firstGeoObject.properties.get('text'));

                });
            }
        </script>

        <div id="map" style="width: 100%; height: 275px"></div>
    </div>
</div>
<div class="col-xs-12">
    <div class="page_info">
        <div class="hotel_contacts col-xs-12">
            <p class="header">Контактная информация</p>
            <p><b>Адрес:</b> <?php echo $address ?></p>
            <p><b>Тел. / Факс:</b> <?php echo $phone ?></p>
            <p><b>Электронный адрес:</b> <?php echo $email ?></p>
            <p><b>Сайт отеля:</b> <a href="http://<?php echo $link_site ?>"><?php echo $link_site ?></a></p>
        </div>
        <hr>
        <p class="header col-xs-12">О отеле</p>
        <div class="add_margin col-xs-12"><?php echo $content ?></div>
        <div class="col-xs-12">
            <div class="adventure_program">
                <div class="intro">
                    <p class="text">
                        <?php foreach($images as $item) { ?>
                            <a class="images_sight " rel="gallery1" href="<?php echo $item;?>" title="<?php echo $name?>">
                                <img src="<?php echo $item;?>" class="img-rounded col-xs-4 mb30" />
                            </a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
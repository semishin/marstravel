<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="tour_header_block grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Все туры</span></a>
        <p class="text-center header"><?php echo $name?></p>
        <p class="text-center duration">7 ночей 8 дней</p>
        <ul class="list-inline cities text-center">
            <?php foreach ($route as $index => $item) { ?>
                <li><a href="#yandex_map_with_route" data-img="<?php echo Lib_Image::crop($cities[$item]->images, 'city', $cities[$item]->id, 250, 200)?>" data-number="<?php echo $index; ?>" class="fancy"><?php echo $cities[$item]->name; ?></a></li>
            <?php } ?>
        </ul>
        <div style="display: none">
            <div id="yandex_map_with_route">
                <script>
                    var map, mapRoute;

                    ymaps.ready(function() {
                        map = new ymaps.Map('map', {
                            center: [39.52, 32.52],
                            zoom: 5,
                            behaviors: ['default', 'scrollZoom']
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
                                    //points.get(i).properties.set('iconContent', cities[i].substring(8));
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
                                    //points.get(i).properties.set('iconContent', cities[i].substring(8));
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
                    <?php if(!$images) { ?>
                        <img src="holder.js/700x450">
                    <? } ?>
                    <div class="barousel_content" style="display: none">
                        <!-- content 1 -->
                        <?php foreach ($images as $index=>$item) { ?>
                            <div <?php if (!$index) {?>class="default"<?php } ?>>
                                <p>1 slide</p>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if($images) { ?>
                        <div class="barousel_nav">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-xs-5">
            <div class="description_on_left">
                <p>Стоимость на человека<i class="tooltip_icon" data-toggle="tooltip" data-placement="top" title="Стоимость на человека при двухместном размещении"></i></p>
                <p class="price">от <?php echo number_format($price + $min_price_flight->price, 0, ' ', ' '); ?> руб.</p>
                <a href="#yandex_map_with_route" class="yellow_btn fancy" onclick="createRoute();">Посмотреть программу тура на карте</a>
                <p class="text">
                    <?php echo $short_content?>
                </p>
                <a href="#from_top_get_free_button" class="red_btn">Получить по сертификату</a>
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
                    <?php for($day_tour = 1; ${'d'.$day_tour.'_name'}; $day_tour++) { ?>
                    <div class="day_description">
                        <div class="left">
                            <p class="number"><?php echo $day_tour;?>-й день</p>
                        </div>
                        <div class="right">
                            <p><?php echo ${'d'.$day_tour.'_name'};?></p>
                            <div class="tour_image">
                            <div class="col-sm-5">
                                <p>
                                    <?php if(${'d'.$day_tour.'_image'}) { ?>
                                        <a class="images_sight" rel="gallery<?php echo  ${'d'.$day_tour.'_name'};?>" href="<?php echo ${'d'.$day_tour.'_image'};?>" title="<?php echo  ${'d'.$day_tour.'_name'};?>">
                                            <img src="<?php echo  Lib_Image::crop(${'d'.$day_tour.'_image'}, 'tour', $id, 400, 285)?>" class="img-responsive mb30" />
                                        </a>
                                    <?php } ?>
                                </p>
                            </div>
                            <div  class="col-sm-7">
                                <p><?php echo ${'d'.$day_tour.'_content'}?></p>
                            </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="two_half_block">
                <div class="left same_height">
                    <p>В стоимость входит:</p>
                        <?php echo $included?>
                </div>
                <div class="right same_height">
                    <p>Дополнительные предложения:</p>
                        <?php echo $excluded?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="order_tour" data-tour_id="<?php echo $id;?>" id="from_top_get_free_button">
                <p class="text-center">Заказ тура</p>
                <?php if($link_forum) { ?>
                    <div class="forum_link text-center">
                        <a href="/<?php echo $link_forum;?>">Поиск попутчика Online</a>
                    </div>
                <?php } ?>
                <div class="form-group date">
                    <p style="margin-bottom: 12px;padding-left: 25px;font-size: 16px;color: #111111;font-weight: bold">Выберите дату поездки</p>
					<div class='input-group date add_error' id='datetimepicker'>
						<input  <?php if($start_count_places <= 0) { ?>  placeholder="Извините. На данный момент нет свободных мест" disabled="true" <?php } else {  ?> placeholder="Выберите дату" <?php } ?> value="" name="daterange" type='text' id="date" class="form-control change_placeholder" />
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
                </div>
                <input class="hidden" name="min_date_start" value="<?php echo date("Y-m-d");?>"/>
				<script>
                    window.onload = function () {
                        var tour_id = '<?php echo $id;?>';
                        var min_date_start = $('input[name="min_date_start"]').val();
                        var quantity_adults = $('#adult_number').val();
                        var quantity_children = $('#children_number').val();
                        if(!quantity_children){
                            quantity_children = 0;
                        }
                        if(!quantity_adults){
                            quantity_adults = 0;
                        }
					  $.ajax({
						  type: "POST",
						  url: "/tour/get/info",
						  dataType: 'json',
                          data: {tour_id: tour_id, quantity_adults: quantity_adults, quantity_children: quantity_children},
                          success: function(result) {
							  var days = result.days;
							  $('#datetimepicker').datetimepicker({
                                  locale: 'ru',
                                  useCurrent: false,
                                  format: 'YYYY-MM-DD',
                                  minDate: (min_date_start),
								  enabledDates: $.makeArray(days)
							  });
						  }
					  });
				  }
				</script>
                <div class="form-group counter counter1">
                    <label for="adult_number">Количество взрослых</label>
                    <div class="btn-group">
                        <button <?php if($start_count_places <= 1) { ?> disabled="true" <?php } ?> name="send_data_people" type="button" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
                            <input type="text" <?php if($start_count_places >= 2) { ?> value="2"  <?php }elseif($start_count_places == 1) { ?> value="1" <?php } ?> class="form-control" id="adult_number" placeholder="Выберите кол-во взрослых">
                        <button name="send_data_people" <?php if($start_count_places <= 2) { ?> disabled="true" <?php } ?>  type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                </div>
                <div class="form-group counter counter2  <?php if($price_child == 0) { ?> hidden <?php } ?>">
                    <label for="children_number">Количество детей</label>
                    <div class="btn-group">
                        <button <?php if($start_count_places <= 1) { ?> disabled="true" <?php } ?> name="send_data_people" type="button" class="btn btn-default"><span class="glyphicon glyphicon-minus"></span></button>
                        <input  type="text" class="form-control" id="children_number" placeholder="Выберите кол-во детей">
                        <button <?php if($start_count_places <= 2) { ?> disabled="true" <?php } ?> name="send_data_people" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                </div>

                <div class="form-group bootstrap-select promo_code_block" >
                    <input type="text" name="code"  id="code_2" class="form-control" placeholder="Введите код сертификата">
                    <button  id="check_coupon" <?php if($start_count_places <= 0) { ?> disabled="true" <?php } ?>   class="use_code_btn" data-tour_id="<?php echo $id?>" data-coupon_code="">Применить</button>
                </div>

                <div class="add_content_flight hidden">
                    <p class="content_flight">
                        <span>Стоимость перелета:</span>
                        <b><?php echo number_format($free_date->price, 0, '', ' ')?> руб.</b>
                    </p>
                </div>
                <div class="">
                    <div <?php if(!$price_single) { ?> class="hidden"<?php } ?>>
                        <div class="add_content_single_price <?php if($start_count_places != 1) { ?> hidden <?php } ?>">
                            <p class="content_single_price"  data-single_price="<?php echo $price_single?>"><span>Доплата за одноместное размещение:</span> <b><?php echo number_format($price_single, 0, ' ', ' ');?> руб.</b></p>
                        </div>
                    </div>
                </div>
                <div class="coupon_hidden">
                    <p class="total_price"  data-price_adult="<?php echo $price?>" data-price_child="<?php echo $price_child?>">
                        <span>Итоговая стоимость без сертификата:</span>
                        <?php if($start_count_places == 1) { ?>
                            <b><?php echo number_format($price + $price_single + $free_date->price, 0, ' ', ' ');?> руб.</b>
                        <?php } else { ?>
                            <b><?php echo number_format($price * 2 + ($free_date->price * 2), 0, ' ', ' ');?> руб.</b>
                        <?php } ?>
                    </p>
                </div>
                <div class="certificate_hidden hidden">
                    <p class="total_price_coupon total_price_certificate">
                        <span>Стоимость с использованием сертификата:</span>
                        <b><?php echo number_format($free_date->price * 2, 0, ' ', ' ');?> руб.</b>
                    </p>
                </div>
                    <a href="/ajax" class="pre_pay_class black_btn various fancybox.ajax" id="pay_btn_gen_1">Предварительно забронировать</a>
                    <a class="img_tor_print" href="/files/dogovor.pdf" target="_blank"><img src="/marstravel-bootstrap/img/word_img.png" width="51px"><span>Скачать договор</span></a>
                <div class="clearfix"></div>
                <div style="display: none">
                    <div id="pay_order">
                        <p class="lightbox_header">Предварительно забронировать</p>
                        <p class="lightbox_text"><?php echo $name?></p>
                        <form id="order_form" role="form" class="lightbox_form" data-id="1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="fio_1" placeholder="ФИО" name="fio">
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input id='datetimepicker_dob1' type="text" class="form-control" id="dob_1" placeholder="Дата рождения" name="dob_1">
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker_dob1').datetimepicker({
                                        viewMode: 'years',
                                        locale: 'ru',
                                        format: 'YYYY-MM-DD'
                                    });
                                });
                            </script>

                            <div class="form-group">
                                <input type="text" class="form-control" id="passport_1" placeholder="Номер паспорта РФ" name="passport">
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input type="text" class="form-control" id="validity_1" placeholder="Срок действия" name="validity">
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#validity_1').datetimepicker({
                                        viewMode: 'years',
                                        locale: 'ru',
                                        format: 'YYYY-MM-DD'
                                    });
                                });
                            </script>
                            <div class="form-group">
                                <input type="text" class="form-control" id="issuedby_1" placeholder="Кем выдан" name="issuedby">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_1" placeholder="Введите email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone_1" placeholder="Номер телефона" name="phone">
                            </div>
                            <div class="form-group certificate_hidden hidden">
                                <input type="text" disabled class="form-control" id="code_2" placeholder="Код сертификата" name="code">
                            </div>
                            <div class="form-group">
                                <select required size = "1" id = "payment_1" name="payment" class="selectpicker form-control">
                                    <option disabled value = "0">Способ оплаты</option>
                                    <option value = "1">Оплатить в офисе</option>
                                    <option value = "2">Картой онлайн</option>
                                    <option value = "3">Терминалы</option>
                                    <option value = "4">Отделения сотовой связи</option>
                                </select>
                            </div>
                            <div class="form-group text-left">
                                <label for="agreement_1" class="checkbox">
                                    <input type="checkbox" class="form-control" id="agreement_1" name="agreement">
                                    Согласен с <a href="/page/usloviya-tura" target="_blank">условиями тура</a>
                                </label>
                            </div>
                            <div class="form-group text-left">
                                <label for="agreement_2" class="checkbox">
                                    <input type="checkbox" class="form-control" id="agreement_2" name="agreement_2">
                                    Согласен с <a href="/files/dogovor.pdf" target="_blank">условиями договора</a>
                                </label>
                            </div>

                            <div class="coupon_hidden">
                                <div class="total_cost last_cost">
                                    <span>Итого:</span>
                                    <?php if($start_count_places == 1) { ?>
                                        <b><?php echo number_format($price + $price_single + $free_date->price, 0, ' ', ' ');?> руб.</b>
                                    <?php } else { ?>
                                        <b><?php echo number_format($price * 2 + ($free_date->price * 2), 0, ' ', ' ');?> руб.</b>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="certificate_hidden hidden">
                                <div class="total_cost_certificate last_cost">
                                    <span>Итого:</span>
                                    <?php if($start_count_places == 1) { ?>
                                        <b><?php echo number_format($free_date->price, 0, ' ', ' ');?> руб.</b>
                                    <?php } else { ?>
                                        <b><?php echo number_format(($free_date->price * 2), 0, ' ', ' ');?> руб.</b>
                                    <?php } ?>
                                </div>
                            </div>
                            <a href="#" class="red_btn" id="pay_btn" data-id="<?php echo $id?>">Оформить</a>
                            <script>
                                $(document).ready(function() {
                                $('#pay_btn').click(function(e) {
                                    e.preventDefault();
                                    var errors = 0;
                                    var code = $('input[name="code"]').data('coupon_code');
                                    var tour_id = $(this).data('id');
                                    var date = $('#date').val();
                                    var quantity_adults = $('#adult_number').val();
                                    var quantity_children = $('#children_number').val();
                                    var price = $('.total_price').data('price');
                                    if($('#fio_1').length>0){
                                        var fio = $('#fio_1').val();
                                        if (!fio) {
                                            $('#fio_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#fio_1').removeClass('error');
                                        }
                                    }
                                    if($('input[name=dob_1').length>0){
                                        var dob = $('input[name=dob_1').val();
                                        if (!dob) {
                                            $('input[name=dob_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('input[name=dob_1').removeClass('error');
                                        }
                                    }
                                    if($('#passport_1').length>0){
                                        var passport = $('#passport_1').val();
                                        if (!passport) {
                                            $('#passport_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#passport_1').removeClass('error');
                                        }
                                    }
                                    if($('#validity_1').length>0){
                                        var validity = $('#validity_1').val();
                                        if (!validity) {
                                            $('#validity_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#validity_1').removeClass('error');
                                        }
                                    }
                                    if($('#issuedby_1').length>0){
                                        var issuedby = $('#issuedby_1').val();
                                        if (!issuedby) {
                                            $('#issuedby_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#issuedby_1').removeClass('error');
                                        }
                                    }
                                    if($('#email_1').length>0){
                                        var email = $('#email_1').val();
                                        if (!email) {
                                            $('#email_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#email_1').removeClass('error');
                                        }
                                    }
                                    if($('#phone_1').length>0){
                                        var phone = $('#phone_1').val();
                                        if (!phone) {
                                            $('#phone_1').addClass('error');
                                            errors++;
                                        } else {
                                            $('#phone_1').removeClass('error');
                                        }
                                    }
                                    var payment = $('#payment_1').val();

                                    if ($('#agreement_1').is(':checked')) {
                                        var agreement = 1;
                                        $('#agreement_1').parent().parent().removeClass('error');
                                    } else {
                                        $('#agreement_1').parent().parent().addClass('error');
                                        var agreement = 0;
                                        errors++;
                                    }
                                    if ($('#agreement_2').is(':checked')) {
                                        var agreement = 1;
                                        $('#agreement_2').parent().parent().removeClass('error');
                                    } else {
                                        $('#agreement_2').parent().parent().addClass('error');
                                        var agreement = 0;
                                        errors++;
                                    }
                                    if ($('#surcharge_1').is(':checked')) {
                                        var surcharge = 1;
                                    } else {
                                        var surcharge = 0;
                                    }
                                    if(errors){
                                        return false;
                                    } else{
                                        $.ajax({
                                            url : "/order/add",
                                            dataType : "json",
                                            type : "post",
                                            data : {
                                                tour_id : tour_id,
                                                date : date,
                                                quantity_adults : quantity_adults,
                                                quantity_children : quantity_children,
                                                fio : fio,
                                                dob : dob,
                                                passport : passport,
                                                validity : validity,
                                                issuedby : issuedby,
                                                email : email,
                                                coupon_id : coupon_id,
                                                code: code,
                                                phone : phone,
                                                payment : payment,
                                                agreement : agreement,
                                                surcharge : surcharge
                                            },
                                            success : function(jsondata) {
                                                if(payment == 1) {
                                                    $('#pay_order').html('<p class="lightbox_header">Здравствуйте.  Ваша заявка принята.</p><p class="lightbox_text"><p style="margin-left: 15px; margin-right: 15px;">Спасибо за обращение в компанию «МАРС-тревел». Ждем Вас в течение двух рабочих дней  в офисах компании «МАРС-тревел»  для заключения договора и  совершения оплаты.</p>');
                                                }else{
                                                    $('#pay_order').html('<p class="lightbox_header">Здравствуйте.  Ваша заявка принята.</p><p class="lightbox_text" style="margin-left: 15px; margin-right: 15px;">Спасибо за обращение в компанию «МАРС-тревел». В течение одного рабочего дня на данный электронный адрес мы отправим Вам  ДОГОВОР. Вам необходимо  его подписать, отсканировать и выслать нам на почту excursion@turistic.ru в течение одного  рабочего дня после его получения*</p> <p>*Если Вы не получили договор в течение одного  рабочего дня после оформления  заявки  сообщите, пожалуйста, об этом в  компанию «МАРС-тревел» по телефону:  +7 (495) 22 33 829 </p>');
                                                }
                                            },
                                            error: function(xhr, status, error) {
                                                alert(status + '|\n' +error);
                                            }
                                        });
                                    }
                                });
                                });
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
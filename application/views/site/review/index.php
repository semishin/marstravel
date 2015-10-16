<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Отзывы</p>
        <p class="text-center duration">3 отзыва о нашей работе</p>
    </div>
</div>

<div class="col-xs-12">
    <div class="row tour_select">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-lg-2 col-xs-3">
                    <label for="tour_select">Отзывы о туре</label>
                </div>
                <div class="col-lg-10 col-xs-9">
                    <select class="selectpicker form-control rounded" id="tour_select">
                        <option value="null">Все туры</option>
                        <option>Анталия - Памуккале </option>
                        <option>Величие Двух Морей</option>
                        <option>Каппадокия</option>
                        <option>Наследие великих цивилизаций</option>
                        <option>Турецко-кипрский вояж</option>
                        <option>Величие Двух Морей (стандарт плюс)</option>
                        <option>Общие вопросы</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-4 text-center">
            <a href="#" class="btn_bordered"><span class="glyphicon glyphicon-pencil"></span> Написать отзыв</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="comment_item">
                <div class="comment_item_header">
                    <div class="author">Инна</div>
                    <ul class="rating_stars locked list-inline">
                        <li data-rating="1" class="active"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="2" class=""><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="3"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="4"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="5"><span class="glyphicon glyphicon-star"></span></li>
                    </ul>
                </div>
                <div class="comment_item_body">
                    <div class="tour_name">Тур «Наследие великих цивилизаций»</div>
                    <div class="tour_date">02/10/2015 — 09/10/2015</div>
                    <div class="text">Очень понравилось. Идеальное сочетание экскурсионной программы и пляжного отдыха. Всё
                        сбалансировано и продумано. Отдельное спасибо гиду Расиму и водителю Недим-бею.</div>
                </div>
                <div class="triangle-topleft"></div>
            </div>
            <div class="comment_item">
                <div class="comment_item_header">
                    <div class="author">Владимир</div>
                    <ul class="rating_stars locked list-inline">
                        <li data-rating="1" class="active"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="2" class=""><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="3"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="4"><span class="glyphicon glyphicon-star"></span></li>
                        <li data-rating="5"><span class="glyphicon glyphicon-star"></span></li>
                    </ul>
                </div>
                <div class="comment_item_body">
                    <div class="tour_name">Тур «Анталия - Памуккале»</div>
                    <div class="tour_date">19/04/2015 — 27/04/2015</div>
                    <div class="text">Ездили в экскурсионный тур в Турцию. Не ожидали, что настолько будет все слажено. И все это
                        благодаря интересному, начитанному гиду Осману и аккуратному мега профессиональному
                        водителю Махмуду. Особенно понравилась не навязчивость гида, все конкретно, четко и ясно. Все
                        мелочи, в виде скромных отелей, не замечались из-за познавательной информации которая
                        доносилась от гида. Хотелось его постоянно слушать. Повезет тому, кому попадется гид Осман.</div>
                </div>
                <div class="triangle-topleft"></div>
            </div>
        </div>
        <div class="col-xs-4">
            <img src="/marstravel-bootstrap/img/mars-socials.png" class="img-responsive center-block">
        </div>
    </div>
</div>

<div class="col-xs-12">

    <div class="order_tour">
        <p class="text-center">Оставьте отзыв</p>
        <div class="introductory_text text-center">
            Теперь каждый желающий может оставить свой отзыв о турах и работе нашей компании.<br>
            Мы уверены, что большинству наших клиентов есть, что сказать об уровне сервиса и о предоставляемых услугах.<br>
            Мы будем искренне благодарны каждому клиенту за оставленный им отзыв о нас.
        </div>
        <div class="center_rating">
            <span>Ваша оценка:</span>
            <ul class="rating_stars list-inline">
                <li data-rating="1"><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="2"><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="3"><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="4"><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="5"><span class="glyphicon glyphicon-star"></span></li>
            </ul>
        </div>
        <div class="form-group rounded">
            <label for="comment_author">Ваше имя</label>
            <input placeholder="Инна" type="text" id="comment_author" class="form-control">
        </div>
        <div class="form-group">
            <p style="margin-bottom: 12px;padding-left: 25px;font-size: 16px;color: #111111;font-weight: bold">Выберите дату поездки</p>
            <div class="row">
                <div class="col-xs-6">
                    <div class="input-group date add_error">
                        <input placeholder="с"  type="text" class="form-control" id="datetimepicker_start">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="input-group date add_error">
                        <input placeholder="по" type="text" class="form-control" id="datetimepicker_end">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
            <script>
                $('#datetimepicker_start, #datetimepicker_end').datetimepicker({
                    locale: 'ru',
                    useCurrent: false,
                    format: 'YYYY-MM-DD'
                });
                $('#datetimepicker_start+.input-group-addon').click(function(e){
                    $('#datetimepicker_start').data("DateTimePicker").show();
                });
                $('#datetimepicker_end+.input-group-addon').click(function(e){
                    $('#datetimepicker_end').data("DateTimePicker").show();
                });
            </script>
        </div>

        <div class="form-group rounded">
            <label for="comment_email">E-mail</label>
            <input placeholder="" type="text" id="comment_email" class="form-control">
        </div>
        <div class="form-group rounded">
            <label for="comment_tour">Тур</label>
            <select class="selectpicker form-control rounded" id="comment_tour">
                <option>Тур «Наследие великих цивилизаций»</option>
                <option>Анталия - Памуккале </option>
                <option>Величие Двух Морей</option>
                <option>Каппадокия</option>
                <option>Наследие великих цивилизаций</option>
                <option>Турецко-кипрский вояж</option>
                <option>Величие Двух Морей (стандарт плюс)</option>
                <option>Общие вопросы</option>
            </select>
        </div>
        <div class="form-group rounded">
            <label for="comment_review">Ваш отзыв</label>
            <textarea class="form-control" id="comment_review" rows="4"></textarea>
        </div>


        <div class="add_file_block text-center">
            <div class="text-muted">Фотографии в формате JPG или PNG. Не более 10Мб</div>
            <div class="fallback">
                <span class="dropzone_link">Загрузить ещё фото</span>
                <div id="dropzone_previews"></div>
            </div>
            <script>
                var myDropzone = new Dropzone( ".dropzone_link", {
                    url: "/file/post", // Set the url
                    thumbnailWidth: 80,
                    thumbnailHeight: 80,
                    parallelUploads: 20,
                    autoQueue: false, // Make sure the files aren't queued until manually added
                    previewsContainer: "#dropzone_previews",
                    addRemoveLinks: "dictRemoveFile"
                });
            </script>
        </div>
        <div class="text-center">
            <a href="#" class="black_btn none_float">Отправить</a>
        </div>

    </div>

</div>








<div class="col-xs-12 hidden">
    <?php foreach ($review as $item) { ?>
        <div class="page_info">
            <div class="hotel_contacts col-xs-12">
                <p><b><?php echo $item->name;?></b></p>
            </div>
            <hr>
            <div class="add_margin col-xs-12"><?php echo $item->text;?></div>
            <div class="col-xs-12">
                <div class="image">
                    <?php if($item->image) { ?>
                        <img src="<?php echo Lib_Image::resize_bg($item->image, 'review',$item->id, 370, 258); ?>" class="img-responsive">
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($count_review > 6) { ?>
        <p class="text-center"><button type="button" id="more_hotel" class="btn load_button black_btn">Загрузить ещё</button></p>
    <?php } ?>
</div>
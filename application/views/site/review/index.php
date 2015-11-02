<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Отзывы</p>
        <p class="text-center duration count_review"><?php echo $count_review_end?></p>
    </div>
</div>

<div class="col-xs-12 ">
    <div class="row tour_select">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-lg-2 col-xs-3">
                    <label for="tour_select">Отзывы о туре</label>
                </div>
                <div class="col-lg-10 col-xs-9">
                    <select class="selectpicker form-control rounded" id="tour_select">
                        <option value="null">Все туры</option>
                        <?php foreach ($tour as $index => $item) { ?>
                            <option value="<?php echo $item->id;?>"><?php echo $item->name?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-4 text-center">
            <a href="#from_send_comment_scroll" class="btn_bordered"><span class="glyphicon glyphicon-pencil"></span> Написать отзыв</a>
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col-xs-8 sort_ajax_comment" id="#main_column">
                <?php foreach ($review as $item) { ?>
                    <?php  $curent_tour = ORM::factory('Tour')->where('id', '=', $item->tour_id)->find();?>
                    <div class="comment_item">
                        <div class="comment_item_header">
                            <div class="author"><?php echo $item->name;?></div>
                            <ul class="rating_stars locked list-inline">
                                <li data-rating="1" <?php if($item->rating  >= 1) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                                <li data-rating="2" <?php if($item->rating  >= 2) { ?> class="active"<?php } ?> class=""><span class="glyphicon glyphicon-star"></span></li>
                                <li data-rating="3" <?php if($item->rating  >= 3) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                                <li data-rating="4" <?php if($item->rating  >= 4) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                                <li data-rating="5" <?php if($item->rating  == 5) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                            </ul>
                        </div>
                        <div class="comment_item_body">
                            <div class="tour_name"><?php echo $curent_tour->name;?></div>
                            <div class="tour_date"><?php if($item->start_date) { echo date("d/m/Y", strtotime($item->start_date)); } ?><?php if($item->start_date && $item->end_date) echo ' - '?><?php if($item->end_date) { echo  date("d/m/Y", strtotime($item->end_date)); } ?></div>
                            <div class="text">
                                <?php echo $item->text;?>
                            </div>
                            <div class="row">
                                <?php if($item->image) { ?>
                                    <?php $images = json_decode($item->image);?>
                                    <?php if($images) { ?>
                                            <?php foreach($images as $index =>  $image) { ?>
                                                <div class="col-xs-3">
                                                    <a class="images_sight" rel="gallery_<?php echo $item->id?>" href="<?php echo $image;?>" title="<?php echo $curent_tour->name?>">
                                                        <img src="<?php echo $image?>" class="img-responsive mt15" />
                                                    </a>
                                                </div>
                                            <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="triangle-topleft"></div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-xs-4" id="sidebar">
                <div style="max-width: 340px; margin: 0 auto;">
                <div id="fb-root"></div>
                    <div id="fb-root"></div>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-page" data-href="https://www.facebook.com/marstravelby?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/marstravelby?fref=ts"><a href="https://www.facebook.com/marstravelby?fref=ts">Mars Travel</a></blockquote></div></div>                <div id="vk_groups" style=" margin: 0 auto; margin-top: 20px;"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 0, width: "320", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 69940684);
                </script>
            </div>
        </div>
    </div>
</div>
<?php if ($count_review > 8) { ?>
    <p class="text-center"><button type="button" id="more_review" class="btn load_button black_btn">Загрузить ещё</button></p>
<?php } ?>
    <div class="col-xs-12 result_comment_save">
        <div class="order_tour">
            <p class="text-center" id="from_send_comment_scroll">Оставьте отзыв</p>
            <div class="introductory_text text-center">
                Теперь каждый желающий может оставить свой отзыв о турах и работе нашей компании.<br>
                Мы уверены, что большинству наших клиентов есть, что сказать об уровне сервиса и о предоставляемых услугах.<br>
                Мы будем искренне благодарны каждому клиенту за оставленный им отзыв о нас.
            </div>
            <div class="center_rating">
                <span>Ваша оценка:</span>
                <ul class="rating_stars list-inline" id="select_rating_star">
                    <li data-rating="1"><span class="glyphicon glyphicon-star"></span></li>
                    <li data-rating="2"><span class="glyphicon glyphicon-star"></span></li>
                    <li data-rating="3"><span class="glyphicon glyphicon-star"></span></li>
                    <li data-rating="4"><span class="glyphicon glyphicon-star"></span></li>
                    <li data-rating="5"><span class="glyphicon glyphicon-star"></span></li>
                </ul>
            </div>
            <div class="form-group rounded add_error">
                <label for="comment_author">Ваше имя</label>
                <input type="text" id="comment_author" class="form-control">
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
                        format: 'DD-MM-YYYY'
                    });
                    $('#datetimepicker_start+.input-group-addon').click(function(e){
                        $('#datetimepicker_start').data("DateTimePicker").show();
                    });
                    $('#datetimepicker_end+.input-group-addon').click(function(e){
                        $('#datetimepicker_end').data("DateTimePicker").show();
                    });
                </script>
            </div>

            <div class="form-group rounded add_error">
                <label for="comment_email">E-mail</label>
                <input placeholder="" type="text" id="comment_email" class="form-control">
            </div>
            <div class="form-group rounded">
                <label for="comment_tour">Тур</label>
                <select class="selectpicker form-control rounded" id="comment_tour">
                    <?php foreach ($tour as $index => $item) { ?>
                        <option value="<?php echo $item->id;?>"><?php echo $item->name?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group rounded add_error">
                <label for="comment_review">Ваш отзыв</label>
                <textarea class="form-control" id="comment_review" rows="4"></textarea>
            </div>

            <form id="dropzone_review" action="/review/file/ajax" class="input_file">
            <div class="add_file_block text-center">
                <div class="text-muted">Фотографии в формате JPG или PNG. Не более 10Мб</div>
                <div class="fallback">
                    <span class="dropzone_link">Загрузить ещё фото</span>
                    <div id="dropzone_previews"></div>
                </div>
                <script>
                    var fileName = [];
                    $(".dropzone_link").dropzone({
                        url: "/review/file/ajax",
                        thumbnailWidth: 80,
                        thumbnailHeight: 80,
                        previewsContainer: "#dropzone_previews",
                        addRemoveLinks: true,
                        success: function(file) {
                          var fileSucces = JSON.parse(file.xhr.response);
                            fileName.push(fileSucces.fileName);
                            console.log(fileName);
                            file.previewElement.classList.remove("file_uploading_status");
                        },
                        removedfile: function(file) {
                            var fileSucces = JSON.parse(file.xhr.response);
                            fileName.splice(fileName.indexOf(fileSucces.fileName), 1);
                            console.log(fileName);
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                        },
                        uploadprogress:  function(file, progress) {

                        },
                        sending: function(file){
                            file.previewElement.classList.add("file_uploading_status");
                        }
                    });
                </script>
            </div>
            </form>
            <div class="text-center">
                <a href="#from_send_comment_scroll" class="black_btn none_float" id="sent_comment">Отправить</a>
            </div>
        </div>
    </div>

<script>
    $( document ).ready(function() {
        $("#sidebar, #main_column").stick_in_parent();
        $('#sent_comment').click(function(e){
            e.preventDefault();
            var errors = 0;
            var name = $('#comment_author').val();
            var tour_id = $('#comment_tour :selected').val();
            var email = $('#comment_email').val();
            var text = $('#comment_review').val();
            var start_date = $('#datetimepicker_start').val();
            var end_date = $('#datetimepicker_end').val();
            var rating = $('#select_rating_star .active').length;
            if (!name) {
                $('#comment_author').addClass('error');
                errors++;
            } else {
                $('#comment_author').removeClass('error');
            }
            if (!email) {
                $('#comment_email').addClass('error');
                errors++;
            } else {
                $('#comment_email').removeClass('error');
            }
            if (!text) {
                $('#comment_review').addClass('error');
                errors++;
            } else {
                $('#comment_review').removeClass('error');
            }
            if(!isValidEmailAddress(email)){
                $('#comment_email').addClass('error');
                errors++;
            } else {
                $('#comment_email').removeClass('error');
            }
            if(errors > 0)
                return false;
            $.ajax({
                type: "POST",
                url: "review/save",
                dataType: 'json',
                data: {
                    tour_id: tour_id,
                    name: name,
                    text: text,
                    email: email,
                    start_date: start_date,
                    end_date: end_date,
                    fileName: fileName,
                    rating: rating
                },
                success: function (data) {
                    $('.result_comment_save .order_tour').html('<p class="text-center" id="from_send_comment_scroll">'+data.message+'</p>')
                }
            })
        });
    });
</script>

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
</div>
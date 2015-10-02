var sightsOptions = {
    query: '',
    city_id: '0',
    category_id: '0',
    excursions: 0
};
var hotelOptions = {
    query: '',
    city_id: '0',
    stars: '0'
};
var excursionsOptions = {
    query: '',
    city_id: '0',
    category_id: '0'
};
var offset = 6;
var coupon_id = 0;

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}


function numFormat(n, d, s) { // number format function
    if (arguments.length == 2) { s = " "; }
    if (arguments.length == 1) { s = " "; d = "."; }
    n = n.toString();
    a = n.split(d);
    x = a[0];
    y = a[1];
    z = "";
    if (typeof(x) != "undefined") {
        for (i=x.length-1;i>=0;i--)
            z += x.charAt(i);
        z = z.replace(/(\d{3})/g, "$1" + s);
        if (z.slice(-s.length) == s)
            z = z.slice(0, -s.length);
        x = "";
        for (i=z.length-1;i>=0;i--)
            x += z.charAt(i);
        if (typeof(y) != "undefined" && y.length > 0)
            x += d + y;
    }
    return x;
}

// A $( document ).ready() block.
$( document ).ready(function() {

    $(window).load(function() {
        if($('.index_page').length>0){
            setTimeout(function() {
                $(".index_page").addClass("blur");
                $(".index_page").addClass("visible");
            }, 1200);
        }


        if( ($('.slider .right_part').length>0) && ($('.tour').length>0)){
            var img_height = $(".tour").height();
            var img_width = $(".slider .right_part").width();
            $(".tour .right_part .image img").width(img_width+30);
            $(".tour .right_part .image img").height(img_height);
        }

        if( ($('.left_banner').length>0) && ($('.tour').length>0)){
            var height = $(".tour").height();
            $(".left_block .left_banner").height(height);
        }

        if($('#any_id').length>0){
            var slider_height = $("#any_id>.barousel_image>img").height();
            $("#any_id").height(slider_height);
        }


    });
    if($('.index_page').length>0){
        var w_width = $(".index_page .content").width();
        var w_height = $(".index_page .content").height();
        $(".index_page>.background_image").width(w_width+6);
        $(".index_page>.background_image").height(w_height+6);
    }


    $(".certificate .two_buttons .left_btn").hover(
        function () {
            $(".index_page").removeClass("blur");
        },
        function () {
            $(".index_page").addClass("blur");
        }
    );
    $(".certificate .two_buttons .right_btn").hover(
        function () {
            $(".index_page").addClass("grayscale");
        },
        function () {
            $(".index_page").removeClass("grayscale");
        }
    );


    $('.carousel').carousel({
        interval: false
    });

    if( $('.slider .right_part').length>0 ){
        $(".carousel-indicators>li").click(function () {
            var slide_number = $(this).data('slide-to');
            $(".right_part .slide_text.active").removeClass('active');
            $(".right_part .slide_text.text"+slide_number).addClass('active');
        });
    }

    $('.tooltip_icon').tooltip();

    $(".fancy").fancybox();

    var counter1 = 0;
    var counter2 = 0;

    $(".counter1>.btn-group>button:first-child").click(function () {
        var quantity_val = $("#adult_number").val();
        if(quantity_val){
            counter1 = quantity_val;
        }
        if(counter1>0)
            counter1--;
        $("#adult_number").val(counter1);
    });
    $(".counter1>.btn-group>button:last-child").click(function () {
        var quantity_val = $("#adult_number").val();
        if(quantity_val){
            counter1 = quantity_val;
        }
        counter1++;
        $("#adult_number").val(counter1);
    });

    $(".counter2>.btn-group>button:first-child").click(function () {
        var quantity_val = $("#children_number").val();
        if(quantity_val){
            counter1 = quantity_val;
        }
        if(counter2>0)
            counter2--;
        $("#children_number").val(counter2);
    });
    $(".counter2>.btn-group>button:last-child").click(function () {
        var quantity_val = $("#children_number").val();
        if(quantity_val){
            counter1 = quantity_val;
        }
        counter2++;
        $("#children_number").val(counter2);
    });




    if($('#any_id').length>0){

        $('#any_id').barousel({
            navType: 2,
            fadeIn: 1,
            manualCarousel: 1
        });

        var image_width = $("#any_id").width();
        $("#any_id>.barousel_image>img").width(image_width);
    }


    $.fn.equalizeHeights = function() {
        var maxHeight = this.map(function(i,e) {
            return $(e).height();
        }).get();

        return this.height( Math.max.apply(this, maxHeight) );
    };


    $('.sights_block').each(function(i,elem) {
        $(this).find('.sight .name').equalizeHeights();
    });

    $('.two_half_block').each(function(i,elem) {
        $(this).find('.same_height').equalizeHeights();
    });


    if($('.selectpicker').length>0){
        $('.selectpicker').selectpicker();
    }

    if($('.filter').length>0){
        $('.filter input').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal',
            increaseArea: '20%' // optional
       });
        $('.filter input').on('ifChanged', function(event){
            sightsOptions.excursions = sightsOptions.excursions ? 0 : 1;
            $.ajax({
                type: "POST",
                url: "/sight/ajax",
                data: sightsOptions,
                dataType: 'json',
                success: function(result) {
                    offset = 6;
                    //$('.portfolio_buttons li button').removeClass('active');
                    //$(this).addClass('active');
                    $('.sights_block .row').html(result.html);
                    $('#count_sight').text("всего " + result.count_sight + " мест");

                    $('.empty_result').remove();
                    if( result.count_sight == 0 ){
                        $('.sights_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                    }

                    $('#count_excursion').text(result.count_excursion);
                    if (!result.more) {
                        $('#more_sight').hide();
                    } else {
                        $('#more_sight').show();
                    }
                }
            });
        });
    }

    $('#ask_consultant_btn').click(function(e) {
        e.preventDefault();
        var theme = $("#theme_quastion :selected").val();
        var errors = 0;
        if($('#Name_0').length>0){
            var name = $('#Name_0').val();
            if (!name) {
                $('#Name_0').addClass('error');
                errors++;
            } else {
                $('#Name_0').removeClass('error');
            }
        }
        if($('#Email_0').length>0){
            var email = $('#Email_0').val();
            if (!email) {
                $('#Email_0').addClass('error');
                errors++;
            } else {
                $('#Email_0').removeClass('error');
            }
        }
        if($('#Phone_0').length>0){
            var phone = $('#Phone_0').val();
            if (!phone) {
                $('#Phone_0').addClass('error');
                errors++;
            } else {
                $('#Phone_0').removeClass('error');
            }
        }
        if($('#Question_0').length>0){
            var question = $('#Question_0').val();
            if (!question) {
                $('#Question_0').addClass('error');
                errors++;
            } else {
                $('#Question_0').removeClass('error');
            }
        }

        if(theme == 'null'){
            $('#theme_quastion').addClass('error');
            errors++;
        } else {
            $('#theme_quastion').removeClass('error');
        }

        if (errors) {
            return false;
        } else{
            $.ajax({
                url : "/question/add",
                dataType : "json",
                type : "post",
                data : {name : name, email : email, phone : phone, question : question, theme: theme},
                success : function(jsondata) {
                    $('#ask_consultant').html('<p class="lightbox_header">Здравствуйте. Ваш вопрос принят.</p><p class="lightbox_text">В самое ближайшее время  менеджер компании   «МАРС-тревел»  свяжется с Вами.</p>');
                },
                error: function(xhr, status, error) {
                    alert(status + '|\n' +error);
                }
            });
        }
    });

    $('#pay_btn_gen_1').click(function(e) {
        e.preventDefault();
        var date = $('#date').val();
        var quantity_adults = $('#adult_number').val();
        var error = 0;
        if (!date) {
            error++;
            $('input[name="daterange"]').parent().addClass('error');
        }else{
            $('input[name="daterange"]').parent().removeClass('error');
        }
        if (!quantity_adults || quantity_adults == 0) {
            error++;
            $('#adult_number').addClass('error');
        }else{
            $('#adult_number').removeClass('error');
        }
        if(error > 0){
            return false;
        }
    });


    $('#check_coupon').click(function(e){
        e.preventDefault();
        var quantity_adults = $('#adult_number').val();
        var quantity_children = $('#children_number').val();
        var single_price = $('.content_single_price').data('single_price');
        var date = $('.day.active').attr('data-day');
        if(!quantity_children){
            quantity_children = 0;
        }
        if(!quantity_adults){
            quantity_adults = 0;
        }
        var tour_id = $(this).data('tour_id');
        if($('#code_2').length>0){
            var code = $('#code_2').val();
            if (!code) {
                $('.promo_code_block').addClass('error');
                return false;
            } else {
                $('.promo_code_block').removeClass('error');
            }
        }
        $.ajax({
            url : "/ordercoupon/code",
            dataType : "json",
            type : "post",
            data : {
                code : code,
                tour_id : tour_id,
                date: date,
                quantity_adults: quantity_adults,
                quantity_children: quantity_children
            },
            success : function(jsondata) {
                if (jsondata.coupon_id == 0) {
                    $('.promo_code_block').addClass('error');
                    $('input[name="code"]').val('Неверный код сертификата');
                    return false;
                } else {
                    $('.promo_code_block').addClass('succes');
                    $('.promo_code_block .use_code_btn').attr('disabled', true);
                    $('.promo_code_block input[name="code"]').attr('disabled', true);
                    $('.certificate_hidden.hidden').removeClass('hidden');
                    $('.coupon_hidden').addClass('hidden');
                    $('input[name="code"]').val('Код сертификата '+ jsondata.code_coupon +' принят');
                    $('input[name="code"]').data('coupon_code', jsondata.code_coupon);
                    coupon_id = jsondata.coupon_id;
                }
            }
        });
    });




    $('.star_label_trans').hover(
        function(){
            var max_width = $('.tour .image').width();
            var text_width = $(this).find(".text b").width();
            if(text_width > 175){
                $(this).find(".text").width(205);
            } else{
                $(this).find(".text").width(text_width+30);
            }
        },
        function(){
            $(this).find(".text").width(0);
        });

    $('#find_btn.findhotel').on('click', function(e) {
        e.preventDefault();
        hotelOptions.query = $(this).parent().find('input').val();
        $.ajax({
            type: "POST",
            url: "/hotel/ajax",
            data: hotelOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + rescostult.count_hotel + " отелей");

                $('.empty_result').remove();
                if( result.count_hotel == 0 ){
                    $('.hotels_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                if (!result.more) {
                    $('#more_hotel').hide();
                } else {
                    $('#more_hotel').show();
                }
            }
        });
    });

    $('#cityhotel .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        hotelOptions.city_id = $(this).find('option:selected').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/hotel/ajax",
            data: hotelOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");

                $('.empty_result').remove();
                if( result.count_hotel == 0 ){
                    $('.hotels_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                if (!result.more) {
                    $('#more_hotel').hide();
                } else {
                    $('#more_hotel').show();
                }
            }
        });
    });

    $('#hotelstar .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        hotelOptions.stars = $(this).find('option:selected').val();
        $.ajax({
            type: "POST",
            url: "/hotel/ajax",
            data: hotelOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");

                $('.empty_result').remove();
                if( result.count_hotel == 0 ){
                    $('.hotels_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                if (!result.more) {
                    $('#more_hotel').hide();
                } else {
                    $('#more_hotel').show();
                }
            }
        });
    });

    $('#more_hotel').click(function(e) {
        e.preventDefault();
       hotelOptions.offset = offset;
        $.ajax({
            type: "POST",
            url: "/hotel/more",
            data: hotelOptions,
            dataType: 'json',
            success: function(result) {
                offset += 6;
                var html = $('.hotels_block .row').html();
                html += result.html;
                $('.hotels_block .row').html(html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");

                $('.empty_result').remove();
                if( result.count_hotel == 0 ){
                    $('.hotels_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                if (!result.more) {
                    $('#more_hotel').hide();
                }
            }
        });
    });

    $('#find_btn.findsight').on('click', function(e) {
        e.preventDefault();
        sightsOptions.query = $(this).parent().find('input').val();
        $.ajax({
            type: "POST",
            url: "/sight/ajax",
            data: sightsOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");

                $('.empty_result').remove();
                if( result.count_sight == 0 ){
                    $('.sights_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                $('#count_excursion').text(result.count_excursion);
                if (!result.more) {
                    $('#more_sight').hide();
                } else {
                    $('#more_sight').show();
                }
            }
        });
    });

    $('#citysight .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        sightsOptions.city_id = $(this).find('option:selected').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/sight/ajax",
            data: sightsOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");

                $('.empty_result').remove();
                if( result.count_sight == 0 ){
                    $('.sights_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                $('#count_excursion').text(result.count_excursion);
                if (!result.more) {
                    $('#more_sight').hide();
                } else {
                    $('#more_sight').show();
                }
            }
        });
    });

    $('#categorysight .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        sightsOptions.category_id = $(this).find('option:selected').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/sight/ajax",
            data: sightsOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");

                $('.empty_result').remove();
                if( result.count_sight == 0 ){
                    $('.sights_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                $('#count_excursion').text(result.count_excursion);
                if (!result.more) {
                    $('#more_sight').hide();
                } else {
                    $('#more_sight').show();
                }
            }
        });
    });

    $('#more_sight').click(function(e) {
        e.preventDefault();
        sightsOptions.offset = offset;
        $.ajax({
            type: "POST",
            url: "/sight/more",
            data: sightsOptions,
            dataType: 'json',
            success: function(result) {
                offset += 6;
                var html = $('.sights_block .row').html();
                html += result.html;
                $('.sights_block .row').html(html);
                $('#count_sight').text("всего " + result.count_sight + " мест");

                $('.empty_result').remove();
                if( result.count_sight == 0 ){
                    $('.sights_block').append('<div class="empty_result text-center"><span class="label label-info">Не найдено</span></div>');
                }

                if (!result.more) {
                    $('#more_sight').hide();
                }
            }
        });
    });

    $('#find_btn.findexcursion').on('click', function(e) {
        e.preventDefault();
        excursionsOptions.query = $(this).parent().find('input').val();
        $.ajax({
            type: "POST",
            url: "/excursion/ajax",
            data: excursionsOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_excursion').text("всего " + result.count_excursion + " экскурсий");
                if (!result.more) {
                    $('#more_excursion').hide();
                } else {
                    $('#more_excursion').show();
                }
            }
        });
    });

    $('#cityexcursion .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        excursionsOptions.city_id = $(this).find('option:selected').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/excursion/ajax",
            data: excursionsOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_excursion').text("всего " + result.count_excursion + " экскурсий");
                if (!result.more) {
                    $('#more_excursion').hide();
                } else {
                    $('#more_excursion').show();
                }
            }
        });
    });

    $('#categoryexcursion .selectpicker.form-control').change(function(e) {
        e.preventDefault();
        excursionsOptions.category_id = $(this).find('option:selected').attr('data-id');
        $.ajax({
            type: "POST",
            url: "/excursion/ajax",
            data: excursionsOptions,
            dataType: 'json',
            success: function(result) {
                offset = 6;
                $('.sights_block .row').html(result.html);
                $('#count_excursion').text("всего " + result.count_excursion + " экскурсий");
                if (!result.more) {
                    $('#more_excursion').hide();
                } else {
                    $('#more_excursion').show();
                }
            }
        });
    });

    $('#more_excursion').click(function(e) {
        e.preventDefault();
        excursionsOptions.offset = offset;
        $.ajax({
            type: "POST",
            url:  "/excursion/more",
            data: excursionsOptions,
            dataType: 'json',
            success: function(result) {
                offset += 6;
                var html = $('.sights_block .row').html();
                html += result.html;
                $('.sights_block .row').html(html);
                $('#count_excursion').text("всего " + result.count_excursion + " экскурсий");
                if (!result.more) {
                    $('#more_excursion').hide();
                }
            }
        });
    });

    $('button[name="sign_in"]').click(function(e) {
        e.preventDefault();
            var email = $('input[name="email_login"]').val();
            var password = $('input[name="password"]').val();
            var remember = $("#remember_check input").prop("checked");
            if(!email || !password) {
                    alert("Заполните все поля");
                    return false;
                }
            if(!isValidEmailAddress(email)){
                alert('Проверте праильность email');
                return false;
            }
            else {
                    $.ajax({
                        type: "POST",
                        url: "/auth/login",
                        dataType: "json",
                        data: {email: email, password: password, remember: remember},
                        success: function (data) {
                            if (data.message != 'success') {
                                alert('Неверный email или пароль');
                            } else {
                                window.location.href = '/user';
                            }
                        }
                    });
                }
    });

    $('button[name="add_coupon"]').click(function(e) {
        e.preventDefault();
            var tour_id = $(this).attr('data-tour_id');
            if(!tour_id) {
                return false;
            }
            $.ajax({
                type: "POST",
                url: "/user/create_coupon",
                dataType: "json",
                data: {tour_id: tour_id},
                success: function (data) {
                    if (data.message != 'success') {
                        alert('Не удалось сгенерировать купон');
                    } else {
                        alert('Купон сгенерирован');
                    }
                }
            });
    });

    $('button[name="print_page"]').click(function(e){
        e.preventDefault();
        var id = $(this).attr('data-tour_id');
        var code = $(this).attr('data-code_coupon');
        window.location.href = '/coupons/'+code+'-'+id+'.pdf';
    });

    $('button[name="save_data_profile"]').click(function(e){
        e.preventDefault();
        var phone = $('input[name="phone_profile"]').val();
        var name = $('input[name="name_profile"]').val();
        var contact = $('input[name="contact"]').val();
        var address = $('input[name="address"]').val();
        var requisites = $('#requisites').code();
        var description = $('#description').code();
        $.ajax({
            type: "POST",
            url: "/user/save",
            dataType: "json",
            data: {phone: phone, contact: contact, address: address, requisites: requisites, description: description, name: name},
            success: function (data) {
                if (data.message != 'success') {
                    alert('Не сохранит изменения');
                } else {
                    window.location.href = '/user';
                }
            }
        });
    });


    $('.search_line .search input').focusin(function(){
        $('.search_line .search').addClass('focus-state');
    });
    $('.search_line .search input').focusout(function(){
        $('.search_line .search').removeClass('focus-state');
    });

    $(function($) {
        $.localScroll({
            duration: 1000,
            hash: false });
    });

    $('.lightbox_form input[type="checkbox"] ').iCheck({
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal',
        increaseArea: '20%' // optional
    });

    $(document).ready(function() {
        $(".images_sight").fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
    });


    $('button[name="send_data_people"]').click(function(){
        var quantity_adults = $('#adult_number').val();
        var quantity_children = $('#children_number').val();
        var get_carent_date = $('input[name="daterange"]').val();
        var tour_id = $('.order_tour').attr('data-tour_id');
        if(!quantity_children){
            quantity_children = 0;
        }
        if(!quantity_adults){
            quantity_adults = 0;
        }
        if(quantity_adults == 1){
            $(".counter1>.btn-group>button:first-child").attr('disabled', true);
        }else{
            $(".counter1>.btn-group>button:first-child").attr('disabled', false);
        }
        var single_price = $('.content_single_price').data('single_price');
        if(((parseInt(quantity_adults) + parseInt(quantity_children)) == 1) &&  single_price > 0){
            $('.surcharge').addClass('hidden');
            $('.surcharge_single').removeClass('hidden');
            $('.add_content_single_price').removeClass('hidden');
        }else{
            $('.add_content_single_price').addClass('hidden');
            $('.surcharge_single').addClass('hidden');
            $('.surcharge').removeClass('hidden');
        }
            $.ajax({
                type: "POST",
                url: "/tour/get/info",
                data: {quantity_adults: quantity_adults, quantity_children: quantity_children, get_carent_date: get_carent_date, tour_id: tour_id},
                dataType: 'json',
                success: function(result) {
                    if(result.message){
                        $('#datetimepicker').data("DateTimePicker").clear();
                        $('input[name="daterange"]').parent().addClass('error');
                        $(".counter1>.btn-group>button:last-child").attr('disabled', true);
                        $('.change_placeholder').attr('placeholder', result.message);
                        $('.change_placeholder').attr("disabled", true);
                    }else{
                        $('.change_placeholder').attr("disabled", false);
                        $(".counter1>.btn-group>button:last-child").attr('disabled', false);
                        $('#datetimepicker').data("DateTimePicker").destroy();
                        $('.add_content_flight').html(' ');
                        $('input[name="daterange"]').parent().removeClass('error');
                        $('.change_placeholder').attr('placeholder', 'Выберите дату');
                        var days = result.days;
                        $('#datetimepicker').datetimepicker({
                            locale: 'ru',
                            useCurrent: false,
                            format: 'YYYY-MM-DD',
                            minDate: (result.min_date_start),
                            enabledDates: $.makeArray(days)
                        });
                        if(result.not_free_places_carent_date){
                            $('#datetimepicker').data("DateTimePicker").clear();
                            $('input[name="daterange"]').parent().addClass('error');
                            $('.change_placeholder').attr('placeholder', result.not_free_places_carent_date);
                        }else{
                            $('input[name="daterange"]').parent().remove('error');
                            $('.change_placeholder').attr('placeholder', result.not_free_places_carent_date);
                        }
                    }
                }
            });
        });

    $("#datetimepicker").on("dp.change", function (e) {
        var quantity_adults = $('#adult_number').val();
        var quantity_children = $('#children_number').val();
        var get_carent_date = $('input[name="daterange"]').val();
        var tour_id = $('.order_tour').attr('data-tour_id');
        if(!quantity_children){
            quantity_children = 0;
        }
        if(!quantity_adults){
            quantity_adults = 0;
        }
        var date = $('.day.active').attr('data-day');
            $.ajax({
                type: "POST",
                url: "/tour/get/info",
                data: {tour_id: tour_id, get_carent_date: get_carent_date, date: date, quantity_adults: quantity_adults, quantity_children: quantity_children},
                dataType: 'json',
                success: function (data) {
                    if (data.cost_flight) {
                        $('input[name="daterange"]').parent().removeClass('error');
                        $('.total_price b').html('' + numFormat(data.total_cost_not_coupon) + ' руб.');
                        $('.total_price_coupon b').html('' + numFormat(data.total_cost_coupon) + ' руб.');
                        $('.add_content_flight').html('<p class="content_flight"> <span>Стоимость перелета:</span> <b>' + numFormat(data.cost_flight) + ' руб.</b> </p>');
                    }
                }
            })

    });
    $('.input-group.date #date').click(function(e){
        $('#datetimepicker').data("DateTimePicker").show();
    });

    $(".generate_code").click(function(e){
        e.preventDefault();
        var tour_id = $(this).attr('data-tour_id');
        var tour_name = $(this).attr('data-tour_name');
        var server_name = $('input[name="server_name"]').val();
        $('.name_tour_header').text(tour_name);
        $("#create_coupon_form").attr("action", 'http://'+server_name+'/user/create_coupon/'+tour_id);
        $("#certificate_data_user").attr("href", 'http://'+server_name+'/user/create_coupon/'+tour_id);
        $(".generate_code").fancybox();
    });

    $('#certificate_data_user').click(function(e){
        e.preventDefault();
        var errors = 0;
        var quantity = $(this).attr('data-quantity');
        if($('#name').length>0){
            var name = $('#name').val();
            if (!name) {
                $('#name').addClass('error');
                errors++;
            } else {
                $('#name').removeClass('error');
            }
        }
        if($('#date_birth').length>0){
            var date_birth = $('#date_birth').val();
            if (!date_birth) {
                $('#date_birth').addClass('error');
                errors++;
            } else {
                $('#date_birth').removeClass('error');
            }
        }
        if($('#email').length>0){
            var email = $('#email').val();
            if (!email) {
                $('#email').addClass('error');
                errors++;
            } else {
                $('#email').removeClass('error');
            }
        }
        if($('#phone').length>0){
            var phone = $('#phone').val();
            if (!phone) {
                $('#phone').addClass('error');
                errors++;
            } else {
                $('#phone').removeClass('error');
            }
        }
        if($('#name_manager').length>0){
            var name_manager = $('#name_manager').val();
            if (!name_manager) {
                $('#name_manager').addClass('error');
                errors++;
            } else {
                $('#name_manager').removeClass('error');
            }
        }
        if(errors > 0){
            return false;
        }else{
            $('#create_coupon_form').submit();
            $(".generate_code").fancybox();
        }
    });

    $(".pre_pay_class").on('click', function(e) {
        e.preventDefault();
        var quantity_adults = $('#adult_number').val();
        var quantity_children = $('#children_number').val();
        $(this).attr('href', '/ajax?quantity_adults='+quantity_adults+'&quantity_children='+quantity_children);
    });

    $(".pre_pay_class").fancybox({
        maxWidth	: 800,
        maxHeight	: 900,
        fitToView	: false,
        width		: '70%',
        height		: '90%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });


});


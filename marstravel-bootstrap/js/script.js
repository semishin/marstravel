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
        if( ($('.left_menu').length>0) && ($('.tour').length>0)){
            var height = $(".tour").height();
            $(".left_menu>ul").height(height);
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
    })

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
        if(counter1>0)
            counter1--;
        $("#adult_number").val(counter1);
    });
    $(".counter1>.btn-group>button:last-child").click(function () {
        counter1++;
        $("#adult_number").val(counter1);
    });

    $(".counter2>.btn-group>button:first-child").click(function () {
        if(counter2>0)
            counter2--;
        $("#children_number").val(counter2);
    });
    $(".counter2>.btn-group>button:last-child").click(function () {
        counter2++;
        $("#children_number").val(counter2);
    });


    if($('input[name="daterange"]').length>0){
        $('input[name="daterange"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    }


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

    $('.hotels_block').each(function(i,elem) {
        $(this).find('.hotel .name').equalizeHeights();
    });

    $('.sights_block').each(function(i,elem) {
        $(this).find('.sight .name').equalizeHeights();
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

    $('.lightbox_form .red_btn').click(function(e) {
        e.preventDefault();
        var errors = 0;
        var f_id = $(this).data('id');
        //alert("data-id="+f_id)
        if($('.lightbox_form[data-id='+f_id+'] input[name="name"]').length>0){
            var name = $('.lightbox_form[data-id='+f_id+'] input[name="name"]').val();
            //alert("name="+name);
            if (!name) {
                $('.lightbox_form[data-id='+f_id+'] input[name=name]').addClass('error');
                errors++;
            } else {
                $('.lightbox_form[data-id='+f_id+'] input[name=name]').removeClass('error');
            }
        }
        if($('.lightbox_form[data-id='+f_id+'] input[name="email"]').length>0){
            var email = $('.lightbox_form[data-id='+f_id+'] input[name="email"]').val();
            //alert("email="+email);
            if (!email) {
                $('.lightbox_form[data-id='+f_id+'] input[name=email]').addClass('error');
                errors++;
            } else {
                $('.lightbox_form[data-id='+f_id+'] input[name=email]').removeClass('error');
            }
        }
        if($('.lightbox_form[data-id='+f_id+'] input[name="phone"]').length>0){
            var phone = $('.lightbox_form[data-id='+f_id+'] input[name="phone"]').val();
            //alert("phone="+phone);
            if (!phone) {
                $('.lightbox_form[data-id='+f_id+'] input[name=phone]').addClass('error');
                errors++;
            } else {
                $('.lightbox_form[data-id='+f_id+'] input[name=phone]').removeClass('error');
            }
        }
        if($('.lightbox_form[data-id='+f_id+'] input[name="code"]').length>0){
            var code = $('.lightbox_form[data-id='+f_id+'] input[name="code"]').val();
            //alert("code="+code);
            if (!code) {
                $('.lightbox_form[data-id='+f_id+'] input[name=code]').addClass('error');
                errors++;
            } else {
                $('.lightbox_form[data-id='+f_id+'] input[name=code]').removeClass('error');
            }
        }
        if($('.lightbox_form[data-id='+f_id+'] textarea[name="question"]').length>0){
            var question = $('.lightbox_form[data-id='+f_id+'] textarea[name="question"]').val();
            //alert("question="+question);
            if (!question) {
                $('.lightbox_form[data-id='+f_id+'] textarea[name=question]').addClass('error');
                errors++;
            } else {
                $('.lightbox_form[data-id='+f_id+'] textarea[name=question]').removeClass('error');
            }
        }

        if (errors) {
            alert("error "+errors);
            return false;
        } else{
            switch (f_id) {
                case 0:
                    //alert("ajax method - "+f_id);
                    $.ajax({
                        url : " ",
                        dataType : "json",
                        type : "post",
                        data : {name : name, email : email, phone : phone, question : question},
                        success : function(jsondata) {
                            alert("Success");
                        },
                        error: function(xhr, status, error) {
                            alert(status + '|\n' +error);
                        }
                    });
                    break
                case 1:
                    //alert("ajax method - "+f_id);
                    $.ajax({
                        url : " ",
                        dataType : "json",
                        type : "post",
                        data : {name : name, email : email, phone : phone},
                        success : function(jsondata) {
                            alert("Success");
                        },
                        error: function(xhr, status, error) {
                            alert(status + '|\n' +error);
                        }
                    });
                    break
                case 2:
                    //alert("ajax method - "+f_id);
                    $.ajax({
                        url : " ",
                        dataType : "json",
                        type : "post",
                        data : {name : name, email : email, phone : phone, code : code},
                        success : function(jsondata) {
                            alert("Success");
                        },
                        error: function(xhr, status, error) {
                            alert(status + '|\n' +error);
                        }
                    });
                    break
                default:
                    alert('Я таких значений не знаю')
            }
        }
    });


    $('.star_label_trans').hover(
        function(){
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

    $('#findhotel.form-control').keyup(function(e) {
        e.preventDefault();
        hotelOptions.query = $(this).val();
        $.ajax({
            type: "POST",
            url: "/hotel/ajax",
            data: hotelOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.hotels_block .row').html(result.html);
                $('#count_hotel').text("всего " + result.count_hotel + " отелей");
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
                if (!result.more) {
                    $('#more_hotel').hide();
                }
            }
        });
    });

    $('#findsight.form-control').keyup(function(e) {
        e.preventDefault();
        sightsOptions.query = $(this).val();
        $.ajax({
            type: "POST",
            url: "/sight/ajax",
            data: sightsOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
                $('.sights_block .row').html(result.html);
                $('#count_sight').text("всего " + result.count_sight + " мест");
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
                if (!result.more) {
                    $('#more_sight').hide();
                }
            }
        });
    });

    $('#find_btn.hotel').on('click', function(e) {
        e.preventDefault();
        excursionsOptions.query = $(this).parent().find('input').val();
        $.ajax({
            type: "POST",
            url: "/excursion/ajax",
            data: excursionsOptions,
            dataType: 'json',
            success: function (result) {
                offset = 6;
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
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
                //$('.portfolio_buttons li button').removeClass('active');
                //$(this).addClass('active');
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
            url: "/excursion/more",
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

});
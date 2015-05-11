
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

    $('input[name="daterange"]').daterangepicker();

    $('#any_id').barousel({
        navType: 2,
        fadeIn: 1,
        manualCarousel: 1
    });

    if($('#any_id').length>0){
        var image_width = $("#any_id").width();
        $("#any_id>.barousel_image>img").width(image_width);
    }


});
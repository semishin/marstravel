
<!--<div class="form_wrap">-->
<!---->
<!--    <strong class="form_title">Если </strong>-->
<!--    <span class="form_desc">Наш менеджер свяжется с Вами в ближайшее время для подтверждения заказа.</span>-->
<!---->
<!--    <form id="brif" action="#">-->
<!--        <input name="name" type="text" placeholder="Ваше имя *" />-->
<!--        <input name="email" type="text" placeholder="E-mail *"/>-->
<!--        <input name="phone" type="text" placeholder="Телефон *"/>-->
<!--        <textarea name="text" placeholder="Комментарий"></textarea>-->
<!---->
<!--        <div class="submit_wrap">-->
<!--            <input class="slider_link" id="brief_but" type="submit" value="Сделать заказ"/>-->
<!--        </div>-->
<!---->
<!--    </form>-->
<!---->
<!--</div>-->

<!--<script>-->
<!--    $('#brief_but').click(function(e) {-->
<!---->
<!---->
<!--        e.preventDefault();-->
<!---->
<!--        var name = $('input[name="name"]').val();-->
<!--        var email = $('input[name="email"]').val();-->
<!--        var phone = $('input[name="phone"]').val();-->
<!--        var text = $('textarea[name="text"]').val();-->
<!--        var errors = 0;-->
<!--        if (!name) {-->
<!--            $('input[name=name]').addClass('error');-->
<!--            errors++;-->
<!--        } else {-->
<!--            $('input[name=name]').removeClass('error');-->
<!--        }-->
<!--        if (!email) {-->
<!--            $('input[name=email]').addClass('error');-->
<!--            errors++;-->
<!--        } else {-->
<!--            $('input[name=email]').removeClass('error');-->
<!--        }-->
<!--        if (!phone) {-->
<!--            $('input[name=phone]').addClass('error');-->
<!--            errors++;-->
<!--        } else {-->
<!--            $('input[name=phone]').removeClass('error');-->
<!--        }-->
<!--        if (!text) {-->
<!--            $('textarea[name=text]').addClass('error');-->
<!--            errors++;-->
<!--        } else {-->
<!--            $('textarea[name=text]').removeClass('error');-->
<!--        }-->
<!--        if (errors) {-->
<!--            $('.form_desc').removeClass('loading');-->
<!--            return false;-->
<!--        }-->
<!--        $.ajax({-->
<!--            url : "/brief/add",-->
<!--            dataType : "json",-->
<!--            type : "post",-->
<!--            data : $('#brif').serialize(),-->
<!--            success : function(jsondata) {-->
<!--                $('.form_desc').removeClass('loading');-->
<!--                $('.form_desc').html('<h3>Спасибо за заявку</h3>');-->
<!--                $('.form_wrap form').html('');-->
<!---->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->

<!--<script type="text/javascript">-->
<!---->
<!--    var _gaq = _gaq || [];-->
<!--    _gaq.push(['_setAccount', 'UA-50232567-1']);-->
<!--    _gaq.push(['_trackPageview']);-->
<!---->
<!--    (function() {-->
<!--        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;-->
<!--        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';-->
<!--        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);-->
<!--    })();-->
<!---->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!---->
<!--        $(".complete_brief").hide();-->
<!---->
<!--        $( "#slider1" ).slider({-->
<!--            value : 0,//Значение, которое будет выставлено слайдеру при загрузке-->
<!--            min : -100,//Минимально возможное значение на ползунке-->
<!--            max : 100,//Максимально возможное значение на ползунке-->
<!--            step : 10,//Шаг, с которым будет двигаться ползунок-->
<!--            create: function( event, ui ) {-->
<!--                val = $( "#slider1" ).slider("value");//При создании слайдера, получаем его значение в перемен. val-->
<!--                $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider-->
<!--            },-->
<!--            slide: function( event, ui ) {-->
<!--                $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider-->
<!--                $( "#exampleInputOption1" ).val(ui.value);-->
<!--            }-->
<!--        });-->
<!--        $( "#slider2" ).slider({-->
<!--            value : 0,//Значение, которое будет выставлено слайдеру при загрузке-->
<!--            min : -100,//Минимально возможное значение на ползунке-->
<!--            max : 100,//Максимально возможное значение на ползунке-->
<!--            step : 10,//Шаг, с которым будет двигаться ползунок-->
<!--            create: function( event, ui ) {-->
<!--                val = $( "#slide2r" ).slider("value");//При создании слайдера, получаем его значение в перемен. val-->
<!--                $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider-->
<!--            },-->
<!--            slide: function( event, ui ) {-->
<!--                $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider-->
<!--                $( "#exampleInputOption2" ).val(ui.value);-->
<!--            }-->
<!--        });-->
<!--        $( "#slider3" ).slider({-->
<!--            value : 0,//Значение, которое будет выставлено слайдеру при загрузке-->
<!--            min : -100,//Минимально возможное значение на ползунке-->
<!--            max : 100,//Максимально возможное значение на ползунке-->
<!--            step : 10,//Шаг, с которым будет двигаться ползунок-->
<!--            create: function( event, ui ) {-->
<!--                val = $( "#slider3" ).slider("value");//При создании слайдера, получаем его значение в перемен. val-->
<!--                $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider-->
<!--            },-->
<!--            slide: function( event, ui ) {-->
<!--                $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider-->
<!--                $( "#exampleInputOption3" ).val(ui.value);-->
<!--            }-->
<!--        });-->
<!--        $( "#slider4" ).slider({-->
<!--            value : 0,//Значение, которое будет выставлено слайдеру при загрузке-->
<!--            min : -100,//Минимально возможное значение на ползунке-->
<!--            max : 100,//Максимально возможное значение на ползунке-->
<!--            step : 10,//Шаг, с которым будет двигаться ползунок-->
<!--            create: function( event, ui ) {-->
<!--                val = $( "#slider4" ).slider("value");//При создании слайдера, получаем его значение в перемен. val-->
<!--                $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider-->
<!--            },-->
<!--            slide: function( event, ui ) {-->
<!--                $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider-->
<!--                $( "#exampleInputOption4" ).val(ui.value);-->
<!--            }-->
<!--        });-->
<!--        $( "#slider5" ).slider({-->
<!--            value : 0,//Значение, которое будет выставлено слайдеру при загрузке-->
<!--            min : -100,//Минимально возможное значение на ползунке-->
<!--            max : 100,//Максимально возможное значение на ползунке-->
<!--            step : 10,//Шаг, с которым будет двигаться ползунок-->
<!--            create: function( event, ui ) {-->
<!--                val = $( "#slider5" ).slider("value");//При создании слайдера, получаем его значение в перемен. val-->
<!--                $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider-->
<!--            },-->
<!--            slide: function( event, ui ) {-->
<!--                $( "#contentSlider" ).html( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider-->
<!--                $( "#exampleInputOption5" ).val(ui.value);-->
<!--            }-->
<!--        });-->
<!---->
<!---->
<!--        /*$(function(){-->
<!--         $('#test_form').submit(function(e){-->
<!--         //отменяем стандартное действие при отправке формы-->
<!--         e.preventDefault();-->
<!--         //берем из формы метод передачи данных-->
<!--         var m_method=$(this).attr('method');-->
<!--         //получаем адрес скрипта на сервере, куда нужно отправить форму-->
<!--         var m_action=$(this).attr('action');-->
<!--         //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,-->
<!--         //то есть в стандартном формате передачи данных формы-->
<!--         var m_data=$(this).serialize();-->
<!--         $.ajax({-->
<!--         type: m_method,-->
<!--         url: m_action,-->
<!--         data: m_data,-->
<!--         success: function(result){-->
<!--         $('.complete').html(result);-->
<!--         $(".proceed_brief").hide();-->
<!--         $(".complete_brief").show();-->
<!--         }-->
<!--         });-->
<!--         });-->
<!--         });*/-->
<!---->
<!--        var qfiles = 0;-->
<!--        var nfiles = [];-->
<!--        var upload = $("#UploadButton").ajaxUpload({-->
<!--            url : "upload2.php",-->
<!--            name: "file",-->
<!--            onSubmit : function(){-->
<!--                $("#loading").show();-->
<!--            },-->
<!--            onComplete : function(result){-->
<!--                $("#loading").hide();-->
<!--                $("#complete").show();-->
<!---->
<!--                if (qfiles == 0) $('#complete_all').html('<div id="complete">1 - ' + result + '</div>');-->
<!--                else $('#complete_all').append('<div id="complete">'+ (qfiles+1) +' - ' + result + '</div>');-->
<!--                nfiles[qfiles] = result;-->
<!--                qfiles++;-->
<!--                /*$('#qfiles').html('Загружено файлов - ' + qfiles);-->
<!--                 $('.file_names').append('<input type="text" class="form-control" id="exampleInputFile" name = "file1">');*/-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!--<link href="/ariolby/css/bootstrap.min.css" rel="stylesheet">-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ariolby/js/bootstrap.min.js"></script>
</head>
<body>
<script>
                 $(document).ready(function(){
                     $('#submit_brif').click(function(e){
                         //отменяем стандартное действие при отправке формы
                         e.preventDefault();
                         var m_method=$('#test_form').attr('method');
                         var m_action=$('#test_form').attr('action');
                         var m_data=$('#test_form').serialize();
                         $.ajax({
                             type: m_method,
                             url: m_action,
                             data: m_data,
                             dataType: 'json',
                             success: function(result){

                                 }
                         });
                     });
                 });
</script>


<div class="content">
<form  method="POST" action="/brief/add" id="test_form">
<!--    -->
<!--    <div class="content_brief">-->
<!--    -->
<!--    <div class="row">-->
<!--        <div class="col-sm-12">-->
<!--            <a class="brief_logo" href="../index.php">webformat.by</a>-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!--    <div class="row">-->
<!--        <div class="col-sm-10">-->
<!--            <img class="img-responsive brief_text" src="../image/brief/text2.png">-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!---->
    <div class="proceed_brief">


        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h1>бриф на разработку сайта</h1>
                <hr class="def_hr4" />
                <p>Разработка эксклюзивного сайта всегда начинается с заполнения предварительной анкеты(брифа).</p><br /><p>Отвечайте пожалуйста на все вопросы максимально подробно, это
                    позволит нам лучше понять те задачи, которые должен решать Ваш будущий сайт.</p><br />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>1. Cуть проекта</h2>
                <hr class="def_hr4" />
                <p>Опишите ключевые моменты и мотивы создания сайта.</p><br />
                    <div class="form-group">
                        <textarea class="form-control" name= "core" rows="3"></textarea>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>2. Тип сайта</h2>
                <hr class="def_hr4" />
                <p>К какому из перечисленных типов сайта Вы можете отнести свой? Можно выбирать сразу несколько пунктов.</p><br />
                <div class="checkbox">
                    <input value="Информационный сайт" name="type[]" id="demo_box_1" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_1" class="css-label">Информационный сайт</label>
                    <br />
                    <input value="Интернет-магазин" name="type[]" id="demo_box_2" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_2" class="css-label">Интернет-магазин</label>
                    <br />
                    <input value="Online сервис" name="type[]" id="demo_box_3" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_3" class="css-label">Online сервис</label>
                    <br />
                    <input value="Промо сайт" name="type[]" id="demo_box_4" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_4" class="css-label">Промо сайт</label>
                    <br />
                    <input value="Корпоративный сайт" name="type[]" id="demo_box_5" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_5" class="css-label">Корпоративный сайт</label>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>3. Цели создания сайта</h2>
                <hr class="def_hr4" />
                <p>Для чего Вы хотите создать сайт? Отмечайте все важные для Вас пункты.</p><br />
                <div class="checkbox">
                    <input value="Повышение имиджа" name="purpose[]" id="demo_box_6" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_6" class="css-label">Повышение имиджа</label>
                    <br />
                    <input value="Сервисы для сотрудников или клиентов" name="purpose[]" id="demo_box_7" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_7" class="css-label">Сервисы для сотрудников или клиентов</label>
                    <br />
                    <input value="Инструмент привлечения новых клиентов" name="purpose[]" id="demo_box_8" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_8" class="css-label">Инструмент привлечения новых клиентов</label>
                    <br />
                    <input value="Продвижение нового товара/услуги" name="purpose[]" id="demo_box_9" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_9" class="css-label">Продвижение нового товара/услуги</label>
                    <br />
                    <input value="Организацияonline продаж(прием платежей)" name="purpose[]" id="demo_box_10" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_10" class="css-label">Организацияonline продаж(прием платежей)</label>
                    <br />
                    <input value="Развитие проекта(редизайн, улучшение)" name="purpose[]" id="demo_box_11" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_11" class="css-label">Развитие проекта(редизайн, улучшение)</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>4. Для какого бренда Вы создаете сайт?</h2>
                <hr class="def_hr4" />
                <p>Как называется Ваша компания? Сайт создается для неё или для определенного представительства или торговой марки? Сформирован ли слоган или миссия? Какие у Вас преимущества перед конкурентами? Как правильно пишется Ваш бренд на русском и на английском языке?</p><br />
                <div class="form-group">
                    <textarea class="form-control" name= "brand" rows="5"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>5. Какие сайты Вам нравятся?</h2>
                <hr class="def_hr4" />
                <p>Приведите примеры сайтов, которые Вам нравятся и расскажите почему. Приведите примеры сайтов Ваших конкурентов, которые на Ваш взгляд успешно решают необходимые Вам задачи и расскажите об этих задачах. Есть ли сайты не из Вашей отрасли, которые Вам нравятся по внешнему виду или по функциональной части? Если да, то укажите их адреса и расскажите что Вам в них нравится.</p><br />
                <div class="form-group">
                    <textarea class="form-control" name= "example" rows="5"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>6. Какие разделы должны быть на сайте?</h2>
                <hr class="def_hr4" />
                <p>Отметьте разделы, которые должны быть на Вашем новом сайте.</p><br />
                <div class="checkbox">
                    <input value="каталог продукции" name="section[]" id="demo_box_12" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_12" class="css-label">каталог продукции</label>
                    <br />
                    <input value="корзина(возможность приемаonline платежей)" name="section[]" id="demo_box_13" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_13" class="css-label">корзина(возможность приемаonline платежей)</label>
                    <br />
                    <input value="текстовые разделы(новости, о компании, статьи и др. )" name="section[]" id="demo_box_14" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_14" class="css-label">текстовые разделы(новости, о компании, статьи и др. )</label>
                    <br />
                    <input value="интерактивные разделы(форма обратной связи, Яндекс-карта, калькулятор, загрузка документов и др.)" name="section[]" id="demo_box_15" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_15" class="css-label">интерактивные разделы(форма обратной связи, Яндекс-карта, калькулятор, загрузка документов и др.)</label>
                    <br />
                    <input value="регистрация пользователей(личные кабинеты для клиентов, партнеров, сотрудников)" name="section[]" id="demo_box_16" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_16" class="css-label">регистрация пользователей(личные кабинеты для клиентов, партнеров, сотрудников)</label>
                    <br />
                    <input value="форум" name="section[]" id="demo_box_17" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_17" class="css-label">форум</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>7. Языковые версии</h2>
                <hr class="def_hr4" />
                <p>Какие языковые версии будут у Вашего нового сайта?</p><br />
                <div class="checkbox">
                    <input value="Русский" name="language[]" id="demo_box_18" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_18" class="css-label">Русский</label>
                    <br />
                    <input value="Английский" name="language[]" id="demo_box_19" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_19" class="css-label">Английский</label>
                    <br />
                    <input value="Немецкий" name="language[]" id="demo_box_20" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_20" class="css-label">Немецкий</label>
                    <br />
                    <input value="Другие" name="language[]" id="demo_box_21" class="css-checkbox" type="checkbox" />
                    <label for="demo_box_21" class="css-label">Другие</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>8. Каким Вы видите стиль Вашего нового сайта?</h2>
                <hr class="def_hr4" />
                <p>Выберите из списка эмоции и качества, которые наши дизайнеры выразят в красках. Чем сильнее эмоция, тем ближе должен быть ползунок.</p>
                <br />
<!--                <div class="form-group">-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>легкость</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
                            <!--<span id="contentSlider"></span>-->
<!--                            <div id="slider1"></div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>серьезность</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="hidden" class="form-control" id="exampleInputOption1" name = "o1" value= "0">-->
<!--                    <br />-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>классика</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
                            <!--<span id="contentSlider"></span>-->
<!--                            <div id="slider2"></div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>современность</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="hidden" class="form-control" id="exampleInputOption2" name = "o2" value= "0">-->
<!--                    <br />-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>сдержанность</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
                            <!--<span id="contentSlider"></span>-->
<!--                            <div id="slider3"></div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>яркость</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="hidden" class="form-control" id="exampleInputOption3" name = "o3" value= "0">-->
<!--                    <br />-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>экономичность</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
                            <!--<span id="contentSlider"></span>-->
<!--                            <div id="slider4"></div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>роскошь</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="hidden" class="form-control" id="exampleInputOption4" name = "o4" value= "0">-->
<!--                    <br />-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>простота</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
                            <!--<span id="contentSlider"></span>-->
<!--                            <div id="slider5"></div>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>сложность</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <input type="hidden" class="form-control" id="exampleInputOption5" name = "o5" value= "0">-->
<!--                </div>-->
                <div class="form-group">
                    <div class="row">
                        <label for=polz_1>легкость/серьезность</label>
                        <input name="style[]" type=range min=0 max=10 value=5 id=polz_1>
                    </div>
                    <div class="row">
                        <label for=polz_2>классика/современность</label>
                        <input name="style[]" type=range min=0 max=10 value=5 id=polz_2>
                    </div>
                    <div class="row">
                        <label for=polz_3>сдержанность/яркость</label>
                        <input name="style[]" type=range min=0 max=10 value=5 id=polz_3>
                    </div>
                    <div class="row">
                        <label for=polz_4>экономичность/роскошь</label>
                        <input name="style[]" type=range min=0 max=10 value=5 id=polz_4>
                    </div>
                    <div class="row">
                        <label for=polz_5>простота/сложность</label>
                        <input name="style[]" type=range min=0 max=10 value=5 id=polz_5>
                    </div>
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>легкость</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <input name="style[]" type=range min=0 max=10 value=5 id=polz_1>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>серьезность</p>-->
<!--                        </div>-->
<!--                        <label for=fader>Первый</label>                        -->
<!--                    </div>-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>классика</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <input name="style[]" type=range min=0 max=10 value=5 id=polz_2>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>современность</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>сдержанность</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <input name="style[]" type=range min=0 max=10 value=5 id=polz_3>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>яркость</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>экономичность</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <input name="style[]" type=range min=0 max=10 value=5 id=polz_4>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>роскошь</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>простота</p>-->
<!--                        </div>-->
<!--                        <div class="col-sm-8">-->
<!--                            <input name="style[]" type=range min=0 max=10 value=5 id=polz_5>-->
<!--                        </div>-->
<!--                        <div class="col-sm-2">-->
<!--                            <p>сложность</p>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>9. Бюджет и сроки</h2>
                <hr class="def_hr4" />
                <p>Если реализация проекта требует сжатых сроков, расскажите нам об этом. Так же, если это возможно, укажите приемлимый для Вас бюджет на разработку Вашего нового сайта. Минимальный бюджет на разработку эксклюзивного сайта в нашей веб-студии- 2500 у.е.</p><br />
                <div class="form-group">
                    <textarea class="form-control" name= "budget" rows="5"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>10. Ваши контактные данные</h2>
                <hr class="def_hr4" />
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputURL"><p>Ваше имя</p></label>
                            <input type="text" class="form-control" id="exampleInputURL" name = "name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLogin"><p>Номер телефона</p></label>
                            <input type="text" class="form-control" id="exampleInputLogin" name = "phone" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPass"><p>Электронная почта</p></label>
                            <input type="text" class="form-control" id="exampleInputPass" name = "email" required="required">
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>






        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h2>11. дополнительные материалы</h2>
                <hr class="def_hr4" />
                <p>если у вас есть дополнительные материалы, которые могут быть нам полезны для доработки вашего сайта (логотип, брендбук и т.д.) - прикрепите их ниже</p>
                <br />
                <div class="form-group def_attach">
                    <label for="exampleInputFile"><p>дополнительные материалы</p></label>
                    <!--<input type="file" id="exampleInputFile">-->
                    <!--<a class="UploadButton" id="UploadButton">UpladFile</a>-->
                    <a class="UploadButton" id="UploadButton">Прикрепить файлы</a>
                    <div id="loading">Загрузка файла...</div>
                    <div id="complete_all">
                        <div id="complete"></div>
                    </div>
                    <div id="qfiles"></div>
                </div>
                <div class="form-group file_names"></div>
                <br />
                <button type="submit" id="submit_brif" class="btn btn-default">Отправить данные</button>
                <div class="complete"></div>
                <br />
                <br />
                <hr class="def_hr4" />
                <p>ооо «Веб фотмат»</p>
                <p>г. минск, ул. платонова 43, офис 106</p>
                <p>тел. +375 17 294 22 99 // +375 44 732 05 09</p>
                <br />
            </div>
        </div>

    </div>


    <div class="complete_brief">
        <div class="row">
            <div class="col-sm-12">
<!--                <img class="img-responsive brief_text" src="../image/brief/hr.png">-->
                <h1>бриф на разработку сайта</h1>
                <hr class="def_hr4" />
                <p>Спасибо. Мы свяжемся с вами в ближайшее время</p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <br />
                <br />
                <hr class="def_hr4" />
                <p>ооо «Веб фотмат»</p>
                <p>г. минск, ул. платонова 43, офис 106</p>
                <p>тел. +375 17 294 22 99  +375 44 732 05 09</p>
                <br />
            </div>
        </div>
    </div>
    </form>

</div>
</body>
</html>

<!-- Yandex.Metrika counter -->
<!--<script type="text/javascript">-->
<!--    (function (d, w, c) {-->
<!--        (w[c] = w[c] || []).push(function() {-->
<!--            try {-->
<!--                w.yaCounter22164151 = new Ya.Metrika({id:22164151,-->
<!--                    webvisor:true,-->
<!--                    clickmap:true,-->
<!--                    trackLinks:true,-->
<!--                    accurateTrackBounce:true});-->
<!--            } catch(e) { }-->
<!--        });-->
<!---->
<!--        var n = d.getElementsByTagName("script")[0],-->
<!--            s = d.createElement("script"),-->
<!--            f = function () { n.parentNode.insertBefore(s, n); };-->
<!--        s.type = "text/javascript";-->
<!--        s.async = true;-->
<!--        s.src = (d.location.protocol == "https:" ? "https:" : "https:") + "//mc.yandex.ru/metrika/watch.js";-->
<!---->
<!--        if (w.opera == "[object Opera]") {-->
<!--            d.addEventListener("DOMContentLoaded", f, false);-->
<!--        } else { f(); }-->
<!--    })(document, window, "yandex_metrika_callbacks");-->
<!--</script>-->
<!--<noscript><div><img src="//mc.yandex.ru/watch/22164151" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->
<!--<script>-->
<!--    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!---->
<!--    ga('create', 'UA-50232567-1', 'webformat.by');-->
<!--    ga('send', 'pageview');-->
<!---->
<!--</script>-->
<!--<script type="text/javascript" src="../js/jVForms.js"></script>-->
<!--<script>-->
<!--    jVForms.initialize({-->
<!--        notice: 'Error'-->
<!--    });-->
<!--</script>-->
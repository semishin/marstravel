<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $s_title;?></title>
    <meta name="description" content="<?php echo $s_description;?>">
    <meta name="keywords" content="<?php echo $s_keywords;?>">
    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <link href="/marstravel-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/marstravel-bootstrap/fancybox/jquery.fancybox.css?v1">
    <link href="/marstravel-bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/barousel.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/dropzone.min.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/minimal/minimal.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/style.css?v1" rel="stylesheet">
    <link rel="shortcut icon" href="/marstravel-bootstrap/img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="/marstravel-bootstrap/fancybox/jquery.fancybox.pack.js"></script>
    <script src="/marstravel-bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/datepicker/moment.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/js/bootstrap-datetimepicker.js"></script>
    <script src="/marstravel-bootstrap/js/barousel.js"></script>
    <script src="/marstravel-bootstrap/js/jquery.maskedinput.js"></script>
    <script src="/marstravel-bootstrap/js/bootstrap-select.min.js"></script>
    <script src="/marstravel-bootstrap/js/ru.js"></script>
    <script src="/marstravel-bootstrap/js/icheck.js"></script>
    <script src="/marstravel-bootstrap/js/dropzone.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/js/jquery.localScroll.min.js"></script>
    <script src="/marstravel-bootstrap/js/script.js?v1"></script>
    <script src="/marstravel-bootstrap/js/holder.js"></script>
    <script src="/marstravel-bootstrap/js/stickyKit.js"></script>
    <!--[if IE 9]> <script src="/marstravel-bootstrap/js/placeholderIE9.js"></script><![endif]-->
    <script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33133378 = new Ya.Metrika({ id:33133378, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33133378" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="container-fluid">
    <div class="page_block">
        <div class="header">
            <div class="row">
                <div class="col-xs-12">
                    <div class="advertising">
                        <?php foreach ($top_banner as $item) { ?>
                            <a href="<?php echo $item->link ?>"><img src="<?php echo Lib_Image::crop($item->image, 'banner', $item->id, 1234, 90); ?>" class="img-responsive"></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="navigation">
                        <div class="row">
                            <div class="col-xs-7">
                                <ul class="list-inline pull-left">
									<li><a href="/">Туры</a></li>
                                    <li class="dropdown_hover"><span class="a <?php if( $_SERVER['REQUEST_URI'] == '/about-us' ||  $_SERVER['REQUEST_URI'] == '/touroperator') { ?> active <?php } ?>">О компании <span class="glyphicon glyphicon-chevron-down"></span></span>
                                        <ul class="dropdown_menu list-unstyled">
                                            <li><a href="/about-us" <?php if( $_SERVER['REQUEST_URI'] == '/about-us') { ?> class="active" <?php } ?>>О нас</a></li>
                                            <li><a href="/touroperator" <?php if( $_SERVER['REQUEST_URI'] == '/touroperator') { ?> class="active" <?php } ?>>Туроператорская деятельность</a></li>
                                            <li><a href="/awards" <?php if( $_SERVER['REQUEST_URI'] == '/awards') { ?> class="active" <?php } ?>>Наши награды</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/our-partners" <?php if( $_SERVER['REQUEST_URI'] == '/our-partners') { ?> class="active" <?php } ?> >Наши партнёры</a></li>
                                    <li><a href="/review"  <?php if( $_SERVER['REQUEST_URI'] == '/review') { ?> class="active" <?php } ?>>Отзывы</a></li>
									<li><a href="http://forum.turskazka.ru/" target="_blank">Поиск попутчика</a></li>
                                    <li><a href="/contacts"  <?php if( $_SERVER['REQUEST_URI'] == '/contacts') { ?> class="active" <?php } ?>>Контакты</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-5">
                                <ul class="list-inline pull-right">
                                    <li class="email"><a href="#ask_consultant" class="fancy"><?php echo Kohana::$config->load('properties.email'); ?></a></li>
                                    <li class="phone"><a href="tel:<?php echo Kohana::$config->load('properties.phone'); ?>"><b><?php echo Kohana::$config->load('properties.phone'); ?></b></a></li>
                                </ul>
                                <div style="display: none">
                                    <div id="ask_consultant">
                                        <p class="lightbox_header">Задать вопрос консультанту</p>
                                        <form role="form" class="lightbox_form">
                                            <?php  $tour = ORM::factory('Tour')->where('active','=',1)->order_by('position','asc')->find_all()->as_array();?>
                                            <div class="form-group">
                                                <select class="selectpicker form-control" id="theme_quastion">
                                                    <option value="null">Выберите тему вопроса</option>
                                                    <?php foreach ($tour as $index => $item) { ?>
                                                        <option value="<?php echo $item->id;?>"><?php echo $item->name?></option>
                                                    <?php } ?>
                                                    <option value="0">Общие вопросы</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Name_0" placeholder="Имя" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="Email_0" placeholder="E-mail" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Phone_0" placeholder="Телефон" name="phone">
                                            </div>
                                            <div class="form-group">
                                                <textarea placeholder="Вопрос" rows="3" class="form-control" id="Question_0" name="question"></textarea>
                                            </div>
                                            <a href="#" class="red_btn" id="ask_consultant_btn">Отправить</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="flag flag_left"></div>
            <div class="flag flag_right"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="search_line">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="logo">
                                    <a href="/"><img src="/marstravel-bootstrap/img/logo-red.png" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-5">
                                <div class="search">
                                    <form action="/search">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control" placeholder="Поиск по сайту">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="search_icon"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-4">
                                <div class="pull-right">
                                    <a href="#ask_consultant" class="black_btn fancy">Задать вопрос консультанту</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo $content ?>

            </div>
        </div>
        <div class="our_partners">
            <div class="flag flag_left"></div>
            <div class="flag flag_right"></div>
            <div class="text">
                <p class="text-center"><b>Наши партнёры</b></p>
                <p class="text-center">Мы работаем только с лучшими</p>
            </div>
            <div class="partners_icons">
                <?php foreach ((array_chunk($partner,4)) as $row) { ?>
                    <div class="row">
                        <?php foreach($row as $item) { ?>
                            <div class="col-xs-3">
                                <a href="<?php if (!preg_match('%http%', $item->link)) { ?>http://<?php } ?><?php echo $item->link; ?>" target="_blank">
                                    <img src="<?php echo $item->image; ?>" class="img-responsive">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer_menu">
                        <ul class="list-unstyled">
                            <li><a href="/about-us">О нас</a></li>
                            <li><a href="/advertising">Для корпоративных клиентов</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li>
                                <?php
                                if (Auth::instance()->logged_in()) { ?>
                                    <a href="/auth">Вход для партнёров</a>
                                <?php } else {?>
                                    <a href="/auth/logout">Вход для партнёров</a>
                                <?php } ?>
                            </li>
                            <li><a href="/our-partners">Наши партнёры</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li><a href="/hotels">Отели Турции</a></li>
                            <li><a href="/sights">Достопримечательности</a></li>
                            <li><a href="/excursions">Экскурсии</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li><a href="/about-turkey">О Турции</a></li>
                            <li><a href="/weather">Погода в Турции</a></li>
                        </ul>

                        <ul class="list-unstyled gold">
                            <li><b><a href="tel:<?php echo Kohana::$config->load('properties.phone'); ?>"><span class="phone_black"><?php echo Kohana::$config->load('properties.phone'); ?></span></a></b></li>
                            <li><a href="#ask_consultant" class="fancy"><?php echo Kohana::$config->load('properties.email'); ?></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="text">
                        <p class="text-center">Использование текстов и фотографий с сайта допускается только с разрешения компании MarsTravel</p>
                        <p class="text-center">© 2015 turskazka.ru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
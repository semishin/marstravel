<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title><?php echo $s_title;?></title>
    <meta name="description" content="<?php echo $s_description;?>">
    <meta name="keywords" content="<?php echo $s_keywords;?>">

    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
    <!--font-family: 'PT Sans', sans-serif;-->

    <!-- Bootstrap -->
    <link href="/marstravel-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/marstravel-bootstrap/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/marstravel-bootstrap/datepicker/daterangepicker-bs3.css" />
    <link href="/marstravel-bootstrap/css/barousel.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/minimal/minimal.css" rel="stylesheet">
    <link href="/marstravel-bootstrap/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/marstravel-bootstrap/img/favicon.ico" type="image/x-icon">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.full&lang=ru-RU"></script>

    <script src="/marstravel-bootstrap/fancybox/jquery.fancybox.pack.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/marstravel-bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/datepicker/moment.min.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/datepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="/marstravel-bootstrap/datepicker/ru.js"></script>
    <script src="/marstravel-bootstrap/js/barousel.js"></script>
    <script src="/marstravel-bootstrap/js/bootstrap-select.min.js"></script>
    <script src="/marstravel-bootstrap/js/icheck.js"></script>
    <!-- Include  user-js -->
    <script src="/marstravel-bootstrap/js/script.js"></script>


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
                                    <li class="dropdown_hover"><span class="a">О компании</span>
                                        <ul class="dropdown_menu list-unstyled">
                                            <li><a href="/about-us">О нас</a></li>
                                            <li><a href="/touroperator">Туроператорская деятельность</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/our-partners">Наши партнёры</a></li>
                                    <li><a href="/advertising">Для корпоративных клиентов</a></li>
                                    <li><a href="/contacts">Контакты</a></li>
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
                                    <p style="text-align: right">
                                        <?php
                                            if (!Auth::instance()->logged_in()) { ?>
                                                <span class="label label-info"><a href="/auth">Вход для партнёров</a></span>
                                            <?php } else {?>
                                                <span class="label label-info"><a href="/auth/logout">Выйти</a></span>
                                            <?php } ?>
                                    </p>
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
                                <a href="http://<?php echo $item->link; ?>">
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
                        </ul>

                        <ul class="list-unstyled">
                            <li><a href="/our-partners">Наши партнёры</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li><a href="/hotels">Отели Турции</a></li>
                            <li><a href="/weather">Погода в Турции</a></li>
                        </ul>

                        <ul class="list-unstyled">
                            <li><a href="/about-turkey">О Турции</a></li>
                            <li><a href="/sights">Достопримечательности</a></li>
                        </ul>

                        <ul class="list-unstyled gold">
                            <li><b><?php echo Kohana::$config->load('properties.phone'); ?></b></li>
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
                        <p class="text-center">© 2003–2015 turistic.ru</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
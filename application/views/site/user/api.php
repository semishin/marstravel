<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/user"><i class="icon icon_turkey"></i><span>Сертификаты</span></a></li>
                            <li><a href="/user/profile"><i class="icon icon_attractions"></i><span>Профиль</span></a></li>
                            <?php if ($firm->api == 1) { ?> <li><a href="/user/api" class="active"><i class="icon icon_attractions"></i><span>API</span></a></li> <?php } ?>
                        </ul>
                        <p>
                            <a href="/auth/logout" class="black_btn logout_btn">Выйти</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <?php if ($firm->api == 1) { ?>
            <h2>API</h2>
            <h3>Код для доступа к API: <?php echo $firm->code; ?> </h3>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Наименование тура</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($tour as $key => $item) { ?>
                    <tr>
                        <td><?php echo $item['id'];?></td>
                        <td><?php echo $item['name']?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <span role="button"  data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Генерация сертификата
                                </span>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']?>/api/certificate" style="color: red;">http://<?php echo $_SERVER['SERVER_NAME']?>/api/certificate</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <h3>Принимает POST:</h3>
                                <blockquote>
                                    code - код, который мы им дадим, добавить поле у партнера (coupon firms) и генерировать при создании профиля,
                                    по нему идентифицировать пользователя при запросе, если не найден - return ['error' => 'bad user']<br>
                                    name - фио того, кому выдают сертификат (required)<br>
                                    email - email того, кому выдают сертификат (required)<br>
                                    date_birth - день рождения того, кому выдают сертификат (required)<br>
                                    phone - телефон того, кому выдают сертификат (required)<br>
                                    tour_id - ID тура из нашей базы (required)<br>
                                    name_manager - ФИО менеджера выдавшего сертификат (required)
                                </blockquote>
                                <h3>Возвращает JSON:</h3>
                                <blockquote>
                                    id - идентификатор сертификата<br>
                                    code - код сертификата<br>
                                    name - ФИО владельца сертификата<br>
                                    email - E-mail владельца сертификата<br>
                                    date_birth - Дата рождения владельца сертификата<br>
                                    phone - Телефон владельца сертификата<br>
                                    name_manager - ФИО менеджера выдавшего сертификат<br>
                                    file - Полная ссылка на файл сертификата<br>
                                    created_at - Дата выдачи сертификата<br>
                                </blockquote>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                 <span role="button" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Список сертификатов
                                </span>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']?>/api/list" style="color: red;">http://<?php echo $_SERVER['SERVER_NAME']?>/api/list</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <h3>Принимает POST:</h3>
                                <blockquote>
                                    code - код, который мы им дадим, добавить поле у партнера (coupon firms) и генерировать при создании профиля, по нему идентифицировать пользователя при запросе, если не найден - return ['error' => 'bad user']
                                </blockquote>
                                    <h3>Возвращает массив всех сертификатов пользователя в JSON:</h3>
                                <blockquote>
                                    id - идентификатор сертификата<br>
                                    code - код сертификата<br>
                                    name - ФИО владельца сертификата<br>
                                    email - E-mail владельца сертификата<br>
                                    date_birth - Дата рождения владельца сертификата<br>
                                    phone - Телефон владельца сертификата<br>
                                    name_manager - ФИО менеджера выдавшего сертификат<br>
                                    file - Полная ссылка на файл сертификата<br>
                                    created_at - Дата выдачи сертификата<br>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Сертификат
                                </a>
                                <a href="http://<?php echo $_SERVER['SERVER_NAME']?>/api/item" style="color: red;">http://<?php echo $_SERVER['SERVER_NAME']?>/api/item</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <h3>Принимает POST:</h3>
                                    <blockquote>
                                        code - код, который мы им дадим, добавить поле у партнера (coupon firms)
                                                и генерировать при создании профиля, по нему идентифицировать
                                                пользователя при запросе, если не найден - return ['error' => 'bad user']<br>
                                        id - идентификатор сертификата
                                    </blockquote>

                                <h3>Возвращает сертификат в JSON:</h3>
                                <blockquote>
                                    id - идентификатор сертификата<br>
                                    code - код сертификата<br>
                                    name - ФИО владельца сертификата<br>
                                    email - E-mail владельца сертификата<br>
                                    date_birth - Дата рождения владельца сертификата<br>
                                    phone - Телефон владельца сертификата<br>
                                    name_manager - ФИО менеджера выдавшего сертификат<br>
                                    file - Полная ссылка на файл сертификата<br>
                                    created_at - Дата выдачи сертификата<br>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <h2>У вас нет прав для прасмотра страницы</h2>
            <?php } ?>
        </div>
    </div>
</div>
<input type="hidden" name="server_name" value="<?php echo $_SERVER['SERVER_NAME']?>">

<div style="display: none">
    <div id="generate_code">
        <p class="lightbox_header name_tour_header"></p>
        <p class="lightbox_header">Заполните данные</p>
        <form id="create_coupon_form" ACTION="" METHOD="POST" role="form" class="lightbox_form" data-id="1">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="ФИО" name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Введите email" name="email">
            </div>
            <div class="form-group" style="position: relative;">
                <input id='datetimepicker' type="text" class="form-control" placeholder="Дата рождения" name="date_birth">
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker').datetimepicker({
                        viewMode: 'years',
                        locale: 'ru',
                        format: 'YYYY-MM-DD'
                    });
                });
            </script>
            <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Номер телефона" name="phone">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="name_manager" placeholder="ФИО менеджера выдавшего сертификат" name="name_manager">
            </div>
            <a href="/user/create_coupon/" class="red_btn created_new_certificate" id="certificate_data_user" data-id="">Сохранить</a>
        </form>
    </div>
</div>

<div style="display: none">
    <div id="generate_code_succes">
        <p class="lightbox_header name_tour_header"></p>
        <p class="lightbox_header">Спасибо! Сертификат сгенерирован.</p>
    </div>
</div>
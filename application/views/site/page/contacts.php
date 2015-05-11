<div class="block_bg block_bg2 container-fluid">
    <div class="page_block">
        <div class="contacts_information">
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-center icon"><img src="/goodsign-bootstrap/img/tittle-icon.png"></p>
                    <p class="text-center">контактная информация</p>
                </div>
                <div class="feedback_form">
                    <p class="text-center">У вас возникли вопросы? Воспользуйтесь формой обратной связи</p>
                    <div class="col-xs-12">
                        <div class="two_lists">
                            <ul class="list-unstyled pull-left">
                                <li>Республика Беларусь,</li>
                                <li><?php echo Kohana::$config->load('properties.address'); ?></li>
                            </ul>
                            <ul class="list-unstyled pull-right">
                                <li><b><?php echo Kohana::$config->load('properties.phone'); ?></b></li>
                                <li><?php echo Kohana::$config->load('properties.email'); ?></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-xs-12" >

                            <form role="form" action="#" method="post" id="brief">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your_name" id="name_id" placeholder="Ваше имя*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="your_email" id="email_id" placeholder="Ваш e-mail*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="your_phone" id="phone_id" placeholder="Ваш номер телефона*">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" name="your_message" id="text_id" placeholder="Ваш вопрос*"></textarea>
                                </div>
                                <div class="form-group send">
                                    <p class="text-center" id="button_brief"><a href="#">отправить</a></p>
                                </div>
                            </form>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="map">
                        <p class="text-center">Адрес на карте</p>
                        <div id="gmap"><!--gmap--></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

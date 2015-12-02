<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <div class="col-md-12 col-xs-8">
                    <div class="left_menu">
                        <ul class="list-unstyled">
                            <li><a href="/user"><i class="icon icon_turkey"></i><span>Сертификаты</span></a></li>
                            <li><a href="/user/profile" class="active"><i class="icon icon_attractions"></i><span>Профиль</span></a></li>
                            <?php if ($firm->api == 1) { ?><li><a href="/user/api"><i class="icon icon_attractions"></i><span>API</span></a></li> <?php } ?>
                        </ul>
                        <p>
                            <a href="/auth/logout" class="black_btn logout_btn">Выйти</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h2>Профиль</h2>
            <h3><?php echo $profile->name?></h3>
            <div>
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" disabled class="form-control" name="email" id="exampleInputEmail1" placeholder="mail" value="<?php echo $email?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" name="name_profile" id="name" placeholder="имя" value="<?php echo $profile->name?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" class="form-control" id="phone" name="phone_profile" placeholder="телефон" value="<?php echo $profile->phone?>">
                    </div>
                    <div class="form-group">
                        <label for="contact">Контактное лицо</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="контактное лицо" value="<?php echo $profile->contact?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="адрес" value="<?php echo $profile->address?>">
                    </div>
                    <p>Реквизиты</p>
                    <div id="requisites"><?php echo $profile->requisites?></div>
                    <p>Описание</p>
                    <div id="description"><?php echo $profile->description?></div>
                    <button type="submit" name="save_data_profile" class="btn btn-default save_data_profile">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#description').summernote({
            height: 150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null            // set maximum height of editor
    });

        $('#requisites').summernote({
            height: 150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null            // set maximum height of editor
        });
    });
</script>
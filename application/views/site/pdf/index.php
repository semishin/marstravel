<div style="height: 1200px; background: url('/files/png_image.jpg') no-repeat top left; background-size: cover; ">
<div style="text-align: center;">
    <p>
    <b>Туроператор: ООО «МАРС-тревел»<br>
        Адрес: 101000, г. Москва, ул. Маросейка, дом 2/15</b>
    </p>
    <p><h2>СЕРТИФИКАТ<br>№ <?php echo $code;?></h2></p>
    <p style="font-size: 14px">
        <b>
            Дата выдачи:
            <br>
            <span  style="background-color: #ffff00">
                &laquo;<ins><?php echo date('d')?></ins>&raquo; <ins><?php echo Helpers_Date::get_month_name(date('m'))?></ins> <?php echo date('Y')?>г.
            </span>
        </b>
    </p>
    <p style="font-size: 14px">
        <b>
            Владелец сертификата:<br>
            <ins><span style="background-color: #ffff00"><?php echo $name?></span></ins>
        </b>
    </p>
    <?php if($plus == 1){?>
    <p><b>Категория  Сертификата:<br>СТАНДАРТ ПЛЮС</b></p>
    <?php } ?>
</div>
<div  <?php if($plus != 1){?>style="margin-top: 600px;"<?php } else { ?> style="margin-top: 570px;" <?php } ?>>
    <?php echo $certificate_content?>
</div>
<div class="logo" style="text-align: center">
    <div style="float: left; width: 50%;">
        <img class="img-responsive" src="<?php echo $partner_image?>">
    </div>
    <div style="float: left; width: 50%;">
        <img class="img-responsive" src="/marstravel-bootstrap/img/logo-red.png">
    </div>
</div>
</div>
 <div>
    <?php echo $certificate_rule?>
</div>

<style>
.content p{margin:0px;line-height:normal;font-size:8px;}
.content-short p{margin:0 20px 10px 20px;}
table{vertical-align:top;}
table td{vertical-align:top;}
</style>
<?php if(!$background) { ?>
<div style="height: 1200px; background: url('/files/png_image.jpg') no-repeat top left; background-size: cover; "><?php }
else { ?>
<div style="height: 1200px;background: url('<?php echo $background?>') no-repeat; background-size: 100% 100%; width:100%;">
<?php }?>
<div style="text-align: center;padding:20px;">
    <p>
    <b>Туроператор: ООО «МАРС-тревел»<br>
        Адрес: 101000, г. Москва, ул. Маросейка, дом 2/15</b>
    </p>
    <h1 style="font-size:28px;">СЕРТИФИКАТ</h1>
	<h2>№ <ins><?php echo $code;?></ins></h2>
    <p style="font-size: 16px;">
        <b>
            Владелец сертификата:<br>
            <ins><span><?php echo $name?></span></ins>
        </b>
    </p>
	<p style="font-size: 16px;">
        <b>
            Дата выдачи:
            <br>
            <span >
                &laquo;<ins><?php echo date('d')?></ins>&raquo; <ins><?php echo Helpers_Date::get_month_name(date('m'))?></ins> <?php echo date('Y')?>г.
            </span>
        </b>
    </p>

</div>

<div class="content-short" style="margin: 520px 0 0 0;">
    <p style="font-size: 16px;text-align:center;margin-top:20px;">
		<b>Тур <?=$tour->name;?></b>
	</p>
	<?php echo $certificate_content?>
</div>
<div class="logo">
    <div style="float: left; width: 45%;text-align:center;">
        <img class="img-responsive" style="margin-top:10px;" src="<?php echo $partner_image?>">
    </div>
    <div style="float: right; width: 45%;text-align:center;margin:10px 0 35px 0;">
        <img class="img-responsive" src="/marstravel-bootstrap/img/logo-red.png">
    </div>
</div>
</div>
<div class="content" style="margin:20px;padding-top:20px;">
    <?php echo $certificate_rule?>
</div>

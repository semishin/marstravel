<p>В  <a href="https://<?php echo $_SERVER['SERVER_NAME']?>"><?php echo $_SERVER['SERVER_NAME']?></a> <?php echo date("d F Y");?> в <?=date("H:i:s");?> был создана заявка.
<p><strong>Имя: </strong><?php echo $fio;?></p>
<p><strong>Email: </strong><?php echo $email;?></p>
<p><strong>Телефон: </strong><?php echo $phone;?></p>
<?php if($quantity_adults){?><p><strong>Количество взрослых: </strong><?php echo $quantity_adults;?></p><?php } ?>
<?php if($quantity_children){?><p><strong>Количество детей: </strong><?php echo $quantity_children;?></p><?php } ?>
<p><a target="_blank" href="http://<?=$_SERVER['SERVER_NAME']?>/tour/<?php echo $tour->url?>"><?php echo $tour->name;?></a></p>
<p>_________________________</p>
<?php if(!$code) { ?>
    <p>Цена - <?php echo number_format($total_price, 0, '', ' ')?> руб</p>
<?php } else { ?>
    <p>Был использован сертификат: <?php echo $code?></p>
    <p>Стоимость - <?php echo number_format($cost_flight * ($quantity_adults + $quantity_children), 0, '', ' ')?> руб</p>
<?php } ?>
<p>_________________________</p>

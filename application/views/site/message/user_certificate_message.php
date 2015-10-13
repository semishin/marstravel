<p>Был создан сертификат <a href="https://<?php echo $_SERVER['SERVER_NAME']?>"><?php echo $_SERVER['SERVER_NAME']?></a> <?php echo date("d F Y");?> в <?=date("H:i:s");?>
<p><strong>Email: </strong><?php echo $email;?></p>
<p><strong>Телефон: </strong><?php echo $phone;?></p>
<p><strong>Ссылка на сертификат:  </strong><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/coupons/<?php echo $name_certificate?>"> Скачать</a></p>
<p>В самое ближайшее время с вами свяжется наш консультант</p>

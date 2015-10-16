<?php if($payment == 1){?>
<p>
    Здравствуйте.  Ваша заявка принята.
    Спасибо за обращение в компанию «МАРС-тревел».
    Ждем Вас в течение двух рабочих дней  в офисах компании «МАРС-тревел»  для заключения договора и  совершения оплаты.
</p>
<?php } else { ?>
<p>
    Здравствуйте.  Ваша заявка принята.
    Спасибо за обращение в компанию «МАРС-тревел».
    В течение одного рабочего  дня на данный электронный адрес   мы  отправим   Вам  ДОГОВОР.
    Вам необходимо  его подписать, отсканировать и выслать нам на почту  excursion@turistic.ru  в течение одного  рабочего дня после его получения*
</p>
<p>
    *Если Вы не получили договор в течение одного  рабочего дня после оформления  заявки  сообщите, пожалуйста, об этом в  компанию «МАРС-тревел» по телефону:  +7 (495) 22 33 829
</p>
<?php } ?>
<?php if($quantity_adults){?><p><strong>Количество взрослых: </strong><?php echo $quantity_adults;?></p><?php } ?>
<?php if($quantity_children){?><p><strong>Количество детей: </strong><?php echo $quantity_children;?></p><?php } ?>
<p><strong>Тур: </strong><a target="_blank" href="http://<?=$_SERVER['SERVER_NAME']?>/tour/<?php echo $tour->url?>"><?php echo $tour->name;?></a></p>
<p>_________________________</p>
<?php if(!$code) { ?>
    <p>Стоимость - <?php echo number_format($total_price, 0, '', ' ')?> руб</p>
<?php } else { ?>
    <p>Был использован сертификат: <?php echo $code?></p>
    <p>Стоимость - <?php echo number_format($cost_flight * ($quantity_adults + $quantity_children), 0, '', ' ')?> руб</p>
<?php } ?>

<?php $data = json_decode($order->data_people, true)?>
<?php if($data['adults']) { ?>
    <h2>Информация о взрослых туристах:</h2>
    <table class="table table-bordered table-striped table-condensed" id="tabledata">
        <tbody>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Серия паспорта</th>
            <th>Номер паспорта</th>
            <th>Паспорт действителен до</th>
            <th>Пол</th>
        </tr>
        <?php foreach($data['adults'] as $item) { ?>
            <tr>
                <?php if($item['gender_adults'] == 1)
                    $gender = 'Мужской';
                else{
                    $gender = 'Женский';
                }?>
                <td><?php echo $item['surname_adults']?></td>
                <td><?php echo $item['pre_name_adults']?></td>
                <td><?php echo $item['birth_adults']?></td>
                <td><?php echo $item['passport_series_adults']?></td>
                <td><?php echo $item['passport_id_adults']?></td>
                <td><?php echo $item['passport_valid_adults']?></td>
                <td><?php echo $gender?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
<?php if($data['child']) { ?>
    <h2>Информация о детях туристах:</h2>
    <table class="table table-bordered table-striped table-condensed" id="tabledata">
        <tbody>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Серия паспорта</th>
            <th>Номер паспорта</th>
            <th>Паспорт действителен до</th>
            <th>Пол</th>
        </tr>
        <?php foreach($data['child'] as $item) { ?>
            <tr>
                <?php if($item['gender_child'] == 1)
                    $gender = 'Мужской';
                else{
                    $gender = 'Женский';
                }?>
                <td><?php echo $item['surname_child']?></td>
                <td><?php echo $item['pre_name_child']?></td>
                <td><?php echo $item['birth_child']?></td>
                <td><?php echo $item['passport_series_child']?></td>
                <td><?php echo $item['passport_id_child']?></td>
                <td><?php echo $item['passport_valid_child']?></td>
                <td><?php echo $gender;?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
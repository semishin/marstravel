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


<h3>Номер заказа: <?php echo $order->id; ?></h3>
<h3>Статус заказа: <?php echo $order->get_status_name(); ?> - <a href="/ariol-admin/order/edit/<?php echo $order->id; ?>">Изменить</a></h3>
<?php if($order) { ?>
    <?php $data = json_decode($order->data_people, true)?>
    <?php if($data['adults']) { ?>
    <h2>Информация о взрослых туристах:</h2>
    <table class="table table-bordered table-striped table-condensed" id="tabledata">
        <tbody>
        <tr>
            <th>Пол</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Серия паспорта</th>
            <th>Номер паспорта</th>
            <th>Паспорт действителен до</th>
        </tr>
        <?php foreach($data['adults'] as $item) { ?>
            <tr>
                <?php if($item['gender_adults'] == 1)
                    $gender = 'Мужской';
                else{
                    $gender = 'Женский';
                }?>
                <td><?php echo $gender?></td>
                <td><?php echo $item['surname_adults']?></td>
                <td><?php echo $item['pre_name_adults']?></td>
                <td><?php echo $item['birth_adults']?></td>
                <td><?php echo $item['passport_series_adults']?></td>
                <td><?php echo $item['passport_id_adults']?></td>
                <td><?php echo $item['passport_valid_adults']?></td>
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
            <th>Пол</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Серия паспорта</th>
            <th>Номер паспорта</th>
            <th>Паспорт действителен до</th>
        </tr>
        <?php foreach($data['child'] as $item) { ?>
            <tr>
                <?php if($item['gender_child'] == 1)
                    $gender = 'Мужской';
                else{
                    $gender = 'Женский';
                }?>
                <td><?php echo $gender;?></td>
                <td><?php echo $item['surname_child']?></td>
                <td><?php echo $item['pre_name_child']?></td>
                <td><?php echo $item['birth_child']?></td>
                <td><?php echo $item['passport_series_child']?></td>
                <td><?php echo $item['passport_id_child']?></td>
                <td><?php echo $item['passport_valid_child']?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>
<?php } ?>
<div class="row reload">
    <!-- Shipping & Shipment Block Starts -->
    <div class="col-sm-12">
        <!-- Shipment Information Block Starts -->
        <div class="panel panel-smart">
            <div class="panel-heading">
                <h2 class="panel-title">
                    Статистка
                </h2>
            </div>
            <div id="selection"></div>
            <form class="form-horizontal" role="form">
                <div class="panel-smart panel_hidden">
                    <div class="input_product"></div>
                    <div class="calculation_table">
                        <table class="table table-bordered table-striped table-condensed" id="tabledata">
                            <tbody class="main">
                            <tr>
                                <th>Имя</th>
                                <th>Общее количество сертификатов</th>
                                <th>Активированные</th>
                                <th>Использованные</th>
                            </tr>
                            <?php foreach($coupons as $item) { ?>
                                <tr>
                                    <td><?php echo $item['name']?></td>
                                    <td><?php echo $item['count_total']?></td>
                                    <td><?php echo $item['count_activated']?></td>
                                    <td><?php echo $item['count_used']?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </form>
<!--            <div class="row">-->
<!--                <div class="paginator">-->
<!--                    --><?php //echo $pagination; ?>
<!--                </div>-->
<!--            </div>-->
            <!-- Form Ends -->
        </div>
    </div>
</div>

<html>
    <head></head>
    <body>
        <div class="clearfix"></div>
            <div id="pre_pay">
                <p class="lightbox_header">Заполните ваши данные</p>
                <form role="form" class="lightbox_form" id="pre_order_form">
                    <?php for($i = 1; $i <= $quantity_adults; $i++) { ?>
                        <p <?php if($i > 1) { ?>class="next_turist"<?php } ?>><b>Турист <?php echo $i?> (взрослый)</b></p>
                        <div class="form-group text-left">
                            <p class=""><b>Пол</b></p>
                            <label><input class="pre_data_adults icheck_radio" checked type="radio" name="adults[<?php echo $i?>][gender_adults]"  value="1"/>Мужской</label>
                            <label style="margin-left: 20px;"><input  class="pre_data_adults icheck_radio" type="radio" name="adults[<?php echo $i?>][gender_adults]"  value="2"/>Женский</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pre_data_adults" placeholder="Фамилия" name="adults[<?php echo $i?>][surname_adults]">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pre_data_adults" placeholder="Имя" name="adults[<?php echo $i?>][pre_name_adults]">
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input id="adults_birth_adults_<?php echo $i;?>" type="text" class="form-control pre_data_adults" placeholder="Дата рождения" name="adults[<?php echo $i?>][birth_adults]">
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#adults_birth_adults_<?php echo $i;?>').datetimepicker({
                                    locale: 'ru',
                                    format: 'YYYY-MM-DD'
                                });
                            });
                        </script>
                        <div class="form-group">
                            <input type="text" class="form-control pre_data_adults" placeholder="Серия паспорта" name="adults[<?php echo $i?>][passport_series_adults]">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control pre_data_adults" placeholder="Номер паспорта" name="adults[<?php echo $i?>][passport_id_adults]">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control pre_data_adults" placeholder="Паспорт действителен до" name="adults[<?php echo $i?>][passport_valid_adults]">
                        </div>
                    <?php } ?>
                    <?php if($quantity_children) { ?>
                        <?php for($c = 1; $c <= $quantity_children; $c++) { ?>
                            <p <?php if($c > 1) { ?>class="next_turist"<?php } ?>><b>Турист <?php echo $c?> (ребенок)</b></p>
                            <p><b>Пол</b></p>
                            <label><input class="pre_data_child icheck_radio" checked type="radio" name="child[<?php echo $i?>][gender_child]"  value="1"/>Мужской</label>
                            <label><input  class="pre_data_child icheck_radio"  type="radio" name="child[<?php echo $i?>][gender_child]"  value="2"/>Женский</label>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Фамилия" name="child[<?php echo $i?>][surname_child]">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Имя" name="child[<?php echo $i?>][pre_name_child]">
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input id="adults_birth_child_<?php echo $c;?>" type="text" class="form-control pre_data_child" placeholder="Дата рождения" name="child[<?php echo $i?>][birth_child]">
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#adults_birth_child_<?php echo $c;?>').datetimepicker({
                                        locale: 'ru',
                                        format: 'YYYY-MM-DD'
                                    });
                                });
                            </script>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Серия паспорта" name="child[<?php echo $i?>][passport_series_child]">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Номер паспорта" name="child[<?php echo $i?>][passport_id_child]">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control pre_data_child" placeholder="Паспорт действителен до" name="child[<?php echo $i?>][passport_valid_child]">
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <a href="#pay_order" class="black_btn fancy" id="pre_order">Продолжить</a>
                </form>
            </div>
        </div>
    </body>
</html>

<script>
    $(document).ready(function() {

        $('.icheck_radio').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal',
            increaseArea: '20%' // optional
        });

        $('#pre_order').click(function (e) {
            e.preventDefault();
            var error = 0;
            $('#pre_order_form input').each(function () {
                console.log($(this).val());
                if(!$(this).val()){
                    $(this).addClass('error');
                    error ++;
                } else {
                    $(this).removeClass('error');
                }
            });
            if(error > 0){
                return false;
            }

            var pre_data = $("#pre_order_form").serialize();
            $.ajax({
                type: "POST",
                url: "/order/pre_order",
                dataType: "json",
                data: pre_data,
                success: function (data) {
                    ('#pay_order').fancybox();
                }
            });
            });

    });
</script>
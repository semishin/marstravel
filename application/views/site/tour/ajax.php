<html>
    <head></head>
    <body>
        <div class="clearfix"></div>
            <div id="pre_pay">
                <p class="lightbox_header">Заполните ваши данные</p>
                <form role="form" class="lightbox_form" id="pre_order_form">
                    <?php for($i = 1; $i <= $quantity_adults; $i++) { ?>
                        <p><b>Турист <?php echo $i?> (взрослый)</b></p>
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
                        <div class="form-group">
                            <input type="text" class="form-control pre_data_adults" placeholder="Дата рождения" name="adults[<?php echo $i?>][birth_adults]">
                        </div>
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
                            <p><b>Турист <?php echo $i?> (ребенок)</b></p>
                            <p><b>Пол</b></p>
                            <label><input class="pre_data_child icheck_radio" checked type="radio" name="child[<?php echo $i?>][gender_child]"  value="1"/>Мужской</label>
                            <label><input  class="pre_data_child icheck_radio"  type="radio" name="child[<?php echo $i?>][gender_child]"  value="2"/>Женский</label>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Фамилия" name="child[<?php echo $i?>][surname_child]">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Имя" name="child[<?php echo $i?>][pre_name_child]">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control pre_data_child" placeholder="Дата рождения" name="child[<?php echo $i?>][birth_child]">
                            </div>
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

        $('#pay_btn').click(function(e) {
            e.preventDefault();
            var errors = 0;
            var code = $('input[name="code"]').data('coupon_code');
            var tour_id = $(this).data('id');
            var date = $('#date').val();
            var quantity_adults = $('#adult_number').val();
            var quantity_children = $('#children_number').val();
            var price = $('.total_price').data('price');
            var cost = ((quantity_adults * price) + (quantity_children * price));
            if($('#fio_1').length>0){
                var fio = $('#fio_1').val();
                if (!fio) {
                    $('#fio_1').addClass('error');
                    errors++;
                } else {
                    $('#fio_1').removeClass('error');
                }
            }
            if($('#dob_1').length>0){
                var dob = $('#dob_1').val();
                if (!dob) {
                    $('#dob_1').addClass('error');
                    errors++;
                } else {
                    $('#dob_1').removeClass('error');
                }
            }
            if($('#passport_1').length>0){
                var passport = $('#passport_1').val();
                if (!passport) {
                    $('#passport_1').addClass('error');
                    errors++;
                } else {
                    $('#passport_1').removeClass('error');
                }
            }
            if($('#validity_1').length>0){
                var validity = $('#validity_1').val();
                if (!validity) {
                    $('#validity_1').addClass('error');
                    errors++;
                } else {
                    $('#validity_1').removeClass('error');
                }
            }
            if($('#issuedby_1').length>0){
                var issuedby = $('#issuedby_1').val();
                if (!issuedby) {
                    $('#issuedby_1').addClass('error');
                    errors++;
                } else {
                    $('#issuedby_1').removeClass('error');
                }
            }
            if($('#email_1').length>0){
                var email = $('#email_1').val();
                if (!email) {
                    $('#email_1').addClass('error');
                    errors++;
                } else {
                    $('#email_1').removeClass('error');
                }
            }
            if($('#phone_1').length>0){
                var phone = $('#phone_1').val();
                if (!phone) {
                    $('#phone_1').addClass('error');
                    errors++;
                } else {
                    $('#phone_1').removeClass('error');
                }
            }
            var payment = $('#payment_1').val();

            if ($('#agreement_1').is(':checked')) {
                var agreement = 1;
                $('#agreement_1').parent().parent().removeClass('error');
            } else {
                $('#agreement_1').parent().parent().addClass('error');
                return false;
            }
            if ($('#surcharge_1').is(':checked')) {
                var surcharge = 1;
            } else {
                var surcharge = 0;
            }
            if(errors){
                return false;
            } else{
                $.ajax({
                    url : "/order/add",
                    dataType : "json",
                    type : "post",
                    data : {
                        tour_id : tour_id,
                        date : date,
                        quantity_adults : quantity_adults,
                        quantity_children : quantity_children,
                        cost : cost,
                        fio : fio,
                        dob : dob,
                        passport : passport,
                        validity : validity,
                        issuedby : issuedby,
                        email : email,
                        coupon_id : coupon_id,
                        code: code,
                        phone : phone,
                        payment : payment,
                        agreement : agreement,
                        surcharge : surcharge
                    },
                    success : function(jsondata) {
                        $('#pay_order').html('<p class="lightbox_header">Спасибо за заказ!</p><p class="lightbox_text">Номер вашего заказа '+jsondata.number_order+'</p>');
                    },
                    error: function(xhr, status, error) {
                        alert(status + '|\n' +error);
                    }
                });
            }
        });

    });
</script>
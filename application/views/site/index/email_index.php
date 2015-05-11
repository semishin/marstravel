<script>
    $(document).ready(function(){
        $('#feedb_but').click(function(e) {


            e.preventDefault();

            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var phone = $('input[name="phone"]').val();
            var text = $('textarea[name="text"]').val();
            var errors = 0;
            if (!name) {
                $('input[name=name]').addClass('error');
                errors++;
            } else {
                $('input[name=name]').removeClass('error');
            }
            if (!email) {
                $('input[name=email]').addClass('error');
                errors++;
            } else {
                $('input[name=email]').removeClass('error');
            }
            if (!phone) {
                $('input[name=phone]').addClass('error');
                errors++;
            } else {
                $('input[name=phone]').removeClass('error');
            }
            if (!text) {
                $('textarea[name=text]').addClass('error');
                errors++;
            } else {
                $('textarea[name=text]').removeClass('error');
            }
            if (errors) {
                $('.form_desc').removeClass('loading');
                return false;
            }
            $.ajax({
                url : "/feedb/add",
                dataType : "json",
                type : "post",
                data : {name : name, email : email, phone : phone, text : text},
                success : function(jsondata) {
                    $('.form_desc').removeClass('loading');
                    $('.form_desc').html('<h3>Спасибо за заявку</h3>');
                    $('.form_wrap form').html('');
                }
            });
        });
    });
</script>
<div class="form_wrap">

    <strong class="form_title">Если надо заполнить</strong>
    <span class="form_desc">Наш менеджер свяжется с Вами в ближайшее время для подтверждения заказа.</span>

    <form action="#">
        <input name="name" type="text" placeholder="Ваше имя *" />
        <input name="email" type="text" placeholder="E-mail *"/>
        <input name="phone" type="text" placeholder="Телефон *"/>
        <textarea name="text" placeholder="Комментарий"></textarea>

        <div class="submit_wrap">
            <input class="slider_link" id="feedb_but" type="submit" value="Сделать заказ"/>
        </div>

    </form>

</div>
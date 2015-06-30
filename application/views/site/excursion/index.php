<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Экскурсии по Турции</p>
        <p class="text-center duration" id="count_excursion">всего <?php echo $count_excursion; ?> экскурсий</p>
        <div class="filter">
            <div class="row">
                <div class="col-xs-4">
                    <div class="bootstrap-select findsight">
                        <input type="text" class="form-control" id="findexcursion" placeholder="Введите слово для поиска по экскурсиям">
                        <span id="find_btn">Найти</span>
                    </div>
                </div>
                <div class="col-xs-3" id="cityexcursion">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Город или курорт</option>
                        <option data-id="0">Все</option>
                        <?php foreach ($cities as $item) { ?>
                            <option data-id="<?php echo $item->id; ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-3" id="categoryexcursion">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Категории</option>
                        <option data-id="0">Все</option>
                        <?php foreach ($categories as $item) { ?>
                            <option data-id="<?php echo $item->id; ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <div class="sights_block">
                <div class="row">
                    <?php foreach ($excursion as $item) { ?>
                        <div class="col-xs-4">
                            <div class="sight">
                                <div class="image">
                                    <a href="/excursion/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::resize_bg($item->main_image, 'excursion',$item->id, 370, 258); ?>" class="img-responsive"></a>
                                </div>
                                <div class="name">
                                    <a href="/excursion/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                                    <p class="additional_text"><?php echo $item->city_name ?>, <?php echo $item->category_name ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if ($count_excursion > 6) { ?>
                <p class="text-center"><button type="button" id="more_excursion" class="btn btn-default load_button">Ещё экскурсии</button></p>
            <?php } ?>
        </div>
    </div>
</div>
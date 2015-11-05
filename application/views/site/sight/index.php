<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>Назад на главную</span></a>
        <p class="text-center header">Достопримечательности Турции</p>
        <p class="text-center duration" id="count_sight">всего <?php echo $count_sight; ?> мест</p>
        <div class="filter">
            <div class="row">
                <div class="col-xs-4">
                    <div class="bootstrap-select findsight">
                        <input type="text" class="form-control" placeholder="Введите слово для поиска по местам">
                        <span id="find_btn" class="findsight">Найти</span>
                    </div>
                </div>
                <div class="col-xs-3" id="citysight">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Город или курорт</option>
                        <option data-id="0">Все</option>
                        <?php foreach ($cities as $item) { ?>
                            <option data-id="<?php echo $item->id; ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-3" id="categorysight">
                    <select class="selectpicker form-control">
                        <option disabled selected style="display: none">Категории</option>
                        <option data-id="0">Все</option>
                        <?php foreach ($categories as $item) { ?>
                            <option data-id="<?php echo $item->id; ?>"><?php echo $item->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-2">
                    <label class="checkbox">
                        <input type="checkbox" id="inlineCheckbox1" value="option1">С экскурсиями <sup><small id="count_excursion"><?php echo $count_excursion; ?></small></sup>
                    </label>
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
                    <?php foreach ($sight as $item) { ?>
                        <div class="col-xs-4">
                            <div class="sight">
                                <div class="image">
                                    <a href="/sight/<?php echo $item->url ?>">
                                        <?php if($item->main_image) { ?>
                                            <img src="<?php echo Lib_Image::resize_bg($item->main_image, 'sight',$item->id, 370, 258); ?>" class="img-responsive">
                                        <?php } else { ?>
                                            <img src="holder.js/200x150">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="name">
                                    <a href="/sight/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                                    <p class="additional_text"><?php echo $item->city_name ?><?php if($item->category_name) echo ', '?> <?php echo $item->category_name ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if ($count_sight > 6) { ?>
                <p class="text-center"><button type="button" id="more_sight" class="btn load_button black_btn">Загрузить ещё</button></p>
            <?php } ?>
        </div>
    </div>
</div>
<?php if($count_review > 0) { ?>
<?php foreach ($review as $item) { ?>
    <?php  $curent_tour = ORM::factory('Tour')->where('id', '=', $item->tour_id)->find();?>
    <div class="comment_item">
        <div class="comment_item_header">
            <div class="author"><?php echo $item->name;?></div>
            <ul class="rating_stars locked list-inline">
                <li data-rating="1" <?php if($item->rating  >= 1) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="2" <?php if($item->rating  >= 2) { ?> class="active"<?php } ?> class=""><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="3" <?php if($item->rating  >= 3) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="4" <?php if($item->rating  >= 4) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
                <li data-rating="5" <?php if($item->rating  == 5) { ?> class="active"<?php } ?>><span class="glyphicon glyphicon-star"></span></li>
            </ul>
        </div>
        <div class="comment_item_body">
            <div class="tour_name"><?php echo $curent_tour->name;?></div>
            <div class="tour_date"><?php if($item->start_date) { echo date("d/m/Y", strtotime($item->start_date)); } ?><?php if($item->start_date && $item->end_date) echo ' - '?><?php if($item->end_date) { echo  date("d/m/Y", strtotime($item->end_date)); } ?></div>
            <div class="text">
                <?php echo $item->text;?>
            </div>
            <div class="row">
                <?php if($item->image) { ?>
                    <?php $images = json_decode($item->image);?>
                    <?php if($images) { ?>
                        <?php foreach($images as $index =>  $image) { ?>
                            <div class="col-xs-3">
                                <a class="images_sight" rel="gallery_<?php echo $item->id?>" href="<?php echo $image;?>" title="<?php echo $curent_tour->name?>">
                                    <img src="<?php echo $image?>" class="img-responsive mt15" />
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="triangle-topleft"></div>
    </div>
<?php } ?>
<?php } else { ?>
    <p class="text-center header"><h2>По данному туру нет отзывов</h2></p>
<?php } ?>

<div class="col-xs-12">
    <div class="slider">
        <?php echo View::factory('site/slider/index', array('slide' => $slide, 'count_slide' => $count_slide))?>
    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-md-3 col-xs-12 left_block">
            <div class="row">
                <?php echo View::factory('layout/site/menu/index');?>
                <div class="col-md-12 col-xs-4">
                    <?php foreach ($left_banner as $item) { ?>
                        <a href="<?php echo $item->link ?>">
                            <div class="left_banner" style="height: 343px;background:url(<?php echo Lib_Image::crop($item->image, 'banner',$item->id, 282, 360); ?>);"></div>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 right_block">
            <h1 style="margin-top: 0px;"><?php echo $name ?></h1>
            <?php echo $content ?>
        </div>
        <div class="col-xs-12">
            <h2>Наши гарантии</h2>
            <div class="adventure_program text-center">
                <div class="intro">
                  <div class="col-sm-4">
                      <a href="#"><img src="/marstravel-bootstrap/img/word_img.png">
                          <p>Text</p>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="#"><img src="/marstravel-bootstrap/img/pdf_img.png">
                          <p>Text</p>
                      </a>
                  </div>
                  <div class="col-sm-4">
                      <a href="#"><img src="/marstravel-bootstrap/img/pdf_img.png">
                          <p>Text</p>
                      </a>
                  </div>
                </div>
            </div>
        </div>
        <?php if($images) { $images = json_decode($images)?>
            <div class="col-xs-12">
                <div class="adventure_program">
                    <div class="intro">
                        <p class="text">
                            <?php foreach($images as $item) { ?>
                                <a class="images_sight " rel="gallery1" href="<?php echo $item;?>" title="<?php echo $name?>">
                                    <img src="<?php echo $item;?>" class="img-rounded col-xs-4 mb30" />
                                </a>
                            <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
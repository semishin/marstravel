<!--<div class="block_bg block_bg2 container-fluid">-->
<!--    <div class="page_block">-->
<!--        <div class="invert blog">-->
<!--            <div class="row">-->
<!--                <div class="col-xs-12">-->
<!--                    <p class="text-center icon"><img src="/goodsign-bootstrap/img/tittle-icon.png"></p>-->
<!--                    <p class="text-center">Поиск</p>-->
<!--                </div>-->
<!--                <div class="col-xs-12">-->
<!--                    <ul class="list-inline list-unstyled blog_filter">-->
<!---->
<!--                    </ul>-->
<!---->
<!--                    <form class="input-group search" action="/search">-->
<!--                            <input type="text" name="q" class="form-control" placeholder="Поиск по блогу">-->
<!--                            <span class="input-group-btn">-->
<!--                                <button class="btn btn-default" type="button">Go!</button>-->
<!--                            </span>-->
<!--                    </form>--><!-- /input-group -->
<!--                    <div class="clearfix"></div>-->
<!--                </div>-->
<!--                <div class="col-xs-12">-->
<!--                    <div class="">-->
<!--                        <div class="articles_block">-->
<!--                            <div class="row">-->
<!--                                --><?php //if(!$items) { ?>
<!--                                    <div class="alert alert-danger search">По вашему запросу ничего не найдено</div>-->
<!--                                --><?php //} ?>
<!--                                <div id="container">-->
<!--                                    --><?php //foreach ($items as $index => $article) { ?>
<!--                                        <div class="item col-xs-4">-->
<!--                                            <div class="article">-->
<!--                                                <div class="name"><a href="/articles/--><?php //echo $article->url; ?><!--">--><?php //echo $article->name; ?><!--</a></div>-->
<!--                                                <div class="date"><span>--><?php //echo $article->date; ?><!--</span></div>-->
<!--                                                --><?php //if ($article->video) { ?>
<!--                                                    <a class="various fancybox.iframe" href="--><?php //echo $article->video; ?><!--">-->
<!--                                                        <div class="video content">-->
<!--                                                            <div class="image"><img src="--><?php //echo $article->image; ?><!--" class="img-responsive"></div>-->
<!---->
<!--                                                            <div class="play_icon"></div>-->
<!---->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                --><?php //} else { ?>
<!--                                                    <div class="content"><a href="/articles/--><?php //echo $article->url; ?><!--"><img src="--><?php //echo $article->image; ?><!--" class="img-responsive"></a></div>-->
<!--                                                --><?php //} ?>
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    --><?php //} ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-xs-12">-->
<!--                    --><?php //echo $pagination; ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="col-xs-12">
    <div class="slider_shadow"></div>
    <div class="grey_top_block">
        <a href="/" class="back_to_main">&larr; <span>На главную</span></a>
        <p class="text-center header"><?php echo $s_title ?></p>

    </div>
</div>
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <div class="hotels_block">
                <div class="row">
                    <?php if(!$search_result) { ?>
                        <div class="alert alert-danger search">По вашему запросу ничего не найдено</div>
                    <?php } ?>
                    <?php foreach ($search_result as $index => $item) { ?>
                        <div class="col-xs-4">
                            <div class="hotel">
                                <div class="image">
                                    <a href="/tour/<?php echo $item->url ?>"><img src="<?php echo Lib_Image::crop($item->main_image, 'tour',$item->id, 370, 258); ?>" class="img-responsive"></a>
                                </div>
                                <div class="name">
                                    <a href="/tour/<?php echo $item->url ?>"><?php echo $item->name ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php if($count_pages > 1) { ?>
                <div class="col-xs-12">
                    <?php echo $pagination; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
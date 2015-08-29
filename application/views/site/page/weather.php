<div class="col-xs-12">
    <div class="slider">
        <div class="slider_shadow"></div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-md-9 col-xs-8 left_part">
                    <div class="carousel-inner">
                        <?php foreach ($slide as $index => $item) { ?>
                            <div class="item <?php if (!$index) { ?>active<?php } ?>">
                                <a href="<?php echo $item->link ?>">
                                    <img src="<?php echo Lib_Image::crop($item->image, 'slide',$item->id, 905, 489); ?>" class="img-responsive">
                                </a>
                                <div class="carousel-caption"></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3 col-xs-4 right_part">
                    <?php foreach ($slide as $index => $item) { ?>
                        <div class="slide_text <?php if (!$index) { ?>active<?php } ?> text<?php echo $index ?>">
                            <p class="text-center"><?php echo $item->name ?></p>
                            <p class="text-center"><i><?php echo $item->content ?></i></p>
                        </div>
                    <?php } ?>
                    <ol class="carousel-indicators">
                        <?php for ($i = 0; $i < $count_slide; $i++) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" <?php if (!$i) { ?>class="active"<?php } ?>></li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
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
            <iframe scrolling="no" frameBorder="0" src="http://pogoda.turtella.ru/i/p2j8s/map/#weather,,33.59450187499998,38.76391027071685,6" style="width:100%; height: 480px; border: none;"></iframe>
			<div><?=$content?></div>
			<table border="0" cellpadding="2" cellspacing="1" style="width:100%" class="table">
				<tbody>
					<tr>
						<td><strong>Месяц</strong></td>
						<td><strong>Температура воздуха<br>
						(день) °С</strong></td>
						<td><strong>Температура воды<br>
						(моря) °С</strong></td>
					</tr>
					<tr class="active">
						<td>&nbsp;Турция в январе</td>
						<td>+14</td>
						<td>+17</td>
					</tr>
					<tr class="active">
						<td>&nbsp;Турция в феврале</td>
						<td>+15</td>
						<td>+17</td>
					</tr>
					<tr class="active">
						<td>&nbsp;Турция в марте</td>
						<td>+17</td>
						<td>+17</td>
					</tr>
					<tr class="danger">
						<td>&nbsp;Турция в апреле</td>
						<td>+21</td>
						<td>+18</td>
					</tr>
					<tr class="success">
						<td>&nbsp;Турция в мае</td>
						<td>+27</td>
						<td>+20</td>
					</tr>
					<tr class="success">
						<td>&nbsp;Турция в июне</td>
						<td>+33</td>
						<td>+23</td>
					</tr>
					<tr class="success">
						<td>&nbsp;Турция в июле</td>
						<td>+35</td>
						<td>+26</td>
					</tr>
					<tr class="warning">
						<td>&nbsp;Турция в августе</td>
						<td>+38</td>
						<td>+27</td>
					</tr>
					<tr class="success">
						<td>&nbsp;Турция в сентябре</td>
						<td>+32</td>
						<td>+26</td>
					</tr>
					<tr class="success">
						<td>&nbsp;Турция в октябре</td>
						<td>+27</td>
						<td>+25</td>
					</tr>
					<tr class="danger">
						<td>&nbsp;Турция в ноябре</td>
						<td>+17</td>
						<td>+23</td>
					</tr>
					<tr class="active">
						<td>&nbsp;Турция в декабре</td>
						<td>+15</td>
						<td>+19</td>
					</tr>
				</tbody>
				</table>
		</div>
    </div>
</div>
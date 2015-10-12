<?php 
	$max_page = $current_page + 1;
	
	if ($max_page > $total_pages) {
		$max_page = $total_pages;
	}
	
	if ($total_pages >= 3 && $max_page < 3) {
		$max_page = 3;
	}
	
	$min_page = $current_page - 1;
	if (($total_pages - $min_page) < 3) {
		$min_page--;
	}
	
	if ($min_page < 1) {
		$min_page = 1;
	}
?>

<div class="block_pagination">
<!--	<strong>Страницы:</strong> -->
    <ul class="pagination">
        <li><a href="<?php echo urldecode($page->url(1)); ?>">Начало</a></li>
        <?php for ($i = $min_page; $i <= $max_page; $i++) { ?>
            <?php if ($i == $current_page) { ?>
                <li><a class="current" href="<?php echo urldecode($page->url($i)) ?>"><span><?php echo $i; ?></span></a></li>
            <?php } else { ?>
                <li><a href="<?php echo urldecode($page->url($i)) ?>"><?php echo $i; ?></a></li>
            <?php } ?>
        <?php } ?>
        <li><a href="<?php echo urldecode($page->url($total_pages)); ?>">Конец</a></li>
    </ul>
</div>
<div class="block_pagination">
<!--	<strong>Страницы:</strong> -->
    <ul class="pagination">
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li><a <?php if ($previous_page == FALSE): ?>disabled="disabled"<?php endif ?> class="btn btn-default" href="<?php echo $page->url($previous_page) ?>">&larr;</a></li>
            <?php if ($i == $current_page): ?>
                <li><a class="current" disabled="disabled" href="#"><span><?php echo $i ?></span></a></li>
            <?php else: ?>
                <li><a href="<?php echo $page->url($i) ?>"><?php echo $i ?></a></li>
            <?php endif ?>
            <li><a <?php if ($next_page == FALSE): ?>disabled="disabled"<?php endif ?> class="btn btn-default<?php if ($next_page == TRUE): ?> button-gray<?php endif ?>" href="<?php echo $page->url($next_page) ?>"><?php if ($next_page == FALSE) { ?>&rarr;<?php } else { ?>Следующая страница &rarr;<?php } ?></a></li>
        <?php endfor ?>
    </ul>
</div>
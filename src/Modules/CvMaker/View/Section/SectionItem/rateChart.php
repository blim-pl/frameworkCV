<?php if ($canDraw) : ?>
<div class="list-item-rate-rate">
    <?php
    for ($i = 1; $i <= $max; $i++) {
        echo '<span class="fa">';
        echo ($i <= $active) ? '&#xf14a;' : '&#xf096;';
        echo '</span>';
    }
    ?>
</div>
<?php endif; ?>
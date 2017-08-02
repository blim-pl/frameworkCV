<div class="section">
    <div class="header"><?php echo $this->getName() ?></div>
    <div class="list">
        <?php foreach ($this->items as $item): ?>
            <?php echo $item->toHtml() ?>
        <?php endforeach; ?>
    </div>
</div>
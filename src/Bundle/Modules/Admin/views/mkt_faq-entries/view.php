<?php

?>

<?= $this->Flash()->render($this->controller); ?>

<div class="d-grid gap-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-3">
            <?= $this->load('modules/panels/item-details'); ?>
        </div>
        <div class="col-12 col-lg-12 col-xl-9">
            <?= $this->load('modules/panels/item-content'); ?>
        </div>
    </div>
</div>

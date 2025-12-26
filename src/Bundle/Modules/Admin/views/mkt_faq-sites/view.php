<?php

?>

<?= $this->Flash()->render($this->controller); ?>

<div class="d-grid gap-5">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-3">
            <?= $this->load('modules/panels/item-details'); ?>
        </div>
    </div>

    <div id="faq-site-builder">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <?= $this->load('modules/panels/item-entries'); ?>
            </div>
            <div class="col-12 col-lg-6 col-xl-9">
                <?= $this->load('modules/panels/item-categories'); ?>
            </div>
        </div>
    </div>
</div>

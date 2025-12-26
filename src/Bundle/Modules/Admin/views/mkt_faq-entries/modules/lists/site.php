<?php

use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\Utility\FaqModels;

$site = $this->site;
$categoriesRepository = FaqModels::entries();


/** @var Entry[] $faqEntries */
$faqEntries = $this->faqEntries;
?>

<ul class="list-group list-group-flush">
    <?php foreach ($faqEntries as $entry) : ?>
        <li class="list-group-item">
            <div class="dropdown float-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= \ByTIC\Icons\Icons::plus() ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <h5><?= $entry->getTitle(); ?></h5>
            <p>
                <?= $entry->getLead(); ?>
            </p>
        </li>
    <?php endforeach; ?>
</ul>

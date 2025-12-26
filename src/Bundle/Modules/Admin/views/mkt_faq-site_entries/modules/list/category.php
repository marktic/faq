<?php

/** @var \Marktic\Faq\SiteEntries\Models\SiteEntry[] $siteEntries */
$siteEntries = $siteEntries ?? [];
?>

<ul class="site-entries-list list-group list-group-flush">
    <?php foreach ($siteEntries as $siteEntry) : ?>
        <?php $entry = $siteEntry->getFaqEntry(); ?>
        <li class="list-group-item">
            <a href="" class="btn btn-xs btn-outline-primary float-end">
                <?= \ByTIC\Icons\Icons::remove(); ?>
            </a>
            <h5 class="text-info">
                <?= $entry->getTitle(); ?>
            </h5>
            <p>
                <?= $entry->getLead(); ?>
            </p>
        </li>
    <?php endforeach; ?>
</ul>
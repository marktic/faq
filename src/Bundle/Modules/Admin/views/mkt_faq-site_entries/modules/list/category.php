<?php


use ByTIC\Icons\Icons;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\SiteEntries\Models\SiteEntry;
use Marktic\Faq\Utility\FaqModels;

/** @var SiteEntry[] $siteEntries */
$siteEntries = $siteEntries ?? [];
/** @var SiteCategory $siteCategory */
$siteCategory = $siteCategory ?? null;
?>

<ul class="site-entries-list list-group list-group-flush"
    data-order-url="<?= FaqModels::siteEntries()->compileURL('order', ['category_id' => $siteCategory->id]) ?>">
    <?php foreach ($siteEntries as $siteEntry) : ?>
        <?php $entry = $siteEntry->getFaqEntry(); ?>
        <li class="list-group-item" data-id="<?= $siteEntry->getId(); ?>">
            <a href="" class="btn btn-xs btn-outline-primary float-end">
                <?= Icons::remove(); ?>
            </a>
            <h5 class="text-info">
                <?= Icons::arrowsAlt(); ?>
                <a href="<?= $entry->getURL(); ?>">
                    <?= $entry->getTitle(); ?>
                </a>
            </h5>
            <p>
                <?= $entry->getLead(); ?>
            </p>
        </li>
    <?php endforeach; ?>
</ul>
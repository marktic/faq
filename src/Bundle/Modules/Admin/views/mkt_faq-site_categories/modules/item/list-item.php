<?php

use ByTIC\Icons\Icons;
use Marktic\Faq\SiteCategories\Models\SiteCategory;

/** @var SiteCategory $siteCategory */
$siteCategory = $siteCategory ?? $this->siteCategory;
$siteEntries = $siteCategory->getFaqSiteEntries();
?>

<section data-id="<?= $siteCategory->id ?>" class="bg-light border" >
    <h5 class="site-category-title pt-2 px-3 fw-bold text-primary">
        <?= Icons::arrowsAlt(); ?>
        <?= $siteCategory->getTitle(); ?>
    </h5>
    <div class="inner p-3" >
        <?= $this->load('/mkt_faq-site_entries/modules/list/category', ['siteEntries' => $siteEntries]); ?>
    </div>
</section>

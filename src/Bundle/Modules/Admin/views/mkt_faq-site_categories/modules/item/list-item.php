<?php
/** @var \Marktic\Faq\SiteCategories\Models\SiteCategory $siteCategory */
$siteCategory = $siteCategory ?? $this->siteCategory;

?>

<section data-id="<?= $siteCategory->id ?>" class="bg-light border" >
    <h5 class="site-category-title pt-2 px-3 fw-bold text-primary">
        <?= \ByTIC\Icons\Icons::arrowsAlt(); ?>
        <?= $siteCategory->getTitle(); ?>
    </h5>
    <div class="inner p-3" >
        <?= $this->load('/mkt_faq-site_entries/modules/list/category'); ?>
    </div>
</section>

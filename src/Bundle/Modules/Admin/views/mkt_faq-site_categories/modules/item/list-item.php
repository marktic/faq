<?php
/** @var \Marktic\Faq\SiteCategories\Models\SiteCategory $siteCategory */
$siteCategory = $siteCategory ?? $this->siteCategory;
?>

<section data-id="<?= $siteCategory->id ?>" class="bg-light border" >
    <h3 class="site-category-title">
        <?= \ByTIC\Icons\Icons::arrowsAlt(); ?>
        <?= $siteCategory->getTitle(); ?>
    </h3>
    <div class="inner p-3" >
        ENTRIES
    </div>
</section>

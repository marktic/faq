<?php

/** @var Site $site */

use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Sites\Models\Site;
use Marktic\Faq\Utility\FaqModels;

$site = $this->item;
$categoriesRepository = FaqModels::siteCategories();

/** @var SiteCategory $siteCategories */
$siteCategories = $this->faqSiteCategories;

?>

<a href="<?= $categoriesRepository->compileURL('add', ['site_id' => $site->id]) ?>" class="btn btn-primary mb-3">
    <?= $categoriesRepository->getLabel('add'); ?>
</a>

<?php if (count($siteCategories) < 1) : ?>
    <?= $this->Messages()->info($categoriesRepository->getMessage('')); ?>
<?php endif; ?>

<div class="site-categories-list d-grid gap-3"
     data-order-url="<?= FaqModels::siteCategories()->compileURL('order', ['site_id' => $site->id]) ?>">
    <?php foreach ($siteCategories as $siteCategory) : ?>
        <?= $this->load('/mkt_faq-site_categories/modules/item/list-item', ['siteCategory' => $siteCategory]); ?>
    <?php endforeach; ?>
</div>

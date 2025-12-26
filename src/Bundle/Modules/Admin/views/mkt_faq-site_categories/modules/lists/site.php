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
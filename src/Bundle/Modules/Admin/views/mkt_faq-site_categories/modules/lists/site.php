<?php

/** @var Site $site */

use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Sites\Models\Site;
use Marktic\Faq\Utility\FaqModels;

$site = $this->site;
$categoriesRepository = FaqModels::siteCategories();

/** @var SiteCategory $siteCategories */
$siteCategories = $this->siteCategories;

?>

<a href="<?= $categoriesRepository->compileURL('add', ['site_id' => $site->id]) ?>">
   <?= $categoriesRepository->getLabel('add'); ?>
</a>

<?php if (count($siteCategories) < 1) : ?>
    <?= $this->Messages()->info($categoriesRepository->getMessage('')); ?>
<?php endif; ?>
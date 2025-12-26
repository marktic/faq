<?php

use ByTIC\Icons\Icons;
use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Utility\FaqModels;

$site = $this->site;
$siteEntries = FaqModels::siteEntries();

/** @var SiteCategory[] $siteCategories */
$siteCategories = $this->faqSiteCategories;

/** @var Entry[] $faqEntries */
$faqEntries = $this->faqEntries;
?>

<ul class="list-group list-group-flush">
    <?php foreach ($faqEntries as $entry) : ?>
        <li class="list-group-item">
            <div class="dropdown float-end">
                <button class="btn btn-outline-info btn-xs dropdown-toggle"
                        type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <?= Icons::plus() ?>
                </button>
                <ul class="dropdown-menu">
                    <?php foreach ($siteCategories as $category) : ?>
                        <li>
                            <a class="dropdown-item"
                               href="<?= $siteEntries->compileURL('add', ['category_id' => $category->id, 'entry_id' => $entry->id]); ?>">
                                <?= $siteEntries->getLabel('add.category', ['category' => $category->getTitle()]); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <h6 class="fw-bold"><?= $entry->getTitle(); ?></h6>
            <small>
                <?= $entry->getLead(); ?>
            </small>
        </li>
    <?php endforeach; ?>
</ul>

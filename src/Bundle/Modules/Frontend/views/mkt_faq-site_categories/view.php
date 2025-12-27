<?php


use Marktic\Faq\SiteCategories\Models\SiteCategory;

/** @var SiteCategory $faqSiteCategory */
$faqSiteCategory = $this->faqSiteCategory;
$faqSiteEntries = $faqSiteCategory->getFaqSiteEntries();
$sectionID = 'faq-category-' . $faqSiteCategory->id;
?>
<section class="faq-site-category mb-4">
    <h4 class="fw-bold">
        <?= $faqSiteCategory->getTitle(); ?>
        <span class="badge bg-info fs-6 ms-4">
            <?= count($faqSiteEntries); ?>
        </span>
    </h4>
    <div class="accordion accordion-flush" id="<?= $sectionID; ?>">
        <?php foreach ($faqSiteEntries as $faqSiteEntry): ?>
            <?php
            $entryId = 'entry-' . $faqSiteEntry->id;
            $faqEntry = $faqSiteEntry->getFaqEntry();
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#<?= $entryId; ?>"
                            aria-expanded="false" aria-controls="<?= $entryId; ?>">
                        <?= $faqEntry->getTitle(); ?>
                    </button>
                </h2>
                <div id="<?= $entryId; ?>" class="accordion-collapse collapse" data-bs-parent="#<?= $sectionID; ?>">
                    <div class="accordion-body">
                        <?= $faqEntry->getContent(); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
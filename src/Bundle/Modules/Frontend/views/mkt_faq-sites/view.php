<?php

$faqSite = $this->faqSite;
$faqSiteCategories = $this->faqSiteCategories;
?>

<?php foreach ($faqSiteCategories as $faqSiteCategory): ?>
    <?= $this->render(
            '/mkt_faq-site_categories/view',
            ['faqSiteCategory' => $faqSiteCategory, 'faqSite' => $faqSite]
    ); ?>
<?php endforeach; ?>

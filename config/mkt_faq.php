<?php

use Marktic\Faq\SiteCategories\Models\SiteCategories;
use Marktic\Faq\SiteEntries\Models\SiteEntries;
use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\Sites\Models\Sites;
use Marktic\Faq\Utility\FaqModels;

return [
    'models' => array(
        FaqModels::ENTRIES => Entries::class,
        FaqModels::SITES => Sites::class,
        FaqModels::SITE_CATEGORIES => SiteCategories::class,
        FaqModels::SITE_ENTRIES => SiteEntries::class,
    ),
    'tables' => [
        FaqModels::ENTRIES => Entries::TABLE,
        FaqModels::SITES => Sites::TABLE,
        FaqModels::SITE_CATEGORIES => SiteCategories::TABLE,
        FaqModels::SITE_ENTRIES => SiteEntries::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];

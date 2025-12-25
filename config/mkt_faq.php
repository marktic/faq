<?php

use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\Sites\Models\Sites;
use Marktic\Faq\Utility\FaqModels;

return [
    'models' => array(
        FaqModels::ENTRIES => Entries::class,
        FaqModels::SITES => Sites::class,
    ),
    'tables' => [
        FaqModels::ENTRIES => Entries::TABLE,
        FaqModels::SITES => Sites::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];

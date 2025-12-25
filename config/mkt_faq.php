<?php

use Marktic\Faq\Sites\Models\Sites;
use Marktic\Faq\Utility\FaqModels;

return [
    'models' => array(
        FaqModels::SITES => Sites::class,
    ),
    'tables' => [
        FaqModels::SITES => Sites::TABLE,
    ],
    'database' => [
        'connection' => 'main',
        'migrations' => true,
    ],
];

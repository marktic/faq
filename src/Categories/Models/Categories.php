<?php

declare(strict_types=1);

namespace Marktic\Faq\Categories\Models;

use Marktic\Faq\Base\Models\FaqRecordsTrait;
use Nip\Records\RecordManager;

/**
 * Class Categories
 */
class Categories extends RecordManager
{
    use CategoryRepositoryTrait, FaqRecordsTrait {
        CategoryRepositoryTrait::generateFilterManagerDefaultClass insteadof FaqRecordsTrait;
    }
}

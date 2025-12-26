<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteCategories\Models;

use Marktic\Faq\Base\Models\FaqRecordsTrait;
use Nip\Records\RecordManager;

/**
 * Class SiteCategories
 */
class SiteCategories extends RecordManager
{
    use SiteCategoriesRepositoryTrait, FaqRecordsTrait {
        SiteCategoriesRepositoryTrait::generateFilterManagerDefaultClass insteadof FaqRecordsTrait;
    }
}

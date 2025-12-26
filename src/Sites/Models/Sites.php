<?php

declare(strict_types=1);

namespace Marktic\Faq\Sites\Models;

use Marktic\Faq\Base\Models\FaqRecordsTrait;
use Nip\Records\RecordManager;

class Sites extends RecordManager
{
    use SiteRepositoryTrait, FaqRecordsTrait {
        SiteRepositoryTrait::generateFilterManagerDefaultClass insteadof FaqRecordsTrait;
    }

}

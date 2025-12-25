<?php

declare(strict_types=1);

namespace Marktic\Faq\Entries\Models;

use Marktic\Faq\Base\Models\FaqRecordsTrait;
use Nip\Records\RecordManager;

class Entries extends RecordManager
{
    use EntryRepositoryTrait, FaqRecordsTrait {
        EntryRepositoryTrait::generateFilterManagerDefaultClass insteadof FaqRecordsTrait;
    }
}

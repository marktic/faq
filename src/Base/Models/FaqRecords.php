<?php

declare(strict_types=1);

namespace Marktic\Faq\Base\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordsTrait;
use Nip\I18n\Translatable\HasTranslations;
use Nip\Records\Filters\Records\HasFiltersRecordsTrait;
use Nip\Records\RecordManager;

/**
 */
class FaqRecords extends RecordManager
{
    use HasFiltersRecordsTrait;
    use HasFormsRecordsTrait;
    use HasTranslations;

    /**
     * @return string
     */
    public function getTranslateRoot()
    {
        return $this->getController();
    }

    public function getRootNamespace()
    {
        return 'Marktic\Faq\Models\\';
    }

}

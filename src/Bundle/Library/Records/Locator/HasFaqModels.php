<?php

namespace Marktic\Faq\Bundle\Library\Records\Locator;

use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\Sites\Models\Sites;
use Marktic\Faq\Utility\FaqModels;
use Nip\Records\RecordManager;

trait HasFaqModels
{
    /**
     */
    public static function cmsSites(): Sites|RecordManager
    {
        return FaqModels::sites();
    }

    /**
     * @return Entries|RecordManager
     */
    public static function entries(): Entries|RecordManager
    {
        return FaqModels::entries();
    }

}
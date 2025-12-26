<?php

namespace Marktic\Faq\Bundle\Library\Records\Locator;

use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\SiteCategories\Models\SiteCategories;
use Marktic\Faq\SiteEntries\Models\SiteEntries;
use Marktic\Faq\Sites\Models\Sites;
use Marktic\Faq\Utility\FaqModels;
use Nip\Records\RecordManager;

trait HasFaqModels
{
    /**
     */
    public static function faqSites(): Sites|RecordManager
    {
        return FaqModels::sites();
    }

    /**
     * @return Entries|RecordManager
     */
    public static function faqEntries(): Entries|RecordManager
    {
        return FaqModels::entries();
    }

    public static function faqSiteCategories(): SiteCategories|RecordManager
    {
        return FaqModels::siteCategories();
    }

    public static function faqSiteEntries(): SiteEntries|RecordManager
    {
        return FaqModels::siteEntries();
    }

}
<?php

declare(strict_types=1);

namespace Marktic\Faq\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Faq\FaqServiceProvider;
use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\SiteCategories\Models\SiteCategories;
use Marktic\Faq\SiteEntries\Models\SiteEntries;
use Marktic\Faq\Sites\Models\Sites;
use Nip\Records\RecordManager;

/**
 * Class FaqModels.
 */
class FaqModels extends ModelFinder
{
    public const ENTRIES = 'entries';
    public const SITES = 'sites';
    public const SITE_CATEGORIES = 'categories';
    public const SITE_ENTRIES = 'site_entries';

    public static function entries(): Entries|RecordManager
    {
        return static::getModels(self::ENTRIES, Entries::class);
    }

    public static function entriesClass(): string
    {
        return static::getModelsClass(self::ENTRIES, Entries::class);
    }

    public static function sites(): Sites|RecordManager
    {
        return static::getModels(self::SITES, Sites::class);
    }

    public static function sitesClass(): string
    {
        return static::getModelsClass(self::SITES, Sites::class);
    }

    public static function siteCategories(): SiteCategories|RecordManager
    {
        return static::getModels(self::SITE_CATEGORIES, SiteCategories::class);
    }

    public static function siteCategoriesClass(): string
    {
        return static::getModelsClass(self::SITE_CATEGORIES, SiteCategories::class);
    }

    public static function siteEntries(): SiteEntries|RecordManager
    {
        return static::getModels(self::SITE_ENTRIES, SiteEntries::class);
    }

    public static function siteEntriesClass(): string
    {
        return static::getModelsClass(self::SITE_ENTRIES, SiteEntries::class);
    }

    protected static function packageName(): string
    {
        return FaqServiceProvider::NAME;
    }
}

<?php

declare(strict_types=1);

namespace Marktic\Faq\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Faq\FaqServiceProvider;
use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\Sites\Models\Sites;
use Nip\Records\RecordManager;

/**
 * Class FaqModels.
 */
class FaqModels extends ModelFinder
{
    public const ENTRIES = 'entries';
    public const SITES = 'sites';

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

    protected static function packageName(): string
    {
        return FaqServiceProvider::NAME;
    }
}

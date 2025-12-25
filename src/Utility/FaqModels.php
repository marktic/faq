<?php

declare(strict_types=1);

namespace Marktic\Faq\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Faq\FaqServiceProvider;
use Marktic\Faq\Sites\Models\Sites;
use Nip\Records\RecordManager;

/**
 * Class FaqModels.
 */
class FaqModels extends ModelFinder
{
    public const SITES = 'sites';

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

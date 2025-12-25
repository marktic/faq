<?php

declare(strict_types=1);

namespace Marktic\Faq\Utility;

use ByTIC\PackageBase\Utility\ModelFinder;
use Marktic\Faq\FaqServiceProvider;

/**
 * Class BasketModels.
 */
class BasketModels extends ModelFinder
{


    protected static function packageName(): string
    {
        return FaqServiceProvider::NAME;
    }
}

<?php

declare(strict_types=1);

namespace Marktic\Faq;

use ByTIC\PackageBase\BaseBootableServiceProvider;
use Marktic\Faq\Utility\BasketModels;
use Marktic\Faq\Utility\PackageConfig;

/**
 * Class FaqServiceProvider.
 */
class FaqServiceProvider extends BaseBootableServiceProvider
{
    public const NAME = 'mkt_faq';

    public function migrations(): ?string
    {
        if (PackageConfig::shouldRunMigrations()) {
            return dirname(__DIR__) . '/database/migrations/';
        }

        return null;
    }

    protected function translationsPath(): string
    {
        return __DIR__ . '/resources/lang/';
    }

    protected function registerCommands()
    {
//        $this->commands(
//        );
    }
    public function boot(): void
    {
        parent::boot();
//        BasketModels::carts();
//        BasketModels::cartItems();
//        BasketModels::orders();
//        BasketModels::orderItems();
    }
}

<?php

declare(strict_types=1);

namespace Marktic\Faq\Categories\Models;

use Marktic\Faq\Base\Models\Traits\BaseRepositoryTrait;
use Marktic\Faq\Categories\Models\Filters\FilterManager;
use Marktic\Faq\Utility\FaqModels;
use Marktic\Faq\Utility\PackageConfig;

/**
 * Trait CategoryRepositoryTrait
 */
trait CategoryRepositoryTrait
{
    public const TABLE = 'mkt_faq_site_categories';
    public const CONTROLLER = 'mkt_faq-site_categories';

    use BaseRepositoryTrait;

    protected function initRelationsCms(): void
    {
        parent::initRelationsCms();
        $this->belongsTo('Site', ['class' => FaqModels::sitesClass(), 'fk' => 'site_id']);
    }

    protected function generateFilterManagerDefaultClass(): string
    {
        return FilterManager::class;
    }

    protected function generateTable()
    {
        return PackageConfig::tableName(FaqModels::CATEGORIES);
    }
}

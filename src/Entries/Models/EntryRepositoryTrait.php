<?php

declare(strict_types=1);

namespace Marktic\Faq\Entries\Models;

use Marktic\Faq\Base\Models\HasTenant\HasTenantRepository;
use Marktic\Faq\Base\Models\Traits\BaseRepositoryTrait;
use Marktic\Faq\Entries\Models\Filters\FilterManager;
use Marktic\Faq\Utility\FaqModels;
use Marktic\Faq\Utility\PackageConfig;

trait EntryRepositoryTrait
{
    public const TABLE = 'mkt_faq_entries';
    public const CONTROLLER = 'mkt_faq-entries';

    use BaseRepositoryTrait, HasTenantRepository {
        HasTenantRepository::initRelations insteadof BaseRepositoryTrait;
    }

    protected function initRelationsCms(): void
    {
        $this->initRelationsCmsTenant();
    }

    protected function generateFilterManagerDefaultClass(): string
    {
        return FilterManager::class;
    }

    protected function generateTable()
    {
        return PackageConfig::tableName(FaqModels::ENTRIES);
    }
}

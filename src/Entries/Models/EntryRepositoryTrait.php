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

    public const RELATION_SITE_ENTRIES = 'FaqSiteEntries';

    use BaseRepositoryTrait, HasTenantRepository {
        HasTenantRepository::initRelations insteadof BaseRepositoryTrait;
    }

    protected function initRelationsFaq(): void
    {
        $this->initRelationsFaqTenant();
        $this->initRelationsFaqSiteEntries();
    }

    protected function initRelationsFaqSiteEntries(): void
    {
        $this->hasMany(
            self::RELATION_SITE_ENTRIES,
            ['class' => FaqModels::siteEntriesClass(), 'fk' => 'entry_id']
        );
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

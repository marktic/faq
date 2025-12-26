<?php

declare(strict_types=1);

namespace Marktic\Faq\Sites\Models;

use Marktic\Faq\Base\Models\HasTenant\HasTenantRepository;
use Marktic\Faq\Base\Models\Traits\BaseRepositoryTrait;
use Marktic\Faq\Sites\Models\Filters\FilterManager;
use Marktic\Faq\Utility\FaqModels;
use Marktic\Faq\Utility\PackageConfig;

trait SiteRepositoryTrait
{
    public const TABLE = 'mkt_faq_sites';
    public const CONTROLLER = 'mkt_faq-sites';

    public const RELATION_SITE_CATEGORIES = 'FaqSiteCategories';
    public const RELATION_SITE_ENTRIES = 'FaqSiteEntries';

    use BaseRepositoryTrait, HasTenantRepository {
        HasTenantRepository::initRelations insteadof BaseRepositoryTrait;
    }

    protected function initRelationsFaq(): void
    {
        $this->initRelationsFaqTenant();
        $this->initRelationsFaqSiteCategories();
        $this->initRelationsFaqSiteEntries();
    }

    protected function initRelationsFaqSiteCategories(): void
    {
        $this->hasMany(
            self::RELATION_SITE_CATEGORIES,
            ['class' => FaqModels::siteCategoriesClass(), 'fk' => 'site_id']
        );
    }

    protected function initRelationsFaqSiteEntries(): void
    {
        $this->hasMany(
            self::RELATION_SITE_ENTRIES,
            ['class' => FaqModels::siteEntriesClass(), 'fk' => 'site_id']
        );
    }

    protected function generateFilterManagerDefaultClass(): string
    {
        return FilterManager::class;
    }

    protected function generateTable()
    {
        return PackageConfig::tableName(FaqModels::SITES);
    }
}

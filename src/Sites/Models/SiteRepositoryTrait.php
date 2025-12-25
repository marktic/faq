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

    use BaseRepositoryTrait, HasTenantRepository {
        HasTenantRepository::initRelations insteadof BaseRepositoryTrait;
    }

    protected function initRelationsCms(): void
    {
        $this->initRelationsCmsTenant();
        $this->hasMany('Categories', ['class' => FaqModels::categoriesClass(), 'fk' => 'site_id']);
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

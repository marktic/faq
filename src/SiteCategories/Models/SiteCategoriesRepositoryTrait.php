<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteCategories\Models;

use Marktic\Faq\Base\Models\Traits\BaseRepositoryTrait;
use Marktic\Faq\SiteCategories\Models\Filters\FilterManager;
use Marktic\Faq\Sites\ModelsRelated\HasFaqSite\HasFaqSiteRepositoryTrait;
use Marktic\Faq\Utility\FaqModels;
use Marktic\Faq\Utility\PackageConfig;

/**
 * Trait CategoryRepositoryTrait
 */
trait SiteCategoriesRepositoryTrait
{
    public const TABLE = 'mkt_faq_site_categories';
    public const CONTROLLER = 'mkt_faq-site_categories';

    use BaseRepositoryTrait, HasFaqSiteRepositoryTrait {
        HasFaqSiteRepositoryTrait::initRelations insteadof BaseRepositoryTrait;
        HasFaqSiteRepositoryTrait::initRelationsFaq insteadof BaseRepositoryTrait;
    }

    protected function injectParams(&$params = [])
    {
        parent::injectParams($params);
        $this->injectParamsOrder($params);
    }

    protected function injectParamsOrder(&$params = []): void
    {
        $params['order'][] = ['position', 'ASC'];
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

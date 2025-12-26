<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteEntries\Models;

use Marktic\Faq\Base\Models\Traits\BaseRepositoryTrait;
use Marktic\Faq\SiteEntries\Models\Filters\FilterManager;
use Marktic\Faq\Sites\ModelsRelated\HasFaqSite\HasFaqSiteRepositoryTrait;
use Marktic\Faq\Utility\FaqModels;
use Marktic\Faq\Utility\PackageConfig;

/**
 * Trait SiteEntriesRepositoryTrait
 */
trait SiteEntriesRepositoryTrait
{
    public const TABLE = 'mkt_faq_site_entries';
    public const CONTROLLER = 'mkt_faq-site_entries';

    use BaseRepositoryTrait, HasFaqSiteRepositoryTrait {
        HasFaqSiteRepositoryTrait::initRelations insteadof BaseRepositoryTrait;
        HasFaqSiteRepositoryTrait::initRelationsFaq insteadof BaseRepositoryTrait;
    }

    protected function initRelationsFaq(): void
    {
        $this->initRelationsFaqSite();
        $this->belongsTo('Category', ['class' => FaqModels::siteCategoriesClass(), 'fk' => 'category_id']);
        $this->belongsTo('Entry', ['class' => FaqModels::entriesClass(), 'fk' => 'entry_id']);
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
        return PackageConfig::tableName(FaqModels::SITE_ENTRIES);
    }
}

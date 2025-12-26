<?php

namespace Marktic\Faq\Sites\ModelsRelated\HasFaqSite;


use Marktic\Faq\Utility\FaqModels;

trait HasFaqSiteRepositoryTrait
{
    public const string RELATION_FAQ_SITE = 'FaqSite';

    protected function initRelations(): void
    {
        parent::initRelations();
        $this->initRelationsFaq();
    }

    protected function initRelationsFaq(): void
    {
        $this->initRelationsFaqSite();
    }

    /**
     * @inheritDoc
     */
    protected function initRelationsFaqSite()
    {
        $this->belongsTo(
            self::RELATION_FAQ_SITE,
            ['class' => FaqModels::sitesClass(), 'fk' => 'site_id']
        );
    }
}

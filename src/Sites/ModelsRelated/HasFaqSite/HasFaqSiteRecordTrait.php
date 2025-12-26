<?php

namespace Marktic\Faq\Sites\ModelsRelated\HasFaqSite;


use Marktic\Faq\SiteCategories\Models\SiteCategories;
use Marktic\Faq\Sites\Models\Site;

/**
 * @method Site getCmsPageSection()
 */
trait HasFaqSiteRecordTrait
{
    public int|string|null $site_id = null;

    public function populateFromSite(Site $record)
    {
        $this->site_id = $record->id;
        $this->getRelation(SiteCategories::RELATION_FAQ_SITE)->setResults($record);
        return $this;
    }

    public function getCmsPage()
    {
        return $this->getCmsPageSection()->getCmsPage();
    }
}

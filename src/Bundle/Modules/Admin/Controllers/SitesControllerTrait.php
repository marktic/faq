<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasTenantControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Sites\DetailsForm;
use Marktic\Faq\Entries\Actions\Find\GetFaqEntriesByTenant;
use Marktic\Faq\SiteCategories\Models\SiteCategories;
use Marktic\Faq\Sites\Models\Site;

/**
 * @method Site getModelFromRequest()
 */
trait SitesControllerTrait
{
    use HasTenantControllerTrait;

    public function addNewModel()
    {
        /** @var Site $record */
        $record = parent::addNewModel();

        $page = $this->getFaqTenantFromRequest();
        $record->populateFromTenant($page);
        return $record;
    }

    public function view()
    {
        parent::view();

        $item = $this->getModelFromRequest();

        $faqEntries = GetFaqEntriesByTenant::for($this->getFaqTenantFromRequest())->fetch();

        $siteCategories = $item->getFaqSiteCategories();
        $siteEntries = $siteCategories->loadRelation(SiteCategories::RELATION_SITE_ENTRIES);

        $this->payload()->with(
            [
                'faqEntries' => $faqEntries,
                'faqSiteCategories' => $siteCategories,
                'faqSiteEntries' => $siteEntries,
            ]
        );
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
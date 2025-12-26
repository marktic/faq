<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasTenantControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Sites\DetailsForm;
use Marktic\Faq\Entries\Actions\Find\GetFaqEntriesByTenant;
use Marktic\Faq\Sites\Models\Site;

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
        $siteCategories = $item->getSiteCategories();
        $faqEntries = GetFaqEntriesByTenant::for($this->getFaqTenantFromRequest())->fetch();

        $this->payload()->with(
            [
                'faqSiteCategories' => $siteCategories,
                'faqEntries' => $faqEntries,
            ]
        );
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
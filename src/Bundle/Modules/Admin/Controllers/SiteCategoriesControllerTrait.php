<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasFaqSiteControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Entries\DetailsForm;
use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\SiteCategories\Models\SiteCategory;

trait SiteCategoriesControllerTrait
{
    use HasFaqSiteControllerTrait;

    public function addNewModel()
    {
        /** @var SiteCategory $record */
        $record = parent::addNewModel();

        $page = $this->getFaqSiteFromRequest();
        $record->populateFromSite($page);
        return $record;
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
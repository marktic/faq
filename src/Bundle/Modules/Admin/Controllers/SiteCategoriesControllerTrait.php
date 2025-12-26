<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Cms\PageSections\Models\PageSection;
use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasFaqSiteControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\SiteCategories\DetailsForm;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Sites\Models\Site;

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

    /**
     * @param $type
     * @param SiteCategory $item
     * @return void
     */
    protected function afterActionRedirect($type, $item): void
    {
        $page = $item->getFaqSite();

        $this->setAfterUrlFlash(
            $page->getURL(),
            $page->getManager()->getController(),
            ['after-' . $type]
        );

        parent::afterActionRedirect($type, $item);
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}

<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Forms\SiteCategories\DetailsForm;
use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\SiteEntries\Models\SiteEntry;
use Marktic\Faq\Utility\FaqModels;

trait SiteEntriesControllerTrait
{
    public function add()
    {
        /** @var SiteEntry $record */
        $record = $this->addNewModel();

        /** @var SiteCategory $siteCategory */
        $siteCategory = $this->checkForeignModelFromRequest(
            FaqModels::siteCategories()->getController(), ['category_id', 'id']
        );
        $record->populateFromSite($siteCategory->getFaqSite());
        $record->populateFromSiteCategory($siteCategory);

        /** @var Entry $entry */
        $entry = $this->checkForeignModelFromRequest(
            FaqModels::entries()->getController(), ['entry_id', 'id']
        );
        $record->populateFromEntry($entry);
        $record->setPosition(999);
        $record->save();

        $this->afterActionRedirect('add', $record);
        return $record;
    }

    public function order(): void
    {
        $idEntries = $this->getRequest()->get('order');
        $idEntries = explode(',', $idEntries);

        /** @var SiteCategory $siteCategory */
        $siteCategory = $this->checkForeignModelFromRequest(
            FaqModels::siteCategories()->getController(), ['category_id', 'id']
        );
        $records = $siteCategory->getFaqSiteEntries();
        $records = $records->keyBy('id');

        if (count($records) < 1) {
            $this->Async()->sendMessage('No records found', 'error');
        }

        foreach ($idEntries as $pos => $idEntry) {
            $record = $records[$idEntry] ?? null;
            if ($record) {
                $record->position = $pos + 1;
                $record->update();
            }
        }

        $this->Async()->sendMessage('Entries reordered');
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

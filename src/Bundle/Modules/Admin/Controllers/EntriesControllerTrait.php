<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasTenantControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Entries\DetailsForm;
use Marktic\Faq\Entries\Models\Entry;

trait EntriesControllerTrait
{
    use HasTenantControllerTrait;

    public function addNewModel()
    {
        /** @var Entry $record */
        $record = parent::addNewModel();

        $page = $this->getFaqTenantFromRequest();
        $record->populateFromTenant($page);
        return $record;
    }

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasTenantControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Entries\DetailsForm;

trait EntriesControllerTrait
{
    use HasTenantControllerTrait;

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
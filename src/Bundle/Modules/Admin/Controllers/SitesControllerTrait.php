<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours\HasTenantControllerTrait;
use Marktic\Faq\Bundle\Modules\Admin\Forms\Sites\DetailsForm;

trait SitesControllerTrait
{
    use HasTenantControllerTrait;

    protected function getModelFormClass($model, $action = null): string
    {
        return DetailsForm::class;
    }
}
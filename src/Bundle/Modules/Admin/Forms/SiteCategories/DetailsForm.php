<?php

declare(strict_types=1);

namespace  Marktic\Faq\Bundle\Modules\Admin\Forms\SiteCategories;

use Marktic\Faq\Bundle\Library\Form\FormModel;
use Marktic\Faq\Sites\Models\Site;

/**
 * @method Site getModel()
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->initializeTitle();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeTitle(): void
    {
        $this->addInput('title', translator()->trans('title'), true);
    }
}

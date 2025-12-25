<?php

declare(strict_types=1);

namespace  Marktic\Faq\Bundle\Modules\Admin\Forms\Sites;

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

        $this->setAttrib('id', 'mkt-faq-site-form');

        $this->initializeName();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeName()
    {
        $this->addInput('name', translator()->trans('name'), true);
    }
}

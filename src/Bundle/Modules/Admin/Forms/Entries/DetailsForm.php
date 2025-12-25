<?php

declare(strict_types=1);

namespace  Marktic\Faq\Bundle\Modules\Admin\Forms\Entries;

use Marktic\Faq\Bundle\Library\Form\FormModel;
use Marktic\Faq\Entries\Models\Entry;

/**
 * @method Entry getModel()
 */
class DetailsForm extends FormModel
{
    public function initialize()
    {
        parent::initialize();

        $this->setAttrib('id', 'mkt-faq-entries-form');

        $this->initializeTitle();
        $this->initializeContent();

        $this->addButton('save', translator()->trans('submit'));
    }

    protected function initializeTitle(): void
    {
        $this->addInput('title', translator()->trans('title'), true);
    }

    protected function initializeContent(): void
    {
        $this->addTextSimpleEditor('content', translator()->trans('content'), true);
    }
}

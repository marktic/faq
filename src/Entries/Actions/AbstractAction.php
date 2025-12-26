<?php

namespace Marktic\Faq\Entries\Actions;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\Entities\HasRepository;
use Marktic\Faq\Entries\Models\Entries;
use Marktic\Faq\Utility\FaqModels;
use Nip\Records\AbstractModels\RecordManager;

/**
 * @method Entries getRepository
 */
abstract class AbstractAction extends Action
{
    use HasRepository;

    protected function generateRepository(): RecordManager
    {
        return FaqModels::entries();
    }
}
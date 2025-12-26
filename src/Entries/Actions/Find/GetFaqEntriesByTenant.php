<?php

declare(strict_types=1);

namespace Marktic\Faq\Entries\Actions\Find;

use Bytic\Actions\Behaviours\Entities\FindRecords;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;
use Marktic\Faq\Base\Actions\Find\HasTenantTrait;
use Marktic\Faq\Entries\Actions\AbstractAction;
use Nip\Records\Record;

class GetFaqEntriesByTenant extends AbstractAction
{
    use HasSubject;
    use FindRecords, HasTenantTrait {
        HasTenantTrait::findParams insteadof FindRecords;
    }

    function getTenant(): Record
    {
        return $this->getSubject();
    }
}

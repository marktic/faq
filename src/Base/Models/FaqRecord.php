<?php

declare(strict_types=1);

namespace Marktic\Faq\Base\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Nip\Records\Record;

/**
 * Trait FaqRecordTrait.
 */
class FaqRecord extends Record
{
    use HasFormsRecordTrait;
}

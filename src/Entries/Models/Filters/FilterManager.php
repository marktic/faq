<?php

declare(strict_types=1);

namespace Marktic\Faq\Entries\Models\Filters;

use Marktic\Faq\Base\Models\Filters\TenantFilter;

/**
 * Class FilterManager
 */
class FilterManager extends \Nip\Records\Filters\FilterManager
{
    public function init()
    {
        parent::init();

        $this->addFilter(
            new TenantFilter()
        );
    }
}

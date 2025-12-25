<?php

namespace Marktic\Faq\Sites\Models\Filters;

use Marktic\Faq\Base\Models\Filters\TenantFilter;

/**
 * Class FilterManager
 * @package KM42\Common\Models\Events\Newsletters\Filters
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

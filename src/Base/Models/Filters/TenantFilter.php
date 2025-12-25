<?php

namespace Marktic\Faq\Base\Models\Filters;

use Nip\Database\Query\Select as SelectQuery;
use Nip\Records\Filters\Column\AbstractFilter;
use Nip\Records\Filters\Column\FilterInterface;
use Nip\Records\Record;

/**
 * Class TenantFilter
 * @package Marktic\Faq\Base\Models\Filters
 */
class TenantFilter extends AbstractFilter implements FilterInterface
{

    /**
     * @param SelectQuery $query
     */
    public function filterQuery($query)
    {
        $tenant = $this->getTenantRecord();

        $query->where("tenant = ?", $tenant->getManager()->getMorphName());
        $query->where('tenant_id = ?', $tenant->getId());
    }

    /**
     * @return Record
     */
    protected function getTenantRecord()
    {
        $record = $this->getValue();

        return $record;
    }
}

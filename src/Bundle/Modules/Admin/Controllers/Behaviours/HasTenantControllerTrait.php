<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Faq\Base\Models\Filters\TenantFilter;
use Nip\Records\Filters\Sessions\Session;

trait HasTenantControllerTrait
{
    public function tenant()
    {
        $this->doModelsListing();
    }

    protected function getRequestFilters($session = null)
    {
        $request = $this->getRequest();
        $request->setAttribute(TenantFilter::NAME, $this->getFaqTenantFromRequest());
        /** @var Session $filter */
        return parent::getRequestFilters($session);
    }

    /**
     * @return mixed
     */
    protected function getFaqTenantFromRequest()
    {
        $tenantName = $this->getRequest()->get('tenant');
        return $this->checkForeignModelFromRequest($tenantName, ['tenant_id', 'id']);
    }
}

<?php

namespace Marktic\Faq\Base\Models\HasTenant;

/**
 * Trait HasTenantRepository
 * @package Paytic\Payments\Models\AbstractModels\HasTenant
 */
trait HasTenantRepository
{
    public function initRelations()
    {
        parent::initRelations();
        $this->initRelationsFaq();
    }

    protected function initRelationsFaq(): void
    {
        $this->initRelationsFaqTenant();
    }

    protected function initRelationsFaqTenant(): void
    {
        $this->morphTo('Tenant', ['morphPrefix' => 'tenant', 'morphTypeField' => 'tenant']);
    }
}

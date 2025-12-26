<?php

declare(strict_types=1);

namespace Marktic\Faq\Sites\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Marktic\Faq\Base\Models\HasMetadata\RecordHasMetadataTrait;
use Marktic\Faq\Base\Models\HasTenant\HasTenantRecord;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Sites\Dto\SiteMetadata;
use Nip\Records\Collections\Associated;
use Nip\Records\Traits\HasUuid\HasUuidRecordTrait;

/**
 *
 * @property SiteMetadata $metadata
 * @method SiteMetadata getMetadata
 * @method SiteCategory[]|Associated getFaqSiteCategories()
 */
trait SiteTrait
{
    use HasTenantRecord;
    use TimestampableTrait;
    use HasUuidRecordTrait;
    use HasFormsRecordTrait;
    use RecordHasMetadataTrait;

    protected string $name = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    protected function getMetadataClass(): ?string
    {
        return SiteMetadata::class;
    }
}

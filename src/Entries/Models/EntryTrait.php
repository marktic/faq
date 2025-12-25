<?php

declare(strict_types=1);

namespace Marktic\Faq\Entries\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Marktic\Faq\Base\Models\HasTenant\HasTenantRecord;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;

trait EntryTrait
{
    use HasTenantRecord;
    use TimestampableTrait;
    use HasFormsRecordTrait;

    protected string $title = '';
    protected string $content = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
}

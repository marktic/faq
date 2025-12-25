<?php

declare(strict_types=1);

namespace Marktic\Faq\Categories\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;
use Marktic\Faq\Utility\FaqModels;
use Nip\Records\Record;

/**
 * Trait CategoryTrait
 * @property int $site_id
 * @property string $title
 * @property string $slug
 * @property int $position
 *
 * @method Record getSite()
 */
trait CategoryTrait
{
    use TimestampableTrait;
    use HasFormsRecordTrait;

    public function getTitle(): string
    {
        return (string) $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getSlug(): string
    {
        return (string) $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getPosition(): int
    {
        return (int) $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }
}

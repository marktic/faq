<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteCategories\Models;

use ByTIC\Records\Behaviors\HasForms\HasFormsRecordTrait;
use Marktic\Faq\Base\Models\HasPosition\HasPositionRecordTrait;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;
use Marktic\Faq\Sites\ModelsRelated\HasFaqSite\HasFaqSiteRecordTrait;
use Nip\Records\Record;

/**
 * Trait SiteCategoryTrait
 * @property int $site_id
 * @property string $title
 *
 * @method Record getSite()
 */
trait SiteCategoryTrait
{
    use TimestampableTrait;
    use HasFormsRecordTrait;
    use HasFaqSiteRecordTrait;
    use HasPositionRecordTrait;

    protected ?string $slug = null;

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

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

}

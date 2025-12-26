<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteEntries\Models;

use Marktic\Faq\Base\Models\HasPosition\HasPositionRecordTrait;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;
use Marktic\Faq\Entries\Models\Entry;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Marktic\Faq\Sites\Models\Site;
use Marktic\Faq\Sites\ModelsRelated\HasFaqSite\HasFaqSiteRecordTrait;
use Nip\Records\Record;

/**
 * Trait SiteEntryTrait
 * @property int $site_id
 * @property int $category_id
 * @property int $entry_id
 * @property int $position
 *
 * @method Site getFaqSite()
 * @method SiteCategory getFaqCategory()
 * @method Entry getFaqEntry()
 */
trait SiteEntryTrait
{
    use TimestampableTrait;
    use HasFaqSiteRecordTrait;
    use HasPositionRecordTrait;

    public int|string|null $category_id = null;
    public int|string|null $entry_id = null;

    public function populateFromSiteCategory(SiteCategory $record): static
    {
        $this->category_id = $record->id;
        $this->getRelation(SiteEntries::RELATION_FAQ_CATEGORY)->setResults($record);
        return $this;
    }

    public function populateFromEntry(Entry $record): static
    {
        $this->entry_id = $record->id;
        $this->getRelation(SiteEntries::RELATION_FAQ_ENTRY)->setResults($record);
        return $this;
    }
}

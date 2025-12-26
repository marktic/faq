<?php

declare(strict_types=1);

namespace Marktic\Faq\SiteEntries\Models;

use Marktic\Faq\Base\Models\HasPosition\HasPositionRecordTrait;
use Marktic\Faq\Base\Models\Timestampable\TimestampableTrait;
use Marktic\Faq\Sites\ModelsRelated\HasFaqSite\HasFaqSiteRecordTrait;
use Nip\Records\Record;

/**
 * Trait SiteEntryTrait
 * @property int $site_id
 * @property int $category_id
 * @property int $entry_id
 * @property int $position
 *
 * @method Record getSite()
 * @method Record getCategory()
 * @method Record getEntry()
 */
trait SiteEntryTrait
{
    use TimestampableTrait;
    use HasFaqSiteRecordTrait;
    use HasPositionRecordTrait;

}

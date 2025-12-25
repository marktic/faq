<?php

use Marktic\Faq\Sites\Models\Site;

/** @var Site $item */
$item = $item ?? null;
?>
<tr>
    <td>
        <a class="event-link" href="<?= $item->getURL(); ?>" title="">
            <?= $item->getName(); ?>
        </a>
    </td>
    <td>
    </td>
</tr>
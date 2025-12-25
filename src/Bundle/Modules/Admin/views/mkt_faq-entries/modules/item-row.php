<?php

use Marktic\Faq\Entries\Models\Entry;

/** @var Entry $item */
$item = $item ?? null;
?>
<tr>
    <td>
        <a class="event-link" href="<?= $item->getURL(); ?>" title="">
            <?= $item->getName(); ?>
        </a>
    </td>
    <td>
        <?= $item->getLead(); ?>
    </td>
</tr>
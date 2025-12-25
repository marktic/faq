<?php

use Marktic\Faq\Entries\Models\Entry;

/** @var Entry $item */
$item = $item ?? $this->item;
?>
<table class="details table table-striped">
    <tbody>
    <tr>
        <td class="name">
            <?= translator()->trans('name'); ?>:
        </td>
        <td class="value">
            <?= $item->getName(); ?>
        </td>
    </tr>
    <tr>
        <td class="name">
            <?= translator()->trans('lead'); ?>:
        </td>
        <td class="value">
            <?= $item->getLead(); ?>
        </td>
    </tr>
    </tbody>
</table>
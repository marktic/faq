<?php
/** @var \Marktic\Faq\Sites\Models\Site $item */

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
    </tbody>
</table>
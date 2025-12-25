<?php

use ByTIC\AdminBase\Screen\Actions\Dto\ButtonAction;
use ByTIC\AdminBase\Widgets\Cards\Card;
use ByTIC\Icons\Icons;

$card = Card::make()
    ->withTitle(translator()->trans('details'))
    ->withIcon(Icons::list_ul())
    ->addHeaderTool(
        ButtonAction::make()
            ->setUrl($this->item->getEditURL())
            ->addHtmlClass('btn-xs')
            ->setLabel(translator()->trans('edit'))
    )
//    ->themeSuccess()
    ->wrapBody(false)
    ->withContent($this->load('/mkt_faq-entries/modules/item/details', [], true));

echo $card;

<?php

use ByTIC\AdminBase\Screen\Actions\Dto\ButtonAction;
use ByTIC\AdminBase\Widgets\Cards\Card;
use ByTIC\Icons\Icons;

$card = Card::make()
    ->withTitle(translator()->trans('description'))
    ->withIcon(Icons::list_ul())
    ->addHeaderTool(
        ButtonAction::make()
            ->setUrl($this->item->getEditURL())
            ->addHtmlClass('btn-xs')
            ->setLabel(translator()->trans('edit'))
    )
//    ->themeSuccess()
    ->withContent($this->item->getContent());

echo $card;

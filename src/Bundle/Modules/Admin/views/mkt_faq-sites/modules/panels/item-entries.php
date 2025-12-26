<?php

use ByTIC\AdminBase\Screen\Actions\Dto\ButtonAction;
use ByTIC\AdminBase\Widgets\Cards\Card;
use ByTIC\Icons\Icons;
use Marktic\Faq\Utility\FaqModels;

$entriesRepository = FaqModels::entries();

$card = Card::make()
    ->withTitle(translator()->trans('details'))
    ->withIcon(Icons::list_ul())
    ->addHeaderTool(
        ButtonAction::make()
            ->setUrl($entriesRepository->compileURL('add'))
            ->addHtmlClass('btn-xs')
            ->setLabel($entriesRepository->getLabel('add'))
    )
    ->wrapBody(false)
    ->withContent($this->load('/mkt_faq-entries/modules/lists/site', [], true));

echo $card;

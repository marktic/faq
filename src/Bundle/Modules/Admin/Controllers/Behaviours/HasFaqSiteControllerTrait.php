<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers\Behaviours;

use Marktic\Faq\Sites\Models\Site;
use Marktic\Faq\Utility\FaqModels;

trait HasFaqSiteControllerTrait
{
    public function bootHasFaqSiteControllerTrait()
    {
        $this->onParseRequest(function () {
            if (!$this->getRequest()->has('site_id')) {
                return;
            }

            $model = FaqModels::sites()->getController();
            $this->checkForeignModelFromRequest($model, ['site_id', 'id']);
        });
    }

    /**
     * @return Site
     */
    protected function getFaqSiteFromRequest()
    {
        $model = FaqModels::sites()->getController();
        return $this->getForeignModelFromRequest($model);

    }
}
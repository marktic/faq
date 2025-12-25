<?php

namespace Marktic\Faq\Bundle\Modules\Admin\Controllers;

use Marktic\Faq\Utility\ViewHelper;

trait AbstractFaqControllerTrait
{
    protected function bootAbstractFaqControllerTrait()
    {
        $this->after(
            function () {
                $this->registerFaqViewPaths();
            }
        );
    }

    protected function registerFaqViewPaths()
    {
        $view = $this->getView();
        ViewHelper::registerAdminPaths($view);
    }
}


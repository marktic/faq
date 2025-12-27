<?php

namespace Marktic\Faq\Utility;

use Nip\View\View;

/**
 * Class ViewHelper.
 */
class ViewHelper
{
    public const NAMESPACE = 'MktFaq';
    /**
     * @param View $view
     */
    public static function registerAdminPaths(View $view)
    {
        $view->addPath(PathsHelpers::viewsAdmin(), self::NAMESPACE);
        $view->addPath(PathsHelpers::viewsAdmin());
    }

    public static function registerFrontendPaths(View $view): void
    {
        $view->addPath(PathsHelpers::viewsFrontend(), self::NAMESPACE);
        $view->addPath(PathsHelpers::viewsFrontend());
    }
}

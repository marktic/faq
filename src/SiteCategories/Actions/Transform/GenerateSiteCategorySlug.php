<?php

namespace Marktic\Faq\SiteCategories\Actions\Transform;

use Bytic\Actions\Action;
use Bytic\Actions\Behaviours\HasSubject\HasSubject;
use Marktic\Faq\SiteCategories\Models\SiteCategory;
use Nip\Utility\Str;

/**
 * @method SiteCategory getSubject()
 */
class GenerateSiteCategorySlug extends Action
{
    use HasSubject;

    public function checkOrSet(): void
    {
        $slug = $this->getSubject()->getSlug();
        $slug = !empty($slug) ? Str::slug($slug) : $this->generateSlug();
        $this->getSubject()->setSlug($slug);
    }

    public function generateSlug(): string
    {
        $pageName = $this->getSubject()->getTitle();
        $slug = Str::slug($pageName, '-');
        return $slug;
    }
}

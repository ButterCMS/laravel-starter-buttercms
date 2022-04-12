<?php

namespace App\Http\Controllers;

use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(
        private ButterCMS $butterCMS
    ) {
    }

    public function showPage(string $type, string $pageSlug): View
    {
        $page = $this->butterCMS->fetchPage($type, $pageSlug, [
            'preview' => app('isPreview')
        ]);

        return view('page', [
            'pageSeo' => $page->getFields()['seo'],
            'pageBody' => $page->getFields()['body'],
        ]);
    }

    public function showLandingPage(): View
    {
        return $this->showPage('landing-page', 'landing-page-with-components');
    }

    public function showLandingPageSlug(string $pageSlug): View
    {
        return $this->showPage('landing-page', $pageSlug);
    }
}

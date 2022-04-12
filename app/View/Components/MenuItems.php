<?php

namespace App\View\Components;

use ButterCMS\ButterCMS;
use Illuminate\View\Component;

class MenuItems extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        private ButterCMS $butterCMS
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $response = $this->butterCMS->fetchContentFields([
            'navigation_menu'
        ], [
            'preview' => app('isPreview'),
        ]);
        return view('components.menu-items', [
            'menuItems' => $response['navigation_menu'][0]['menu_items']
        ]);
    }
}

<?php

namespace App\View\Components\Widget;

use ButterCMS\ButterCMS;
use Illuminate\View\Component;

class Categories extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        private ButterCMS $butterCMS
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = $this->butterCMS->fetchCategories([
            'preview' => app('isPreview'),
        ]);
        return view('components.widget.categories', [
            'categories' => $categories
        ]);
    }
}

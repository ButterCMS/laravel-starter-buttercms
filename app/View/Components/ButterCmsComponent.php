<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButterCmsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        private array $pageArray
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
        return view('components.butter-cms-fields.'.str_replace('_', '-', $this->pageArray['type']), [
            'pageFields' => $this->pageArray['fields']
        ]);
    }
}

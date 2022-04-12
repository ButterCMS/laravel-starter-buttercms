<?php

namespace App\View\Components\Widget;

use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widget.search', [
            'searchTerm' => request()->query->get('q'),
        ]);
    }
}

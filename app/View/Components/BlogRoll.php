<?php

namespace App\View\Components;

use ButterCMS\Model\Post;
use Illuminate\View\Component;

class BlogRoll extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        private Post $post
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
        return view('components.blog-roll', [
            'post' => $this->post
        ]);
    }
}

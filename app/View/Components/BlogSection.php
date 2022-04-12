<?php

namespace App\View\Components;

use ButterCMS\ButterCMS;
use Illuminate\View\Component;

class BlogSection extends Component
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
        $response = $this->butterCMS->fetchPosts([
            'page' => 1,
            'page_size' => 2,
            'preview' => app('isPreview'),
        ]);
        return view('components.blog-section', [
            'posts' => $response->getPosts()
        ]);
    }
}

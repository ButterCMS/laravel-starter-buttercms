<?php

namespace App\View\Components\CommonParts;

use ButterCMS\Model\Post;
use Illuminate\View\Component;

class BlogMetaInfo extends Component
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
        return view('components.common-parts.blog-meta-info', [
            'post' => $this->post
        ]);
    }
}

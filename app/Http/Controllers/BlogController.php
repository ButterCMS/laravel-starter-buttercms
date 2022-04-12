<?php

namespace App\Http\Controllers;

use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function __construct(
        private ButterCMS $butterCMS
    ) {
    }

    public function showDefault(): View
    {
        $posts = $this->butterCMS->fetchPosts([
            'preview' => app('isPreview')
        ]);
        return view('blog-default', [
            'posts' => $posts,
        ]);
    }

    public function showPost(string $postSlug): View
    {
        $post = $this->butterCMS->fetchPost($postSlug);
        return view('blog-post', [
            'post' => $post->getPost(),
        ]);
    }

    public function showPostsByTag(string $tagSlug): View
    {
        $tag = $this->butterCMS->fetchTag($tagSlug);
        $posts = $this->butterCMS->fetchPosts([
            'tag_slug' => $tag->getSlug(),
            'preview' => app('isPreview')
        ]);
        return view('blog-default', [
            'posts' => $posts,
            'tag' => $tag,
        ]);
    }

    public function showPostsByCategory(string $categorySlug): View
    {
        $category = $this->butterCMS->fetchCategory($categorySlug);
        $posts = $this->butterCMS->fetchPosts([
            'category_slug' => $category->getSlug(),
            'preview' => app('isPreview'),
        ]);
        return view('blog-default', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }

    public function showPostsBySearchQuery(Request $request): View
    {
        $searchTerm = $request->query->get('q');
        $posts = $this->butterCMS->searchPosts($searchTerm, [
            'preview' => app('isPreview')
        ]);
        return view('blog-default', [
            'posts' => $posts,
            'searchTerm' => $searchTerm,
        ]);
    }
}

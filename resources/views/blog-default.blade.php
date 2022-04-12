@php
/** @var \ButterCMS\Model\PostResponse $posts */
/** @var \ButterCMS\Model\Post $post */
/** @var \ButterCMS\Model\Category $category */
/** @var \ButterCMS\Model\Tag $tag */
/** @var string $searchTerm */
$homeUrl = url('/');
$blogUrl = url('/blog/');
@endphp

@extends('layout')

@if(!empty($category))
    @section('breadcrumbs')
        <h2>Blog Posts by Category</h2>
        <ul class="breadcrumb-nav">
            <li><a href="{{$homeUrl}}">Home</a></li>
            <li><a href="{{$blogUrl}}">Blog</a></li>
            <li>Category: {{$category->getName()}}</li>
        </ul>
    @endsection
    @php
        /** @var \ButterCMS\Model\Category $category */
        $additionalTitleString = 'category: '.$category->getName();
        $additionalDescriptionString = $additionalTitleString;
    @endphp
@elseif(!empty($tag))
    @section('breadcrumbs')
        <h2>Blog Posts by Tag</h2>
        <ul class="breadcrumb-nav">
            <li><a href="{{$homeUrl}}">Home</a></li>
            <li><a href="{{$blogUrl}}">Blog</a></li>
            <li>Tag: {{$tag->getName()}}</li>
        </ul>
    @endsection
    @php
        /** @var \ButterCMS\Model\Tag $tag */
        $additionalTitleString = 'tag: '.$tag->getName();
        $additionalDescriptionString = $additionalTitleString;
    @endphp
@elseif(!empty($searchTerm))
    @section('breadcrumbs')
        <h2>Search Results</h2>
        <ul class="breadcrumb-nav">
            <li><a href="{{$homeUrl}}">Home</a></li>
            <li><a href="{{$blogUrl}}">Blog</a></li>
            <li>Seach: {{$searchTerm}}</li>
        </ul>
    @endsection
    @php
        /** @var string $searchTerm */
        $additionalTitleString = 'search results for "'.$searchTerm.'"';
        $additionalDescriptionString = 'search results for query: "'.$searchTerm.'"';
    @endphp
@else
    @section('breadcrumbs')
        <h2>All Blog Posts</h2>
        <ul class="breadcrumb-nav">
            <li><a href="{{$homeUrl}}">Home</a></li>
            <li>All blog posts</li>
        </ul>
    @endsection
@endif

@section('metaTitle', 'Sample Blog - '.($additionalTitleString ?? 'All posts'))

@section('metaDescription', 'Sample blog powered by ButterCMS, showing '.($additionalDescriptionString ?? 'all posts'))

@section('content')

<section id="blog-roll" class="blog-roll-nav">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    @yield('breadcrumbs')
                </div>
            </div>
        </div>
    </div>
</section>
@php
    /** @var \ButterCMS\Model\PostResponse $post */
@endphp
<section class="blog-posts">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 blog-roll-cards">
                <div class="row">
                    @if(empty($posts->getPosts()))
                        <p>
                            No blog posts found matching this query.
                        </p>
                    @else
                        @foreach($posts->getPosts() as $post)
                            <x-blog-roll :post="$post" />
                        @endforeach
                    @endif
                </div>
            </div>

            <aside class="col-12 col-lg-4">
                <x-widget.search />
                <x-widget.categories />
            </aside>
        </div>
    </div>
</section>

@endsection
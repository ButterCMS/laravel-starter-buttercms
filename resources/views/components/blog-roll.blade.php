@php
/** @var \ButterCMS\Model\Post $post */
/** @var \ButterCMS\Model\Tag $tag */
$blogSlugUrl = url('/blog/'.$post->getSlug());
@endphp
<div class="col-12 col-lg-6">
    <div class="blog-roll-card">
        <div class="blog-roll-card-meta">
            <h2 class="blog-roll-card-header">
                <a href="{{$blogSlugUrl}}">{{$post->getTitle()}}</a>
            </h2>
            <ul class="blog-roll-card-meta-info">
                <x-common-parts.blog-meta-info :post="$post" />
            </ul>
        </div>
        <div class="single-post-thumbnail">
            @if($post->getFeaturedImage())
                <img src="{{$post->getFeaturedImage()}}" alt="{{$post->getFeaturedImageAlt()}}">
            @endif
        </div>
        <div class="blog-roll-card-body">
            <p>{!! $post->getSummary() !!}</p>
        </div>
        <div class="blog-roll-card-footer text-center">
            <a href="{{$blogSlugUrl}}" class="main-btn btn-hover">Read More</a>
        </div>
    </div>
</div>
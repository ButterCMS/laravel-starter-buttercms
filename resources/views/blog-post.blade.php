@php
/** @var \ButterCMS\Model\Post $post */
@endphp

@extends('layout')

@section('metaTitle', 'Sample Blog - '.$post->getSeoTitle())

@section('metaDescription', $post->getMetaDescription())

@if($post->getFeaturedImage())
    @section('metaImage', $post->getFeaturedImage())
@endif

@section('content')
<section id="blog-header" class="single-post-nav">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>{{$post->getTitle()}}</h2>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/blog/')}}">Blog</a></li>
                        <li>{{$post->getTitle()}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="single-post">
                    <div class="single-post-meta">
                        <h2 class="single-post-header">{{$post->getTitle()}}</h2>
                        <ul class="single-post-meta-info">
                            <x-common-parts.blog-meta-info :post="$post" />
                        </ul>
                    </div>
                    <div class="single-post-thumbnail">
                        @if($post->getFeaturedImage())
                            <img src="{{$post->getFeaturedImage()}}" alt="{{$post->getFeaturedImageAlt()}}">
                        @endif
                    </div>
                    <div class="single-post-body">
                        {!! $post->getBody() !!}
                    </div>
                </div>
            </div>

            <aside class="col-lg-4 col-md-12 col-12">
                <x-widget.search />
                <x-widget.categories />
            </aside>
        </div>
    </div>
    </div>
</section>
@endsection
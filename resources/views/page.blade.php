@extends('layout')

@section('metaTitle', $pageSeo['title'])

@section('metaDescription', $pageSeo['description'])

@section('content')
    @foreach($pageBody as $field)
        <x-butter-cms-component :pageArray="$field" />
    @endforeach

    <x-blog-section />

    <script src="/assets/js/tiny-slider.js"></script>
    <script src="/assets/js/client-slider.js"></script>
    <script src="/assets/js/section-menu.js"></script>
@endsection
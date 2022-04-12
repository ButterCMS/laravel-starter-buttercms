@php
/** @var \ButterCMS\Model\Category[] $categories */
@endphp
<div class="widget categories-widget">
    <h5 class="widget-title">Categories</h5>
    <ul class="categories-list">
        @foreach($categories as $category)
            <li>
                <a href="{{url('/blog/category/'.$category->getSlug())}}">
                    {{$category->getName()}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
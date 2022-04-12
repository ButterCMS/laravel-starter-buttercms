@php
/** @var \ButterCMS\Model\Post $post */
@endphp

<li>
    <a href="#">
        <img src="{{$post->getAuthor()->getProfileImage() ?: '/assets/images/placeholder.png'}}" alt="#">
        {{$post->getAuthor()->getFirstName()}} {{$post->getAuthor()->getLastName()}}
    </a>
</li>
<li>
    <a href="#">
        <i class="lni lni-calendar"></i> {{\Carbon\Carbon::parse($post->getPublished())->format('j M Y')}}
    </a>
</li>
<li>
    @foreach($post->getTags() as $tag)
        <a href="{{url('/blog/tag/'.$tag->getSlug())}}">
            <i class="lni lni-tag"></i> {{$tag->getName()}}
        </a>
    @endforeach
</li>
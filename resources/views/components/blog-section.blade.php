<section id="blog" class="blog-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center">
                    <h2>Latest Blog Posts</h2>
                    <p>Butter also has a built in blog engine which makes it dead simple
                        to launch a new company blog.
                    </p>
                    <p>
                        <a
                                href="{{url('/blog/')}}"
                                class="main-btn btn-hover mt-5">View All Blog Posts
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($posts as $post)
                @php
                    /** @var \ButterCMS\Model\Post $post */
                    $link = url('blog', [
                        'slug' => $post->getSlug()
                    ]);
                @endphp
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-blog">
                        @if(!empty($post->getFeaturedImage()))
                            <div class="blog-header">
                                <img
                                        class="img-fluid"
                                        loading="lazy"
                                        src="{{$post->getFeaturedImage()}}"
                                        alt="{{$post->getFeaturedImageAlt()}}"
                                >
                            </div>
                        @endif
                        <div class="blog-body">
                            <h5 class="package-name">
                                <a href="{{$link}}">{{$post->getTitle()}}</a>
                            </h5>
                            <p>{{$post->getSummary()}}</p>
                        </div>
                        <div class="blog-footer">
                            <a href="{{$link}}" class="main-btn btn-hover">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
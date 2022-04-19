<section id="{{$pageFields['scroll_anchor_id']}}" class="testimonial-section mt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="testimonial-active-wrapper">

                    <div class="section-title text-center">
                        <h2 class="mb-20">{{$pageFields['headline']}}</h2>
                    </div>

                    <div class="testimonial-active">
                        @foreach($pageFields['testimonial'] as $testimonial)
                            <div class="single-testimonial">
                                <div class="quote">
                                    <i class="lni lni-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>{{$testimonial['quote']}}</p>
                                </div>
                                <div class="info">
                                    <h6>{{$testimonial['name']}}</h6>
                                    <p>{{$testimonial['title']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
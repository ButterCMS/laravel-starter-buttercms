<section id="{{$pageFields['scroll_anchor_id']}}" class="cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="cta-image {{$pageFields['image_position']}}-image">
                    <img src="{{$pageFields['image']}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-content-wrapper">
                    <div class="section-title">
                        <h2 class="mb-20">{{$pageFields['headline']}}</h2>
                        <p>{!! $pageFields['subheadline'] !!}</p>
                        <a href="{{$pageFields['button_url']}}" class="main-btn btn-hover border-btn mt-30" target="_blank" >{{$pageFields['button_label']}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
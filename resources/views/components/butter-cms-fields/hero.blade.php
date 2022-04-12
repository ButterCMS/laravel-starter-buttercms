<section id="{{$pageFields['scroll_anchor_id']}}" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="hero-content">
                    <h1>{{$pageFields['headline']}}</h1>
                    <p>{{$pageFields['subheadline']}}</p>

                    <a href="{{$pageFields['button_url']}}" target="_blank" class="main-btn btn-hover">{{$pageFields['button_label']}}</a>
                    <a href="https://buttercms.com/join/" target="_blank">Need an account?</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="hero-image text-center text-lg-end">
                    <img src="{{$pageFields['image']}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sidebar blog-grid-page">
    <div class="widget search-widget">
        <h5 class="widget-title">Search This Site</h5>
        <form action="{{url('/blog/search/')}}">
            <input type="text" name="q" placeholder="Search Here..." value="{{$searchTerm ?? null}}">
            <button type="submit"><i class="lni lni-search-alt"></i></button>
        </form>
    </div>
</div>
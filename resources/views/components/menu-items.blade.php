@foreach($menuItems as $menuItem)
    <li class="nav-item">
        <a class="page-scroll" href="/{{$menuItem['url']}}">{{$menuItem['label']}}</a>
    </li>
@endforeach
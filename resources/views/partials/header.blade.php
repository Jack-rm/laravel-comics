<header>
    <div class="header-banner">
        <a href="#">dc power visa</a>
        <a href="#">additional dc sites</a>
    </div>
    <div class="header-major">
        <figure>
            <img src="{{ asset('images/dc-logo.png') }}" alt="Dc Header Logo">
        </figure>
        <nav>
            <ul>
                @foreach ($header_links as $link)
                    <li class="{{ request()->routeIs($link['route']) ? 'active' : '' }}">
                        <a class="{{ request()->routeIs($link['route']) ? 'active' : '' }}" href="{{ $link['route'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div>
            <h4>Search Bar</h4>
        </div>
    </div>
</header>
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
                    <li><a href="{{ $link['route'] }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
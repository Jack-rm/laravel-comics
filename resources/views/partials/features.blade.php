<div id="my_features-section">
    <div class="my_features">
        <ul>

            @foreach ($features_links as $link)
            <li>
                <a href="#">
                    <img src="{{ $link['source'] }}"/>
                    {{ $link['text'] }}
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>
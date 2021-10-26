@extends('layouts.main') <!-- Passo 'main' come layout ad home -->

@section('title', 'Comics')

@section('content')
<div id="comics">

    <div class="my_title-marker">
        <h2>Current Series</h2>
    </div>
    <div class="my_content">

        @foreach ($comics as $comic)
        
        <div class="my_comic-element">
            <!-- <a href='{{ url("/comic/$loop->index") }}'> -->
            <!-- <a href='{{ "/product/$loop->index" }}'> -->
            <a href="{{ route('comic', ['id' => $loop->index]) }}">
                <div class="my_comic-img">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div>
                <h3>{{ $comic['title'] }}</h3>
            </a>
        </div>

        @endforeach

    </div>

    <button class="my_btn-light">Load More</button>
</div>
@endsection

<!-- 
@section('script-adder')
@endsection
-->
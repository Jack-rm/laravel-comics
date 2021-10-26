@extends('layouts.main')

@section('title', 'Comic')

@section('content')
<div id="comic">

    <div class="blue-section">
    </div>      
    <div class="current-cover" 
        style="background-image: url('{{ $comic['thumb'] }}')">
        
        <div class="cover-text cover-type">
            <h5>{{ $comic['type']}}</h5>
        </div>
        <div class="cover-text">
            <h5>View Gallery</h5>
        </div>
    </div>

    <div class="comic-box">
        <div class="comic-details">
            <h2>{{ $comic['title'] }}</h2>
            <div class="comic-shop">
                <div class="comic-price">
                    <h5>U.S. Price: <span>{{ $comic['price'] }}</span></h5>
                    <p>Available</p>
                </div>
                <div class="comic-check">
                    <p>Check Availability <</p>
                </div>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        <div class="advertisement">
            <h5>ADVERTISEMENT</h5>
            <img src="{{ asset('images/placeholder.com.png') }}" alt="Advertisement image (placeholder instead)">
        </div>
    </div>
    <div class="comic-info">
        <div class="comic-talent">
            <h2>Talent</h2>
            <div class="comic-artist">
                <h5>Art by:</h5>
                <div class="artists">
                    @foreach ($comic['artists'] as $artist)
                        <a href="#">{{ $artist . "," }}</a>
                    @endforeach
                </div>
            </div>
            <div class="comic-writers">
                <h5>Written by:</h5>
                <div class="writers">
                    @foreach ($comic['writers'] as $writer)
                        <a href="#">{{ $writer . "," }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="comic-specs">
            <h2>Specs</h2>
            <div class="comic-series">
                <h4>Series:</h4>
                <span>{{ $comic['series']}}</span>
            </div>
            <div class="comic-value">
                <h4>U.S. Price:</h4>
                <span>{{ $comic['price'] }}</span>
            </div>
            <div class="comic-release">
                <h4>On Sale Date</h4>
                <span>{{ $comic['sale_date'] }}</span>
            </div>
        </div>

    </div>

</div>
@endsection
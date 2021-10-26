@extends('layouts.main')

@section('title', 'Comic')

@section('content')
<div id="comic">

    <div class="blue-section">
    </div>      
    <div class="current-cover" 
        style="background-image: url('https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX')">
        
        <div class="cover-text cover-type">
            <h5>Comic Book</h5>
        </div>
        <div class="cover-text">
            <h5>View Gallery</h5>
        </div>
    </div>

    <div class="comic-box">
        <div class="comic-details">
            <h2> Titolo fumetto </h2>
            <div class="comic-shop">
                <div class="comic-price">
                    <p>US prezzo comic</p>
                    <p>Available</p>
                </div>
                <div class="comic-check">
                    <p>Check Availability <</p>
                </div>
            </div>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, ea impedit. Enim voluptatum, sapiente minima eveniet nostrum accusamus quam nam? Reprehenderit culpa, doloremque sequi consequatur officiis voluptatum molestias unde quas.</p>
        </div>
        <div class="advertisement">
            <h5>ADVERTISEMENT</h5>
            <img src="{{ asset('images/placeholder.com.png') }}" alt="Advertisement image (placeholder instead)">
        </div>
    </div>
    <div class="comic-info">
        <div class="comic-talent">
            <h3>Talent</h3>
            <div class="comic-artist">
                <h5>Art by:</h5>
                <span>artisti vari</span>
            </div>
            <div class="comic-writers">
                <h5>Written by:</h5>
                <span>scrittori vari</span>
            </div>
        </div>
        <div class="comic-specs">
            <h3>Specs</h3>
            <div class="comic-series">
                <h5>Series:</h5>
                <span>Action Comics</span>
            </div>
            <div class="comic-value">
                <h5>U.S. Price:</h5>
                <span>$19.99</span>
            </div>
            <div class="comic-release">
                <h5>On Sale Date</h5>
                <span>Oct 02 2018</span>
            </div>
        </div>

    </div>

</div>
@endsection
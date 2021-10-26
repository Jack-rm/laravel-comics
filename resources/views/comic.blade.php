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
                    <p>Check Availability</p>
                </div>
            </div>
            <p> Descrizione Fumetto</p>
        </div>
        <img src="{{ asset('images/advertisement-img.png') }}" alt="Advertisement image">
    </div>

</div>
@endsection
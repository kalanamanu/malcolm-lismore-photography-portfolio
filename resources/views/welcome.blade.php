@extends('layouts.nav')

@section('nav')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
  <title>Malcolm Lismore Photography</title>
</head>
<body>

<div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
            <img src="{{ asset('assets/img1.jpg') }}" alt="image1">
                <div class="content">
                    <div class="author">Moments Captured</div>
                    <div class="title">Malcolm Lismore</div>
                    <div class="topic">WEDDINGS</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Welcome to my portfolio, where I capture the essence of Scotland’s rugged landscapes, enchanting wildlife, and coastal birds. While nature is my muse, I also bring my artistic eye to weddings, portraits, and special events, ensuring every moment is beautifully preserved. Explore my stunning collections and discover the world through my lens.
                    </div>
                    <div class="buttons">
                        <button  onclick="window.location='{{ route('hireme') }}'">HIRE</button>
                        <button onclick="window.location='{{ route('contactme') }}'">CONTACT</button>
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img2.jpg') }}" alt="image1">
                <div class="content">
                    <div class="author">Moments Captured</div>
                    <div class="title">Malcolm Lismore</div>
                    <div class="topic">PORTRAITS</div>
                    <div class="des">
                        Welcome to my portfolio, where I capture the essence of Scotland’s rugged landscapes, enchanting wildlife, and coastal birds. While nature is my muse, I also bring my artistic eye to weddings, portraits, and special events, ensuring every moment is beautifully preserved. Explore my stunning collections and discover the world through my lens.
                    </div>
                    <div class="buttons">
                        <button  onclick="window.location='{{ route('hireme') }}'">HIRE</button>
                        <button onclick="window.location='{{ route('contactme') }}'">CONTACT</button>
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img3.jpg') }}" alt="image1">
                <div class="content">
                    <div class="author">Moments Captured</div>
                    <div class="title">Malcolm Lismore</div>
                    <div class="topic">SPECIAL EVENTS</div>
                    <div class="des">
                        Welcome to my portfolio, where I capture the essence of Scotland’s rugged landscapes, enchanting wildlife, and coastal birds. While nature is my muse, I also bring my artistic eye to weddings, portraits, and special events, ensuring every moment is beautifully preserved. Explore my stunning collections and discover the world through my lens.
                    </div>
                    <div class="buttons">
                        <button  onclick="window.location='{{ route('hireme') }}'">HIRE</button>
                        <button onclick="window.location='{{ route('contactme') }}'">CONTACT</button>
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img4.jpg') }}" alt="image1">
                <div class="content">
                    <div class="author">Moments Captured</div>
                    <div class="title">Malcolm Lismore</div>
                    <div class="topic">WILDLIFE</div>
                    <div class="des">
                    Welcome to my portfolio, where I capture the essence of Scotland’s rugged landscapes, enchanting wildlife, and coastal birds. While nature is my muse, I also bring my artistic eye to weddings, portraits, and special events, ensuring every moment is beautifully preserved. Explore my stunning collections and discover the world through my lens.
                    </div>
                    <div class="buttons">
                        <button  onclick="window.location='{{ route('hireme') }}'">HIRE</button>
                        <button onclick="window.location='{{ route('contactme') }}'">CONTACT</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
            <img src="{{ asset('assets/img1.jpg') }}" alt="image1">
                <div class="content">
                    <div class="title">
                    WEDDINGS
                    </div>
                    <div class="description">
                    Malcolm Lismore
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img2.jpg') }}" alt="image1">
                <div class="content">
                    <div class="title">
                    PORTRAITS
                    </div>
                    <div class="description">
                    Malcolm Lismore
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img3.jpg') }}" alt="image1">
                <div class="content">
                    <div class="title">
                    SPECIAL EVENTS
                    </div>
                    <div class="description">
                    Malcolm Lismore
                    </div>
                </div>
            </div>
            <div class="item">
            <img src="{{ asset('assets/img4.jpg') }}" alt="image1">
                <div class="content">
                    <div class="title">
                    WILDLIFE
                    </div>
                    <div class="description">
                        Malcolm Lismore
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>
    <script src="{{ asset('js/slider.js') }}"></script>
    @include('layouts.footer')
</body>
</html>

@endsection
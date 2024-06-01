<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Malcolm Lismore Photography</title>
    <link href="{{ asset('css/nav2.css') }}" rel="stylesheet">
</head>
<body>
<nav>
    <div class="logo">
        <h1>Malcolm Lismore</h1>
    </div>
    <ul class="navbar-menu">
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('welcome') }}">Home</a></li>
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
        <li class="{{ Request::is('pricing') ? 'active' : '' }}"><a href="{{ route('pricing') }}">Pricing</a></li>
    </ul>
    <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
</nav>
<script src="{{ asset('js/nav2.js') }}"></script>
</body>
</html>

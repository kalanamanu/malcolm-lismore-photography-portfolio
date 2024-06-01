<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Malcolm Lismore Photography</title>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
  </head>
  <body>
  <header>
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('pricing') }}">Pricing</a>
        </nav>
    </header>
    @yield('nav')
  </body>
 
</html>

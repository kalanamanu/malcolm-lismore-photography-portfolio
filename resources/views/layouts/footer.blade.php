<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Malcolm Lismore Photography</title>
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    
  <body>
    <!-- resources/views/layouts/footer.blade.php -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Malcolm Lismore Photography. All rights reserved.</p>
        <ul class="footer-links">
            <li><a href="{{ route('about') }}">About Me</a></li>
            <li><a href="{{ route('contactme') }}">Contact</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
        </ul>
    </div>
</footer>

    @yield('footer')
  </body>
 
</html>

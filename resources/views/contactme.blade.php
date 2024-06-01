<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/contactme.css') }}" rel="stylesheet">
    <title>Malcolm Lismore Photography</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
@include('layouts.nav2')

<div class="contact-card">
    <img src="{{ asset('assets/propic1.png') }}" alt="Profile Picture">
    <h2>John Doe</h2>
    <p>Web Developer</p>
    <div class="info">
        <div><i class="fas fa-phone-alt"></i> +123 456 7890</div>
        <div><i class="fas fa-envelope"></i> malcolm.lis@gmail.com</div>
    </div>
    <div class="social-links">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab  fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <a href="{{ route('hireme') }}" class="btn">Hire Me</a>
</div>

@include('layouts.footer')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
    <title>Malcolm Lismore Photography</title>
</head>
<body>
@include('layouts.nav2')

<header>
    <h1 class="main">Welcome to Our Photography Packages</h1>
    <p>Choose the perfect package that suits your needs.</p>
  </header>
  <div class="wrapper">
        <div class="pricing-table gprice-single">
            <div class="head">
                 <h4 class="title">Eternal Love</h4> 
            </div>
            <div class="content">
                <div class="price">
                    <h1>$250</h1>
                </div>
                <ul>
                    <li><b>WEDDINGS</b></li>
                    <li>Full-day coverage</li>
                    <li>Edited digital images</li>
                    <li>Engagement session</li>
                    <li>Custom album </li>
                    <li>Consultations</li>

                </ul>
                <div class="sign-up">
                    <a href="{{ route('hireme') }}" class="btn bordered radius">HIRE ME</a>
                </div>
            </div>
        </div>
            <div class="pricing-table gprice-single">
                <div class="head">
                    <h4 class="title">Moments Unforgettable</h4>
                </div>
                <div class="content">
                    <div class="price">
                        <h1>$120</h1>
                    </div>
                    <ul>
                        <li><b>SPECIAL EVENTS</b></li>
                        <li>Event coverage</li>
                        <li>Edited digital images</li>
                        <li>On-site printing</li>
                        <li>Second photographer</li>
                       <li>Consultation</li>
            
                    </ul>
                    <div class="sign-up">
                        <a href="{{ route('hireme') }}" class="btn bordered radius">HIRE ME</a>
                    </div>
                </div>
            </div>
                <div class="pricing-table gprice-single">
                    <div class="head">
                        <h4 class="title">Soulful Portraits</h4>
                    </div>
                    <div class="content">
                        <div class="price">
                            <h1>$60</h1>
                        </div>
                        <ul>
                            <li><b>PORTRAITS</b></li>
                            <li>Portrait session</li>
                            <li>Edited high-res images</li>
                            <li>Private viewing</li>
                            <li>Print/canvas options</li>
                            <li>Guidance</li>
                        </ul>
                        <div class="sign-up">
                            <a href="{{ route('hireme') }}" class="btn bordered radius">HIRE ME</a>
                        </div>
                    </div>
                </div>
    </div>

<script src="{{ asset('js/pricing.js') }}"></script>
@include('layouts.footer')
</body>
</html>

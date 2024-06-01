<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <title>Malcolm Lismore Photography</title>
</head>
<body>
@include('layouts.nav2')
<section class="about-us">
    <div class="about">
        <img src="{{ asset('assets/malcolmdp1.jpg') }}" alt="profilepic" class="pic">
        <div class="text">
            <h2>About Me</h2>
            <h5><span>A Freelance Photographer</span></h5>
            <p>Welcome to my portfolio! I'm Malcolm Lismore, a passionate photographer with a deep love for the natural world and a particular fondness for capturing the rugged beauty of Scotland. From the dramatic Highland landscapes to the serene coastal shores, my lens seeks to preserve the breathtaking essence of our untamed wilderness. Whether it's the majestic wildlife, the enchanting flora, or the elusive coastal birds, my work reflects a dedication to showcasing the splendor of nature in its purest form.</p>
            <p>But my passion doesn't stop at landscapes and wildlife. I bring the same enthusiasm and creative eye to a variety of photography services. Whether you're looking to capture the magic of your wedding day, the essence of a portrait, or the joy of a special event, I am here to help you create timeless memories. Each photograph is crafted with care, ensuring that every moment is beautifully immortalized.</p>
            <p>Thank you for visiting my portfolio. I invite you to explore my galleries and discover the natural beauty and memorable moments I've been fortunate enough to capture. If you have any questions or would like to discuss a photography project, please don't hesitate to get in touch.</p>
            <div class="data">
                <a href="{{ route('hireme') }}" class="hire">Hire Me</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
</body>
</html>

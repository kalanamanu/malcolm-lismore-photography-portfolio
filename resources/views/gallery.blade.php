<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <title>Malcolm Lismore Photography</title>
</head>
<body>
@include('layouts.nav2')
<section class="portfolio">
	
	<header class="section-head">
		<h1>A Journey Through the Lens</h1>
	</header>
 
	<main class="mainContainer">
		
		<!--  *****  Buttons Section Starts  *****  -->
		<div class="button-group">
			<button class="button active" data-filter="*">All</button>
			<button class="button" data-filter=".design">Weddings</button>
		<button class="button" data-filter=".development">Special Events</button>
			<button class="button" data-filter=".logo">Potraits</button>
		</div>
		<!--  *****  Buttons Section Ends  *****  -->

		<!--  *****  Gallery Section Starts  *****  -->
		<div class="gallery">
			
			<!--  *****  Card 1 Starts  *****  -->
			@foreach ($posts as $post)
			<div class="item design">
				<img src="{{ asset($post->image) }}">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			@endforeach


			
			<!--  *****  Card 1 Ends  *****  -->

			<!--  *****  Card 2 Starts  *****  -->
			<!-- <div class="item design">
				<img src="design2.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			 *****  Card 2 Ends  *****  -->

			<!--  *****  Card 3 Starts  *****  -->
			<!-- <div class="item development">
				<img src="website1.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!- *****  Card 3 Ends  *****  -->

			<!--  *****  Card 4 Starts  *****  -->
			<!-- <div class="item development">
				<img src="website2.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div> -->
			<!--  *****  Card 4 Ends  *****  -->

			<!--  *****  Card 5 Starts  *****  -->
			<!-- <div class="item development">
				<img src="website3.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div> -->
			<!--  *****  Card 5 Ends  *****  -->

			<!--  *****  Card 6 Starts  *****  -->
			<!-- <div class="item logo">
				<img src="logo1.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div> -->
			<!--  *****  Card 6 Ends  *****  -->

		</div> 
		<!--  *****  Gallery Section Ends  *****  -->

	</main>

</section>


<!--   *****   JQuery Link   *****   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!--   *****   Isotope Filter Link   *****  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<script type="text/javascript">
	var $galleryContainer = $('.gallery').isotope({
		itemSelector: '.item',
  		layoutMode: 'fitRows'
	})

	$('.button-group .button').on('click', function(){
		$('.button-group .button').removeClass('active');
		$(this).addClass('active');

		var value = $(this).attr('data-filter');
		$galleryContainer.isotope({
			filter: value 
		})
	})
</script>
@include('layouts.footer')
</body>
</html>


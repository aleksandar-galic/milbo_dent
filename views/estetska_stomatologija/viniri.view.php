<?php require ('views/partials/header.php'); ?>

	<!-- About Section -->
	<div class="container">
		<div class="row welcome">
			<div class="col-12">
				<h1 class="display-6">Viniri (Fasete)</h1>
			</div>				
			<hr>
			<div class="col-12">
				<p class="lead">
					Viniri predstavljaju keramicke fasete ili ljuspice, kako ih još nazivaju.
					<br><br>
					Rađenjem vinira vi ste u stanju da potpuno rekonstruišete svoj osmeh: od boje zuba, preko ispravljanja pomerenih, rotiranih ili zakrivljenih zuba.
					<br><br>
					Ukoliko imate bilo koji od ovih problema, vinirima ćete ih jako lepo rešiti.
				</p>
			</div>
		</div>
		<hr class="my-3">
	</div>

	<image-carousel>
	</image-carousel>

	<!-- Carousel -->
	<div class="container-sm w-50">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/Viniri/1.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/Viniri/2.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/Viniri/3.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/Viniri/4.jpg" class="d-block w-100 h-100">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container">
		<hr class="my-4">	
	</div>

<?php require ('views/partials/footer.php'); ?>
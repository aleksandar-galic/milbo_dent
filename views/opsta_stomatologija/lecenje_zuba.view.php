<?php require ('views/partials/header.php'); ?>

	<!-- About -->
	<div class="container-sm">
		<div class="row welcome text-left">
			<div class="col-12">
				<h1 class="display-6">Lecenje Zuba</h1>
			</div>        
			<hr>
			<div class="col-12">
				<p class="lead">
					Koristeci savremene endodontske metode i najkvalitetnije materijale i lekove, saniracemo Vaš problem, bio on upala živca, nekroza (odumiranje zuba), ili gangrena zuba.
				</p>
			</div>
		</div>
		<hr class="my-3">
	</div>

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
					<img src="images/LecenjeZuba/1.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/LecenjeZuba/2.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/LecenjeZuba/3.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/LecenjeZuba/4.jpg" class="d-block w-100 h-100">
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
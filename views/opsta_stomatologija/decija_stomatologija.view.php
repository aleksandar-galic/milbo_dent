<?php require ('views/partials/header.php'); ?>

	<!-- About Section -->
	<div class="container padding">
		<div class="row welcome">
			<div class="col-12">
				<h1 class="display-6">Dečija Stomatologija</h1>
			</div>				
			<hr>
			<div class="col-12">
				<p class="lead">
					Uz puno ljubavi i strpljenja našim najmladim pacijentima pružamo bezbolne intervencije na mlecnim i stalnim zubima. Kod nas ce nauciti kako pravilno da održavaju higijenu zuba, kako da se pravilno hrane, a sve u cilju postizanja zdravog osmeha.
					<br><br>
					Sacuvacemo zdravlje njihovih zuba primenom fluorida i zalivanjem fisura. Zajednickim trudom našeg osoblja i roditelja deca ce sa zadovoljstvom i bez straha dolaziti u ordinaciju .
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
					<img src="images/decija_stomatologija/1.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/decija_stomatologija/2.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/decija_stomatologija/3.jpg" class="d-block w-100 h-100">
				</div>
				<div class="carousel-item">
					<img src="images/decija_stomatologija/4.jpg" class="d-block w-100 h-100">
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

	<!-- Cenovnik -->
	<div class="container">
		<h2>Cenovnik</h2>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Usluga</th>
					<th scope="col">Cena</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Zalivanje fisura</td>
					<td>500 DIN</td>
				</tr>
				<tr>
					<td>Fluorisanje zuba</td>
					<td>1 000 DIN</td>
				</tr>
				<tr>
					<td>Vadenje mlecnog zuba</td>
					<td>1 000 DIN</td>
				</tr>
				<tr>
					<td>GJC na mlecnim zubima</td>
					<td>1 200 DIN</td>
				</tr>
				<tr>
					<td>Terapija nezavršenog rasta korena po seansi</td>
					<td>1 200 DIN</td>
				</tr>
				<tr>
					<td>Cementiranje krunice</td>
					<td>1 000 DIN</td>
				</tr>
				<tr>
					<td>Amputacija pulpe</td>
					<td>1 000 DIN</td>
				</tr>
				<tr>
					<td>Direktno podlaganje proteze</td>
					<td>2 500 DIN</td>
				</tr>
				<tr>
					<td>Indirektno podlaganje proteze</td>
					<td>70 EUR</td>
				</tr>
			</tbody>
		</table>
		<hr class="my-4">
	</div>

<?php require ('views/partials/footer.php'); ?>
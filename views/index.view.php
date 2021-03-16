<?php require ('partials/header.php'); ?>

	<!-- Welcome -->
	<div class="welcome container pb-4">
		<h1 class="display-4">Dobrodošli!</h1>
		<p class="lead">Naš cilj je blistav osmeh zadovoljnog pacijenta.</p>
		<hr class="my-4">
		<p>Zakazivanjem termina online ostvarujete <b>10% popusta</b> na sve usluge.</p>
		<a href="#contact" type="button" class="btn btn-primary btn-lg">Zakaži Termin</a>
	</div>
	<!-- About -->
	<div class="container">
		<div class="row welcome">
			<div class="col-12">
				<p class="lead">
					U našoj stomatološkoj ordinaciji dočekaće vas ljubazno i nasmejano <a href="#stomatolozi"><i>osoblje</i></a>
					<br class="d-none d-lg-block">
					koje će vam u prijatnom <a href="ordinacija"><i>ambijentu</i></a> i u potpunoj privatnosti
					<br class="d-none d-lg-block">
					pružiti sve neophodne stomatološke <a href="opsta-stomatologija"><i>usluge</i></a>.
					<br><br>
					<a href="#location"><i>Radno vreme</i></a> ordinacije je usklađeno sa vašim dnevnim obavezama.
					<br class="d-none d-lg-block">
					U našoj ordinaciji izlečićete svoje zube i dobiti neophodne savete o očuvanju i održavanju zuba.
				</p>
			</div>
		</div>
		<hr class="my-3">
	</div>

	<!-- Meet the Team -->
	<div class="container text-center" id="stomatolozi">
		<div class="row welcome">
			<div class="col-12">
				<h2>Vaši Stomatolozi</h2>
			</div>
			<hr>
		</div>
	</div>
	<!-- Cards -->
	<div class="container">
		<div class="d-flex row justify-content-around">
			<div class="col" align="center">
				<div class="card shadow my-4" style="width: 20rem; height: auto;">
					<img src="images/bogdan.jpg" class="card-img-top" style="height: 12rem;">
					<div class="card-body text-left">
						<h4 class="card-title">Dr Bogdan Stojanović</h4>
						<hr class="mt-0">
						<p class="card-text">
							Dr Bogdan Stojanović se školovao na Stomatološkom fakultetu Univerziteta u Beogradu od 2005. do 2011. gde je završio osnovne studije sa odličnim prosekom.
							<br><br>
							Svoje dalje usavršavanje nastavio je u <b>Vojnomedicinskom centru</b> na Novom Beogradu u trajanju od godinu dana gde je stekao neophodno praktično iskustvo za samostalni rad.<span class="dots" id="dotsLeft">..</span>
							<div class="collapse" id="readLeft">
								Svoje dalje školovanje nastavio je pohađanjem kurseva iz domena stomatologije na stranim univerzitetima. Radom u više privatnih ordinacija nastavio je da usavršava svoj rad.
							</div>
						</p>
						<a onclick="collapse('leftButton', 'dotsLeft')" href="#readLeft" class="btn btn-primary" id="leftButton" data-toggle="collapse" role="button">Pročitaj Više</a>
					</div>
				</div>
			</div>
			<div class="col" align="center">
				<div class="card shadow my-4" style="width: 20rem; height: auto;">
					<img src="images/milkica.jpg" class="card-img-top" style="height: 12rem;">
					<div class="card-body text-left">
						<h4 class="card-title">Dr Milkica Simović</h4>
						<hr class="mt-0">
						<p class="card-text">
							Dr Milkica Simović se školovala na Stomatološkom fakultetu Univerziteta u Beogradu od 2005. do 2011. gde je završila studije sa odličnim prosekom.
							<br><br>
							Svoje dalje usavršavanje nastavila je stažiranjem na <b>Vojnomedicinskoj akademiji</b> u trajanju od godinu dana gde se istakla svojim radom i požrtvovanjem.<span class="dots" id="dotsRight">..</span>
							<div class="collapse" id="readRight">
								Radeći samostalno u više privatnih ordinacija stekla je neophodno praktično iskustvo.Zahvaljujući brojnim seminarima i kongresima u zemlji i inostranstvu primenjuje savremeni koncept stomatologije.
							</div>
						</p>
						<a onclick="collapse('rightButton', 'dotsRight')" href="#readRight" class="btn btn-primary" id="rightButton" data-toggle="collapse" role="button">Pročitaj Više</a>
					</div>
				</div>
			</div>
		</div>
		<hr class="my-3">
	</div>

	<script>
		function collapse(button, thedots) {
			var dots = document.getElementById(thedots);
			var btnText = document.getElementById(button);

			if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Pročitaj Više";
			} else {
				dots.style.display = "none";
				btnText.innerHTML = "Manje";
			}
		}
	</script>

<?php require ('partials/footer.php'); ?>

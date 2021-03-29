<?php require ('views/partials/header.php'); ?>

	<!-- About Section -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Oralna Hirurgija</h1>
			</div>
			<hr class="my-3">
			<div class="col-12">
				<p class="lead">
					Oralna hirurgija je danas postala potpuno bezbolna grana stomatologije.
					<br><br>
					Vađenje zuba, vađenje impaktiranih umnjaka i ostali hirurški zahvati vrše se na potpuno bezbolan i komforan način.
				</p>
			</div>
		</div>
		<hr class="my-3">
	</div>

	<!-- Cards -->
	<div class="container-xl">
		<div class="d-flex row justify-content-around">
			<div class="card m-4 shadow" style="width: 20rem; height: auto;">
				<img src="images/OralnaHirurgija/vadjenje_zuba.jpg" class="card-img-top" alt="..." style="height: 8rem;">
				<div class="card-body">
					<h4 class="card-title">Vađenje Zuba</h4>
					<hr class="mt-0">
					<p class="card-text">
						Svaki zub kome je potrebno vađenje biće izvađen na najbrži način, u potpuno bezbolnim i apsolutno sterilnim uslovima rada.
					</p>
					<a href="vadjenje-zuba" class="btn btn-primary">Pogledaj</a>
				</div>
			</div>
			<div class="card m-4 shadow" style="width: 20rem; height: auto;">
				<img src="images/OralnaHirurgija/vadjenje_umnjaka.jpg" class="card-img-top" alt="..." style="height: 8rem;">
				<div class="card-body">
					<h4 class="card-title">Vađenje Umnjaka</h4>
					<hr class="mt-0">
					<p class="card-text">
						Neiznikli ili poluiznikli umnjaci koje je potrebno vaditi, predstavljaju danas veliki problem, pre svega za mlade ljude.
						<br><br>
						Kod nas taj problem rešavate brzo i potpuno bezbolno.
					</p>
					<a href="vadjenje-umnjaka" class="btn btn-primary">Pogledaj</a>
				</div>
			</div>
		</div>

		<div class="d-flex row justify-content-around">
			<div class="card m-4 shadow" style="width: 20rem; height: auto;">
				<img src="images/OralnaHirurgija/hirursko_vadjenje.jpg" class="card-img-top" alt="..." style="height: 8rem;">
				<div class="card-body">
					<h4 class="card-title">Hirurško Vađenje</h4>
					<hr class="mt-0">
					<p class="card-text">
						Zub se vadi hirurškim putem ukoliko ne može da se izvadi na uobičajen način.
					</p>
					<a href="hirursko-vadjenje" class="btn btn-primary">Pogledaj</a>
				</div>
			</div>
			<div class="card m-4 shadow" style="width: 20rem; height: auto;">
				<img src="images/OralnaHirurgija/ostali_zahvati.jpg" class="card-img-top" alt="..." style="height: 8rem;">
				<div class="card-body">
					<h4 class="card-title">Ostali Zahvati</h4>
					<hr class="mt-0">
					<p class="card-text">
						Apikotomija ili odsecanje vrha korena se vrši ukoliko je oboljenje zuba prouzrokovalo infekciju prostora između kosti i zuba, kao i defekte u samoj kosti koji su suviše veliki da bi se lečili kroz kanal zuba.
						<br><br>
						Cistektomija podrazumeva hirurški postupak kojim se otklanja radikularna cista koja je nastala kao posledica infekcije zuba ili znatno ređe razvojna cista.
					</p>
					<a href="ostali-zahvati" class="btn btn-primary">Pogledaj</a>
				</div>
			</div>
		</div>
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
					<td>Vađenje Zuba</td>
					<td>2 000 DIN</td>
				</tr>
				<tr>
					<td>Komplikovano Vađenje Zuba</td>
					<td>4 000 DIN</td>
				</tr>
				<tr>
					<td>Terapija Alveolita po Seansi</td>
					<td>500 DIN</td>
				</tr>
				<tr>
					<td>Zaustavljanje Krvarenja</td>
					<td>1 500 DIN</td>
				</tr>
			</tbody>
		</table>
		<hr class="my-4">
	</div>

<?php require ('views/partials/footer.php'); ?>

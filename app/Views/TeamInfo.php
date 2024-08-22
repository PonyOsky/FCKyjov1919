<?php
	$this->extend("layouts/STeamLayout");
    $this->section("content");
?>
<h3 style="text-align: center">Změna informací k vedení týmu</h3>
<div class="line"></div>
<div class="container">
	<div class="row" style="margin-top: 10px">
	<div class="col-4">
		<div style="margin: 0 20px">
		<h5 style="text-align: center">Trenér</h5>
		<form action="">
			<div class="space">
				<label for="jmeno">Jméno:</label>
				<input type="text" class="form-control" placeholder="Jméno" id="jmeno">
			</div>
			<div class="space">
				<label for="prijmeni">Příjmení:</label>
				<input type="text" class="form-control" placeholder="Příjmení" id="prijmeni">
			</div>
			<div class="space">
				<label for="tel">Telefon / Mobil:</label>
				<input type="text" class="form-control" placeholder="123 456 789" id="tel">
			</div>
			<div class="space">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" placeholder="email@doména.cz" id="email">
			</div>
			<div class="space">
				<button type="submit" class="btn btn-primary">Uložit změny</button>
			</div>
		</form>
		</div>
	</div>
	<div class="col-4">
	<div style="margin: 0 20px">
		<h5 style="text-align: center">Asistent trenéra</h5>
		<form action="">
			<div class="space">
				<label for="jmeno">Jméno:</label>
				<input type="text" class="form-control" placeholder="Jméno" id="jmeno">
			</div>
			<div class="space">
				<label for="prijmeni">Příjmení:</label>
				<input type="text" class="form-control" placeholder="Příjmení" id="prijmeni">
			</div>
			<div class="space">
				<label for="tel">Telefon / Mobil:</label>
				<input type="text" class="form-control" placeholder="123 456 789" id="tel">
			</div>
			<div class="space">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" placeholder="email@doména.cz" id="email">
			</div>
			<div class="space">
				<button type="submit" class="btn btn-primary">Uložit změny</button>
			</div>
		</form>
		</div>
	</div>
	<div class="col-4">
	<div style="margin: 0 20px">
		<h5 style="text-align: center">Vedoucí mužstva</h5>
		<form action="">
			<div class="space">
				<label for="jmeno">Jméno:</label>
				<input type="text" class="form-control" placeholder="Jméno" id="jmeno">
			</div>
			<div class="space">
				<label for="prijmeni">Příjmení:</label>
				<input type="text" class="form-control" placeholder="Příjmení" id="prijmeni">
			</div>
			<div class="space">
				<label for="tel">Telefon / Mobil:</label>
				<input type="text" class="form-control" placeholder="123 456 789" id="tel">
			</div>
			<div class="space">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" placeholder="email@doména.cz" id="email">
			</div>
			<div class="space">
				<button type="submit" class="btn btn-primary">Uložit změny</button>
			</div>
		</form>
		</div>
	</div>
	</div>
</div>
<?php
	$this->endSection();
?>
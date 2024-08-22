<?php
	$this->extend("layouts/SystemLayout");
    $this->section("content");
?>
<div style="width: 70%; margin: 0 auto; padding-top: 30px">
	<h5 style="text-align: center">Úprava profilových informací</h5>
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
<?php
	$this->endSection();
?>
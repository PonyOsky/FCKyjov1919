<?php
	$this->extend("layouts/STeamLayout");
    $this->section("content");
?>
<h3 style="text-align: center">Zapsaní vysledků</h3>
<div class="line"></div>
<div class="container">
	<div class="row" style="margin-top: 10px">
	<div class="col-6">
		<form action="">
		<div class="space">
			<label for="datum">Datum:</label>
			<input type="text" class="form-control" placeholder="DD.MM.RRRR" id="datum">
		</div>
		<div class="space">
			<label style="font-size: bold" for="domaci">Domácí:</label>
			<input type="text" class="form-control" placeholder="Domácí" id="domaci">
		</div>
		<div class="space">
			<label for="hoste">Hosté:</label>
			<input type="text" class="form-control" placeholder="Hosté" id="hoste">
		</div>
		<div class="row space">
			<div class="col">
				<label for="vysledek">Výsledek zápasu:</label>
				<div class="row">
					<div class="col-5"><input type="text" class="form-control" placeholder="D" id="vysledek"></div>
					<div class="col-2" style="text-align:center"><b>:</b></div>
					<div class="col-5"><input type="text" class="form-control" placeholder="H" id="vysledek"></div>
				</div>
			</div>
			<div class="col">
				<label for="polocas">Výsledek  poločasu:</label>
				<div class="row">
					<div class="col-5"><input type="text" class="form-control" placeholder="D" id="polocas"></div>
					<div class="col-2" style="text-align:center"><b>:</b></div>
					<div class="col-5"><input type="text" class="form-control" placeholder="H" id="polocas"></div>
				</div>
			</div>
		</div>
		<div class="space">
			<label for="strelci">Seznam střelců branek:</label>
			<textarea class="form-control" placeholder="Příjmení 2x, Příjmení, ..." id="strelci" rows="2"></textarea>
		</div>
		<div class="space">
			<label for="sestava">Sestava:</label>
			<textarea class="form-control" placeholder="Příjmení, Příjmení, Příjmení, ..." id="sestava" rows="4"></textarea>
		</div>
		<div class="space">
			<label for="popis">Komentář k zápasu:</label>
			<textarea class="form-control" id="popis" rows="10"></textarea>
		</div>
		<div class="space">
			<button type="submit" class="btn btn-primary">Uložit změny</button>
		</div>
		</form>
	</div>
	<div class="col-6" style="background-color: lime">
		Tady bude tabulka s výsledky minulých kol!
	</div>
	</div>
</div>
<?php
	$this->endSection();
?>
<?php
	$this->extend("layouts/Layout");
 $this->section("content");
?>
<h1 class="heading" style="margin: 1% 0">O klubu</h1>
<div class="miniNav"><a class="mnIcon" href="<?= base_url('/') ?>"><i class="fa-solid fa-house priColor"></i></a><i class="fa-solid fa-arrow-right mnIcon"></i>O klubu</div>
<div class="container">
<div class="row" style="width: 70%; margin: 0 auto">
	<div class="col-md-6" style="margin: 1% auto">
		<div class="lGray rounded clubHeads">
			<h4 class="priColor heading" style="padding-top: 2%">VÝKONNÝ VÝBOR KLUBU</h4>
			<ul class="liMode">
				<li><b>Předseda:</b></li>
				<li>Darek Opatřil</li>
				<li></li>
				<li><b>Místopředseda:</b></li>
				<li>Jiří Moravec</li>
				<li></li>
				<li><b>Sekretář:</b></li>
				<li>Rostislav Řihák</li>
				<li></li>
				<li><b>Členové výkonného výboru:</b></li>
				<li>Daniel Čmelík</li>
				<li>Vladimír Řihánek</li>
				<li>Viktor Jung</li>
				<li>Ing. Martin Kyjovský</li>
				<li>Michal Kůřil</li>
				<li>Rostislav Řihák</li>
				<li>Jiří Svoboda</li>
				<li></li>
				<li><b>Kontrolní a revizní komise:</b></li>
				<li>Jiří Svoboda</li>
				<li>Mgr. Jakub Husička</li>
				<li>Vlastimil Výstup</li>
			</ul>
			<img class="logoAbout mx-auto d-block" src="<?= base_url('images/logo-min.png') ?>">
		</div>
	</div>
	<div class="col-md-6" style="margin: 1% auto">
		<div class="rounded">
		<h4 class="priColor heading" style="padding-top: 2%">HISTORICKÝ PŘEHLED SOUTĚŽÍ</h4>
		<table class="CompDevTable">
			<tr><th>Ročník</th><th class="competitions">Soutěž</th></tr>
			<tr><td>2019 - </td><td class="competitions">I.B.třída</td></tr>
			<tr><td>2014-2019</td><td class="competitions">I.A.třída</td></tr>	
			<tr><td>2011-2014</td><td class="competitions">Krajský přebor</td></tr>
			<tr><td>2009-2011</td><td class="competitions">I.A.třída</td></tr>
			<tr><td>2006-2009</td><td class="competitions">Krajský přebor</td></tr>
			<tr><td>2003-2006</td><td class="competitions">Divize</td></tr>
			<tr><td>1996-2003</td><td class="competitions">MSFL 3.Liga</td></tr>
			<tr><td>1981-1996</td><td class="competitions">Divize</td></tr>
			<tr><td>1974-1981</td><td class="competitions">Krajský přebor</td></tr>
			<tr><td>1972-1974</td><td class="competitions">Divize</td></tr>
			<tr><td>1967-1972</td><td class="competitions">Krajský přebor</td></tr>
			<tr><td>1966-1967</td><td class="competitions">I.A.třída</td></tr>
			<tr><td>1963-1965</td><td class="competitions">I.B.třída</td></tr>
			<tr><td>1962-1963</td><td class="competitions">Okresní přebor</td></tr>
			<tr><td>1961-1962</td><td class="competitions">Krajská soutěž</td></tr>
			<tr><td>1960-1961</td><td class="competitions">Okresní přebor</td></tr>
			<tr><td>1958-1960</td><td class="competitions">I.B.třída</td></tr>
			<tr><td>1957-1958</td><td class="competitions">I.A.třída</td></tr>
			<tr><td>1953-1956</td><td class="competitions">Krajský přebor</td></tr>
			<tr><td>1951-1952</td><td class="competitions">Okresní přebor</td></tr>
			<tr><td>1949-1950</td><td class="competitions">II.třída</td></tr>
			<tr><td>1945-1948</td><td class="competitions">I.A.třída</td></tr>
			<tr><td>1941-1944</td><td class="competitions">I.B.třída</td></tr>
			<tr><td>1940-1941</td><td class="competitions">I.A.třída</td></tr>
			<tr><td>1934-1940</td><td class="competitions">I.B.třída</td></tr>
			<tr><td>1928-1934</td><td class="competitions">II.třída</td></tr>
			<tr><td>1923-1928</td><td class="competitions">III.třída</td></tr>
		</table>
		</div>
	</div>
</div>
	<div style="margin-top: 1%; width: 70%; margin: 0 auto">
		<div class="rounded" style="margin-top: 2%">
			<h4 class="priColor heading" style="padding-top: 1%">VÝVOJ NÁZVU</h4>
			<ul class="liMode" style="padding: 1% 0 2%; text-align: center">
				<li>FC KYJOV 1919 (od 2009)</li>
				<li>1.FC Kyjov (od 29.05.2007)</li>
				<li>1.FC VMG Kyjov (od 13.12.2004)</li>
				<li>FC VMG Kyjov (od 01.01.1999)</li>
				<li>AFK VMG Kyjov (od 01.01.1994)</li>
				<li>TJ Jiskra Kyjov (od 01.01.1953)</li>
				<li>Sokol Kyjov (od roku 1948)</li>
				<li>SK Kyjov (zal.1919)</li>
			</ul>
		</div>
		<img class="aboutImg mx-auto d-flex rounded" src="<?= base_url('images/Historic-min.jpg')?>">
	</div>
</div>
<?php
	$this->endSection();
?>
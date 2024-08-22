<?php
	$this->extend("layouts/SystemLayout");
    $this->section("content");
    $name = "Jakub";
?>

<h1 style="text-align: center; padding-top: 20%">Vítej zpátky <?= $name?>!</h1>

<?php
$this->endSection();
?>
<?php
    $this->extend("layouts/Layout");
    $this->section("content");
?>

<h1 class="heading" style="margin: 1% 0">Kontakt</h1>
<div class="miniNav"><a class="mnIcon" href="<?= base_url('/') ?>"><i class="fa-solid fa-house priColor"></i></a><i class="fa-solid fa-arrow-right mnIcon"></i>Kontakt</div>
<div class="row" style="width: 100%; margin: 0 auto">
    <div class="col-lg-6">
        <div class="lGray program clubHeads">
			<h4 class="priColor heading" style="padding-top: 2%">VÝKONNÝ VÝBOR KLUBU</h4>
            <div class="row">
                <div class="col-sm-6">
                <div class="">
                    <ul class="liMode">
                        <li><b>Předseda:</b></li>
                        <li>Darek Opatřil</li>
                        <li>+ 420 724 245 569</li>
                        <li>darekopatril@seznam.cz</li>
                        <li><b>Místopředseda:</b></li>
                        <li>Jiří Moravec</li>
                        <li>+420 608 883 334</li>
                        <li>moravec32@seznam.cz</li>
                        <li><b>Sekretář:</b></li>
                        <li>Rostislav Řihák</li>
                        <li>+ 420 731 452 857</li>
                        <li>sekretar@fckyjov1919.cz </li>
                    </ul>
                </div>
                </div>
                <div class="col-sm-6">
                <ul class="liMode">
                    <li><b>FC KYJOV 1919 z.s.</b></li>
                    <li>Mezivodí 2233/2a, 697 01  Kyjov - Nětčice</li>
                </ul>
                <img class="logoAbout mx-auto d-block" src="<?= base_url('images/logo-min.png') ?>">
                </div>
            </div>
		</div>
    </div>
    <div class="col-lg-6">
        <div class="cont-col"><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.784983976267!2d17.126906015645314!3d49.01467547930315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713210d7abacfad%3A0xe95fc1d77920d615!2sFC%20Kyjov%201919%20z.s.!5e0!3m2!1scs!2scz!4v1671087374450!5m2!1scs!2scz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
</div>

<?php
    $this->endSection();
?>
<?php
    $this->extend("layouts/Layout");
    $this->section("content");
?>

<h1 class="heading" style="margin: 1% 0">Oficiální stránky klubu</h1>
<div class="miniNav"><a href="<?= base_url('/') ?>"><i class="fa-solid fa-house priColor"></i></a></div>
<div class="row" style="width: 100%; margin: 0 auto">
    <div class="col-lg-4" style="padding: 0 0 0 1.5%">
        <div class="program lGray">
            <h3 style="text-align: center;margin: 2% 0">Budoucí utkání:</h3>
            <table class="table">
                <tr><th>A</th><td>10:30</td><td>SK Spartak Svatobořice-Mistřín - FC Kyjov 1919</td></tr>
                <tr><th>B</th><td>10:30</td><td>FC Kyjov 1919 - Bohuslavice</td></tr>
                <tr><th>U19</th><td>10:30</td><td>FKD/Ivanovice na Hané - FC Kyjov 1919</td></tr>
                <tr><th>U17</th><td>10:30</td><td>FKD/Ivanovice na Hané - FC Kyjov 1919</td></tr>
                <tr><th>U15</th><td>10:30</td><td>FC Kyjov 1919 - TJ Tatran Starý Lískovec</td></tr>
                <tr><th>U13</th><td>10:30</td><td>FC Kyjov 1919 - TJ Tatran Starý Lískovec</td></tr>
            </table>
        </div>
    </div>
    <div class="col-lg-8">
        <img class="indexImage mx-auto d-block rounded" src="images/ATeam-min.jpg">
        <p class="indexText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam sit amet. Ut venenatis tellus in metus vulputate eu scelerisque felis. Quam lacus suspendisse faucibus interdum posuere lorem. Vitae elementum curabitur vitae nunc sed velit. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Pretium lectus quam id leo in vitae turpis. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Tristique magna sit amet purus. At quis risus sed vulputate.</p>
    </div>
</div>

<?php
    $this->endSection();
?>
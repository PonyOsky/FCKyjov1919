<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FC Kyjov 1919</title>
    <link rel="shortcut icon" href="images/logo-min.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/styles.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/all.min.css") ?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary justify-content-start">
            <div class="container-fluid" style="display: inline-flex">
                <span class="justify-content-start navbarStart">
                    <a href="<?= base_url('/') ?>"><img class="logo" src="<?= base_url('images/logo-min.png') ?>"></a>
                    <h1 class="name" style="font-family: Candara; font-size: 40px">FC Kyjov 1919</h1>
                </span>
                <span class="justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button></span>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" style="text-align: center; font-size: 17px">
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('oklubu') ?>">O klubu</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('vysledky') ?>">Výsledky</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('tymy') ?>">Týmy</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kontakt') ?>">Kontakty</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login') ?>">Přihlásit se</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <img class="wide" src="<?= base_url('images/test2-min.jpg') ?>">
    </header>

    <main>
        <?= $this->renderSection("content"); ?>
        <div class="line"></div>
        <h2 style="text-align: center; margin: 2% 0">Naši sponzoři</h2>
        <div id="demo" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="9"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="10"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="11"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="12"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="13"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="14"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="15"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="16"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="17"></button>
        </div>
        <div class="carousel-inner" style="height: 190px; width: 100%; margin: 0 auto">
            <div class="carousel-item active">
                <img src="images/sponsorship/GPartner-min.png" class="d-block" style="height: 110px; margin: 0 auto">
                <div class="" style="text-align: center">
                <p style="color: black; font-size: 20px">Generální partner</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/jmkPartner-min.png') ?>" class="d-block mx-auto" style="height: 130px; padding-top: 5px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/jmsportPartner-min.png') ?>" class="d-block mx-auto" style="height: 110px; padding-top: 5px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/ekobriketyPartner-min.png') ?>" class="d-block mx-auto" style="height: 140px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/uMartinaPartner-min.png') ?>" class="d-block mx-auto" style="height: 140px">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/elektroPartner-min.jpg') ?>" class="d-block mx-auto" style="height: 150px">  
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/aStudioGroup-min.jpg') ?>" class="d-block mx-auto" style="height: 140px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/axiva-min.png') ?>" class="d-block mx-auto" style="padding-top: 30px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/brenus-min.png') ?>" class="d-block mx-auto" style=""> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/dacomPhrama-min.png') ?>" class="d-block mx-auto" style="height: 90px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/enoNabytek-min.png') ?>" class="d-block mx-auto" style="padding-bottom: 10px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/erdEnergie-min.png') ?>" class="d-block mx-auto" style="padding-top: 10px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/izolmont-min.jpg') ?>" class="d-block mx-auto" style=""> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/naradiLukovsky-min.png') ?>" class="d-block mx-auto" style=""> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/nexx-min.png') ?>" class="d-block mx-auto" style=""> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/safetyKyjov-min.jpg') ?>" class="d-block mx-auto" style="height: 140px"> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/sunnyPower-min.png') ?>" class="d-block mx-auto" style=""> 
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/sponsorship/wiky-min.png') ?>" class="d-block mx-auto" style="height: 90px"> 
            </div>
        </div>
    </main>

    <footer class="down">
        <div class="container">
            <div class="row footerNav">
            <div class="col"><a class="nav-link" href="<?= base_url('oklubu') ?>">O klubu</a></div>
            <div class="col"><a class="nav-link" href="<?= base_url('vysledky') ?>">Výsledky</a></div>
            <div class="col"><a class="nav-link" href="<?= base_url('tymy') ?>">Týmy</a></div>
            <div class="col"><a class="nav-link" href="<?= base_url('kontakt') ?>">Kontakty</a></div>
            <div class="col"><a class="nav-link" href="https://www.facebook.com/FC-KYJOV-1919-251911751488454" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
            </div>
        </div>
        <div class="copy">&copy; 2023 FC Kyjov 1919 z.s.</div>
    </footer>

    <script src="<?= base_url("/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("/js/all.min.js") ?>"></script>
</body>
</html>
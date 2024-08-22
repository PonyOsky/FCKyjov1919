<!DOCTYPE html>
<html lang="cs">

<head>
    <title>Přihlášení</title>
    <link rel="shortcut icon" href="images/logo-min.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/styles.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/all.min.css") ?>">
</head>
<body class="bGImage">
    <div class="backWay lGray"><a  href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i></a></div>
    
    <div class="logPlace">
        <form class="login mx-auto lGray rounded" action="">
            <img class="mx-auto d-block" src="<?= base_url('images/logo-min.png') ?>" alt="">
            <h3 style="text-align: center; margin-top: 2%">Přihlášení do systému</h3>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Heslo</label>
            </div>
            <div class="col-12" style="text-align: center; margin-top: 2%">
                <button type="submit" class="btn btn-primary">Přihlásit se</button>
            </div>
        </form>
    </div>
    
    <script src="<?= base_url("/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("/js/all.min.js") ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="uft-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Systém FC Kyjov</title>
    <link rel="shortcut icon" href="images/logo-min.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/systemStyles.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/css/all.min.css") ?>">
</head>

<body>
    <div style="display: none">
    <?= 
    $status = 'trenér';
    $team = 'tým';
    $name = 'Ondřej';
    $surname = 'Dudák';
    ?>
    </div>
    <header>
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid justify-content-center" style="text-align: center">
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/calendar') ?>">Kalendář</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/a') ?>">A-Tým</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/b') ?>">B-Tým</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u19') ?>">U19</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u17') ?>">U17</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u15') ?>">U15</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u13') ?>">U13</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u11') ?>">U11</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u10') ?>">U10</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u9') ?>">U9</a>
            <a class="navbar-brand nav-hover" href="<?= base_url('/workspace/u8') ?>">U8</a>
            <a class="navbar-brand nav-hover" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user white"></i></a>
        </div>
    </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b>Status: </b><?= $status?><br>
                <b>Tým: </b><?= $team?><br>
                <b>Jméno a příjmení: </b><?= $name?> <?= $surname?><br>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="<?= base_url('/workspace/profile') ?>"><i class="fa-solid fa-gear white"></i></a>
                <a class="btn btn-danger" href="#">Odhlásit se</a>
            </div>
            </div>
        </div>
        </div>
    </header>

    <main>
        <?= $this->renderSection("content"); ?>
    </main>

    <footer>
    </footer>

    <script src="<?= base_url("/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("/js/all.min.js") ?>"></script>
</body>
<script>
    var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
            container: 'body'
        })?>
</script>
</html>
<!-- <div class="container-lg">
    <div class="row align-items-center justify-content-center mb-5" style="margin-top: 128px;">
        <div class="col-sm-10">
            <h1 class="text-center text-danger">Page Vacancy Masih Dalam Tahap Prototyping.</h1>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-bottom: 256px;">
        <div class="col-2">
            <a class="btn btn-secondary btn-user" data-bs-toggle="modal" data-bs-target="#modalRole">Lihat Prototype</a>
        </div>
    </div> -->

<!-- Modal -->
<!-- <div class="modal fade" id="modalRole" tabindex="-1" aria-labelledby="modalRoleLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">
                        <h5>Ingin Berkunjung Sebagai Siapa?</h5>
                        <div class="row justify-content-center mt-5 mb-3">
                            <div class="col-sm-4">
                                <a href="https://www.figma.com/proto/hiDnJ5UuJ6YRDw0AwoUbGK/Career-NPI?node-id=1%3A2&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=1%3A2" class="btn btn-primary btn-sm">Administrator</a>
                            </div>
                            <div class="col-sm-4">
                                <a href="https://www.figma.com/proto/hiDnJ5UuJ6YRDw0AwoUbGK/Career-NPI?node-id=193%3A1258&scaling=min-zoom&page-id=193%3A2&starting-point-node-id=193%3A42555" class="btn btn-warning btn-sm">Normal Visitors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('images/pigment.png') ?>">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#" style="color: #062173;"><img src="<?= base_url() . 'assets/img/logo.png'; ?>" style="width: 100px;"> <i><b>Nippisun Indonesia</i></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav fw-bold my-3">
                        <a class="nav-link" aria-current="page" href="#">About Us</a>
                        <a class="nav-link" href="#">Our Workplace</a>
                        <a class="nav-link active" href="<?= base_url() . 'Careers/vacancies'; ?>">Vacancy</a>
                        <a class="nav-link" href="#">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <?= $this->session->flashdata('pesan'); ?>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-around" style="margin-top: 32px;">
            <div class="card rounded-4 shadow-lg" style="width: 64rem; height: 28rem;">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-sm-6" style="background-color: #014199; max-width: fit-content; max-height: fit-content; margin-top: -16px; margin-left: -12px; margin-bottom: -10px; border-radius: 25px 0px 0px 25px;">
                            <div class="row">
                                <img src="<?= base_url() . 'assets/img/illust1.svg'; ?>" style="width: 500px; height: 500px; margin-top: -72px;">
                            </div>
                            <div class="d-flex justify-content-center">
                                <h4 class="fw-bolder text-light" style="margin-top: -48px;">Careers</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5" style="margin-right: -32px;">
                            <h3 class="card-title fw-bold" style="color: #014199;">Login First</h3>
                            <p class="card-title fw-semibold" style="margin-top: -8px;">We need to verify who you are</p>
                            <div class="row">
                                <div class="col-sm-10">
                                    <form action="<?= base_url('Authentication'); ?>" method="POST">
                                        <div class="mb-4">
                                            <label for="username" class="form-label fs-4 fw-semibold mt-3">Username</label>
                                            <input type="text" class="form-control border-3 rounded" placeholder="Username" id="username" name="username" style="font-style: italic;">
                                        </div>
                                        <div class="mb-5">
                                            <label for="password" class="form-label fs-4 fw-semibold">Password</label>
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" style="font-style: italic;">
                                        </div>
                                        <div class="mb-3 d-grid gap-2 mt-4">
                                            <button type="submit" class="btn rounded-5 text-light fw-semibold" style="background-color: #014199;">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
</body>

</html>
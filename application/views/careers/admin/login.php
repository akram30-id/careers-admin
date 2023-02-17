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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <a class="navbar-brand" href="#" style="color: #062173;">
                <img src="<?= base_url() . 'assets/img/logo.png'; ?>" style="width: 100px;">
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-around mt-5">
            <div class="card rounded-4 shadow-lg" style="width: 64rem;">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-sm-6 d-none d-lg-block" style="background-color: #014199; max-width: fit-content; max-height: fit-content; margin-top: -16px; margin-left: -12px; margin-bottom: -16px; border-radius: 25px 0px 0px 25px;">
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
                                    <div class="mb-4">
                                        <label for="username" class="form-label fs-4 fw-semibold mt-3">Username</label>
                                        <input type="text" class="form-control border-3 rounded" placeholder="Username" id="username" name="username" style="font-style: italic;">
                                    </div>
                                    
                                    <label for="password" class="form-label fs-4 fw-semibold">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" style="font-style: italic;" aria-describedby="btn-pwd-visible">
                                        <button class="btn btn-outline-primary" id="btn-pwd-visible"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="mb-3 d-grid gap-2 mt-4">
                                        <button class="btn rounded-5 text-light fw-semibold" id="btn-login" style="background-color: #014199;">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <?php if (isset($ajax_url)) {
        foreach ($ajax_url as $ajax) {
    ?>

            <script type="<?= $ajax['type'] ?>" src="<?= BASE_URL() . $ajax['src'] ?>"></script>

    <?php }
    } else {
        echo "";
    }
    ?>
</body>

</html>
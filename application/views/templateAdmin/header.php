<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nippisun Indonesia - Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() . 'assets/fontawesome/js/all.js'; ?>">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito';
            src: url(<?= base_url() . 'assets/fonts/nunito'; ?>);
        }

        #dreamJob {
            background: url(assets/img/icon/magnifying-glass-solid.svg) no-repeat scroll 7px 7px;
            padding-left: 48px;
            filter: invert(15%) sepia(51%) saturate(3427%) hue-rotate(211deg) brightness(82%) contrast(102%);
        }

        .btn-cool-blues {
            background: #2193b0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }

        .btn-pink-moon {
            background: #ec008c;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fc6767, #ec008c);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fc6767, #ec008c);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }

        .btn-mockup {
            background-color: #062173;
        }

        .btn-mockup:hover {
            border-color: #4661b0;
            color: #ffffff !important;
            background-color: #4661b0;
        }

        #search {
            box-shadow: 0 8px 16px 0 rgba(79, 173, 255, 0.5);
        }

        #allJobs {
            box-shadow: 0 8px 16px 0 rgba(188, 4, 201, 0.5);
        }

        #button-addon2 {
            position: absolute;
            right: 2px;
            top: 1px;
            bottom: 1px;
            z-index: 9;
            display: flex;
        }

        .section-one {
            background: linear-gradient(to bottom, #e6f6ff, #ffffff);
        }

        .section-two {
            margin-top: 128px;
            margin-bottom: 64px;
            background: #ffffff;
        }

        .section-four {
            margin-bottom: 128px;
        }

        .section-five {
            background: linear-gradient(to top, #e6f6ff, #ffffff);
        }

        .section-end {
            margin-top: 72px;
        }

        .btn-delete {
            background-color: #fff;
            border-color: red;
            color: red !important;
            border: 10;
        }

        .btn-delete:hover {
            background-color: red;
            color: #fff !important;
        }
    </style>

    <!-- SKELETON LOADER -->
    <link href="<?= BASE_URL() . 'assets/css/skeleton-loader/jquery.skeleton.css' ?>" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL() ?>" style="color: #062173;"><img src="<?= base_url() . 'assets/img/logo.png'; ?>" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link fw-semibold" data-bs-toggle="modal" data-bs-target="#changePasswordModal" href="#"><i class="fa-solid fa-key"></i> Ganti Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-semibold" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa-sharp fa-solid fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div style="margin-top: 80px;"></div>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-between">
                        <div class="col-10">
                            <h5 class="modal-title" id="logoutModalLabel">Apakah Anda Yakin Ingin Logout?</h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="button" class="btn btn-secondary" style="margin-right: 16px;" data-bs-dismiss="modal">Tidak</button>
                        <button class="btn btn-danger" id="btn-logout">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Modal Change Password-->
    <div class="modal fade" id="changePasswordModal" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-between mb-4">
                        <div class="col-10">
                            <h5 class="modal-title fw-bold" id="changePasswordModalLabel">Ganti Password Administrator</h5>
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <label for="old-password" class="form-label fs-4 fw-semibold">Password Lama</label>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" id="old-password" name="old-password" style="font-style: italic;" aria-describedby="btn-pwd-old-visible">
                        <button class="btn btn-outline-warning" id="btn-pwd-old-visible"><i class="bi bi-eye"></i></button>
                    </div>

                    <label for="new-password" class="form-label fs-4 fw-semibold">Password Baru</label>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" id="new-password" name="new-password" style="font-style: italic;" aria-describedby="btn-pwd-new-visible">
                        <button class="btn btn-outline-warning" id="btn-pwd-new-visible"><i class="bi bi-eye"></i></button>
                    </div>

                    <label for="confirm-password" class="form-label fs-4 fw-semibold">Password Baru</label>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" style="font-style: italic;" aria-describedby="btn-pwd-confirm-visible">
                        <button class="btn btn-outline-warning" id="btn-pwd-confirm-visible"><i class="bi bi-eye"></i></button>
                    </div>

                    <div class="my-3">
                        <div class="d-grid gap-3">
                            <button class="btn btn-warning fw-semibold rounded-5" id="btn-change-password" data-bs-dismiss="modal">Ganti Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
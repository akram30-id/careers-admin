<div class="container-lg">
    <div class="row justify-content-center my-5">
        <div class="col-sm-6">
            <div class="card border-0 rounded-5 fw-bold" style="background-color: #D9D9D9; height: 3rem;">
                <div class="card-body">
                    <nav aria-label="breadcrumb" style="margin-left: 32px; margin-top: -8px;">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() . 'Careers/vacancies'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Loker</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5 align-items-center">
        <div class="col-sm-3">
            <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 256px;">
        </div>
        <div class="col-sm-2">
            <h1 class="fw-bold text-black" style="font-size: 32pt;">IT</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
            <div class="col-sm-4 mb-3">
                <div class="card rounded-4 shadow-lg border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-1 mt-3">
                            <h5 class="fw-bold">IT Staff - Network Administrator</h5>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <p class="fw-semibold text-success" style="font-size: 9pt;">Rp. 10.000.000 - Rp. 15.000.000</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="row justify-content-evenly">
                                    <div class="col-1">
                                        <i class="fa-solid fa-briefcase fa-xs"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row justify-content-evenly">
                                    <div class="col-1">
                                        <i class="fa-solid fa-signal fa-xs"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 align-items-center">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top: -24px;">
                            <div class="col-sm-10">
                                <hr>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-sm-8">
                                <div class="d-grid gap-2">
                                    <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                    <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- LOWONGAN 2 -->
        <!-- <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-1">
                        <h5 class="fw-bold">IT - Staff Network Administrator</h5>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-3">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-briefcase fa-xs"></i>
                                </div>
                                <div class="col-5" style="margin-top: 2px;">
                                    <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-signal fa-xs"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -24px;">
                        <div class="col-sm-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- LOWONGAN 3 -->
        <!-- <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-1">
                        <h5 class="fw-bold">IT - Staff Network Administrator</h5>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-3">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-briefcase fa-xs"></i>
                                </div>
                                <div class="col-5" style="margin-top: 2px;">
                                    <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-signal fa-xs"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -24px;">
                        <div class="col-sm-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- LOWONGAN 4 -->
        <!-- <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-1">
                        <h5 class="fw-bold">IT - Staff Network Administrator</h5>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-3">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-briefcase fa-xs"></i>
                                </div>
                                <div class="col-5" style="margin-top: 2px;">
                                    <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-signal fa-xs"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -24px;">
                        <div class="col-sm-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- LOWONGAN 5 -->
        <!-- <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-1">
                        <h5 class="fw-bold">IT - Staff Network Administrator</h5>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-3">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-briefcase fa-xs"></i>
                                </div>
                                <div class="col-5" style="margin-top: 2px;">
                                    <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-signal fa-xs"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -24px;">
                        <div class="col-sm-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- LOWONGAN 6 -->
        <!-- <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-1">
                        <h5 class="fw-bold">IT - Staff Network Administrator</h5>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-3">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-briefcase fa-xs"></i>
                                </div>
                                <div class="col-5" style="margin-top: 2px;">
                                    <p class="fw-semibold" style="font-size: 9pt;">IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-evenly">
                                <div class="col-1">
                                    <i class="fa-solid fa-signal fa-xs"></i>
                                </div>
                                <div class="col-9">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;"><i>Diupload 17 jam yang lalu</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-top: -24px;">
                        <div class="col-sm-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            <div class="d-grid gap-2">
                                <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Lamar</a>
                                <a href="<?= base_url() . 'Careers/detail'; ?>" class="btn btn-secondary rounded-5 fw-bold text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
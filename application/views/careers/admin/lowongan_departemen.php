<div class="section-one">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card border-0 rounded-5 fw-bold mt-3" style="background-color: #D9D9D9; height: 3rem;">
                    <div class="card-body">
                        <nav aria-label="breadcrumb" style="margin-left: 32px; margin-top: -8px;">
                            <ol class="breadcrumb mt-1">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">List Lowongan</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $id_divisi ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-between align-items-end mb-3">
            <div class="col-sm-6">
                <div class="row mt-5 align-items-center">
                    <div class="col-4">
                        <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 128px;">
                    </div>
                    <div class="col-4">
                        <h1 class="fw-bold text-black" style="font-size: 24pt; margin-top: 32px;">IT</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-2">
                <a class="btn btn-primary rounded-5 btn-sm fw-bold" href="<?= BASE_URL() . 'addvacancy/' . $id_divisi ?>">Tambah Loker</a>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row" id="vacancy-divisi-content">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
            <div class="col-sm-4 mb-3">
                <div class="card rounded-4 shadow-lg border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center mb-1 mt-3">
                            <h5 class="fw-bold">IT Staff - Network Administrator</h5>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-10">
                                <p class="fw-semibold text-success text-center" style="font-size: 9pt;">Rp. 10.000.000 - Rp. 15.000.000</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="row justify-content-evenly">
                                    <div class="col-1">
                                        <i class="fa-solid fa-signal fa-xs"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="fw-semibold" style="font-size: 9pt; margin-top: 2px;">Experienced</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 align-items-center">
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
                                    <a href="<?= base_url() . 'Careers/apply'; ?>" class="btn btn-mockup rounded-5 fw-bold text-white">Data Pelamar</a>
                                    <div class="row">
                                        <div class="col-6 d-grid">
                                            <a class="btn btn-secondary rounded-5 fw-bold text-white" data-bs-toggle="modal" data-bs-target="#closeModal">Close</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="closeModal" tabindex="-1" aria-labelledby="closeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row justify-content-between">
                                                                <div class="col-10">
                                                                    <h5 class="modal-title fw-bold" id="closeModalLabel">Yakin Ingin Menutup Lowongan <br>IT Staff - Network Administrator?</h5>
                                                                </div>
                                                                <div class="col-1">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-end mt-5">
                                                                <div class="col-2">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                                </div>
                                                                <div class="col-2">
                                                                    <a class="btn btn-danger" href="<?= base_url() . 'Authentication/logout'; ?>">Ya</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 d-grid">
                                            <a href="<?= base_url() . 'Admin/delete'; ?>" class="btn btn-delete rounded-5 fw-bold text-white">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
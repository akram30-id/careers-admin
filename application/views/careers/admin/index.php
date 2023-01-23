<!-- <div class="content"> -->
<div class="section-one pt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body my-3">
                        <div class="container">
                            <div class="row justify-content-between mt-3 mx-3">
                                <div class="col-sm-3 align-items-center text-center mb-2">
                                    <form id="search-form">
                                        <select class="form-select rounded-5" aria-label="Default select example">
                                            <option>Level</option>
                                            <option value="1">Entry Level</option>
                                            <option value="2">Experienced</option>
                                            <option value="3">Manager</option>
                                            <option value="4">Magang</option>
                                            <option value="5">PKL</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-sm-6 align-items-center text-center">
                                    <div class="mb-3 input-group">
                                        <input class="form-control" form="search-form" style="border-radius: 32px 0px 0px 32px;" type="text" placeholder="Search" aria-label="Search" aria-describedby="btn-search">
                                        <button class="btn btn-primary" form="search-form" style="border-radius: 0px 32px 32px 0px;" type="button" id="btn-search">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn text-white fw-bold rounded-5 btn-warning" href="<?= BASE_URL() . 'addvacancy' ?>">Buka Lowongan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- IT SECTION -->
    <div class="container-lg" id="IT">
        <div class="d-flex align-items-end">
            <img src="<?= base_url() . 'assets/img/it.svg'; ?>">
            <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">IT</h1>
        </div>

        <div class="card mb-3 rounded-5 border-0 shadow" style="max-width: 48rem; max-height: 2rem;">
            <div class="card-body">
            </div>
        </div>
        <div class="card mb-3 rounded-5 border-0" style="max-width: 32rem; max-height: 2rem; background-color: #3C6CAE; margin-top: -48px;">
            <div class="card-body">
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-sm-12">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 25px;">
                    <div class="card-body">
                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-sm-8">
                                <div class="d-flex justify-content-start">
                                    <h2 class="fw-bold">IT Staff - Network Administrator</h2>
                                </div>
                                <div class="d-flex justify-content-start my-3">
                                    <h6 class="fw-semibold text-success">Rp. 10.000.000 - Rp. 15.000.000</h6>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-briefcase" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">IT</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-signal" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">Experienced</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex">
                                            <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="d-grid gap-2">
                                    <a href="<?= base_url() . 'applicant'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                    <div class="row justify-content-center">
                                        <div class="col-8 d-grid">
                                            <a class="btn btn-secondary fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#closeModal" type="button">Close</a>
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
                                        <div class="col-4 d-grid">
                                            <a class="btn btn-danger fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button"><i class="fa-solid fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row justify-content-between">
                                                                <div class="col-10">
                                                                    <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>IT Staff - Network Administrator Dari Database?</h5>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <hr>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-sm-8">
                                <div class="d-flex justify-content-start">
                                    <h2 class="fw-bold">IT Staff - Network Administrator</h2>
                                </div>
                                <div class="d-flex justify-content-start my-3">
                                    <h6 class="fw-semibold text-success">Rp. 10.000.000 - Rp. 15.000.000</h6>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-briefcase" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">IT</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-signal" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">Experienced</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex">
                                            <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="d-grid gap-2">
                                    <a href="<?= base_url() . 'applicant'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                    <div class="row justify-content-center">
                                        <div class="col-8 d-grid">
                                            <a class="btn btn-secondary fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#closeModal" type="button">Close</a>
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
                                        <div class="col-4 d-grid">
                                            <a class="btn btn-danger fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button"><i class="fa-solid fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row justify-content-between">
                                                                <div class="col-10">
                                                                    <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>IT Staff - Network Administrator Dari Database?</h5>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <hr>
                        </div>

                        <div class="row mt-3 justify-content-center align-items-center">
                            <div class="col-sm-8">
                                <div class="d-flex justify-content-start">
                                    <h2 class="fw-bold">IT Staff - Network Administrator</h2>
                                </div>
                                <div class="d-flex justify-content-start my-3">
                                    <h6 class="fw-semibold text-success">Rp. 10.000.000 - Rp. 15.000.000</h6>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-briefcase" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">IT</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="d-flex">
                                            <i class="fa-solid fa-signal" style="margin-right: 8px; margin-top: 4px;"></i>
                                            <p class="fw-semibold">Experienced</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex">
                                            <p class="fw-semibold"><i>Diupload 17 jam yang lalu</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="d-grid gap-2">
                                    <a href="<?= base_url() . 'applicant'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                    <div class="row justify-content-center">
                                        <div class="col-8 d-grid">
                                            <a class="btn btn-secondary fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#closeModal" type="button">Close</a>
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
                                        <div class="col-4 d-grid">
                                            <a class="btn btn-danger fw-bold rounded-5" data-bs-toggle="modal" data-bs-target="#deleteModal" type="button"><i class="fa-solid fa-trash"></i></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="row justify-content-between">
                                                                <div class="col-10">
                                                                    <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>IT Staff - Network Administrator Dari Database?</h5>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <hr>
                        </div>

                        <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                            <div class="col-sm-3">
                                <a href="<?= base_url() . 'Admin/listLowonganDepartemen'; ?>" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
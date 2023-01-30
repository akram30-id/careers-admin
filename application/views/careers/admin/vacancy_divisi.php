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
                                <li class="breadcrumb-item active nama-divisi" id="nama-divisi" aria-current="page"></li>
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
                    <div class="col-5">
                        <h1 class="fw-bold text-black nama-divisi" style="font-size: 24pt; margin-top: 32px;">Loading . . . </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <a class="btn btn-primary rounded-5 btn-sm fw-bold" href="<?= BASE_URL() . 'addvacancy/' . $id_divisi ?>" id="divisi" data-id="<?= $id_divisi ?>">Tambah Loker</a>
                <button class="btn btn-warning rounded-5 btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#searchByDivisi"><i class="bi bi-search"></i></button>
                <button class="btn btn-secondary rounded-5 btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#sortInDivisi"><i class="bi bi-funnel"></i></button>
            </div>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-sm-8" id="alert-search"></div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row justify-content-center mt-5" id="vacancy-divisi-content">
    </div>

    <div class="d-flex justify-content-center mt-5" id="pagination-content">
        <nav>
            <ul class="pagination">
            </ul>
        </nav>
    </div>
</div>

<!-- Modal Search -->
<div class="modal fade" id="searchByDivisi" tabindex="-1" aria-labelledby="searchByDivisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <input class="form-control form-control-lg" id="search-by-divisi" type="text" placeholder="Type Here . . . . (Press 'Enter' to find)">
            </div>
        </div>
    </div>
</div>

<!-- Modal Sort -->
<div class="modal fade" id="sortInDivisi" tabindex="-1" aria-labelledby="sortInDivisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form id="form-sort" class="m-3">
                    <h4 class="fw-bold mb-4">Filter Vacancy di Divisi <span class="nama-divisi fw-bolder"></span></h4>
                    <div class="row jutify-content-center mb-5">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select" id="sort-status">
                                <option value="">All Status</option>
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-bold">Level</label>
                            <select class="form-select" id="sort-level">
                                <option value="">All Level</option>
                                <option value="1">PKL</option>
                                <option value="2">Magang</option>
                                <option value="3">Entry Level</option>
                                <option value="4">Experienced</option>
                                <option value="5">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary" style="margin-right: 8px;" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-outline-warning" id="btn-filter-vacancy" data-bs-dismiss="modal">Filter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
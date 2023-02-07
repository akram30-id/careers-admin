<div class="container mt-5">
    <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; height: 4rem;">
        <div class="card-body">
            <nav aria-label="breadcrumb" style="margin-left: 32px;">
                <ol class="breadcrumb mt-1">
                    <li class="breadcrumb-item"><a href="<?= base_url() . 'Admin'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() . 'admin/divisi/' . $id_divisi; ?>" style="text-decoration: none;" id="nav-divisi">IT</a></li>
                    <li class="breadcrumb-item active" id="vacancy" data-idvacancy="<?= $id_vacancy ?>" aria-current="page">Detail Loker</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <h1 class="fw-bold" id="posisi-vacancy"><i>Loading . . . . . </i></h1>
            <div class="row mt-4">
                <div class="col-sm-8">
                    <p style="font-size: 14pt;" class="fw-bold" id="salary-vacancy"><i>Loading . . .</i></p>
                </div>
            </div>
            <div class="row justify-content-start mt-1">
                <div class="col-4" id="divisi">
                    <p class="text-secondary fw-semibold">Divisi : <span id="divisi-vacancy" class="text-black">HRD-GA</span></p>
                </div>
                <div class="col-4" id="level">
                    <p class="text-secondary fw-semibold">Tingkat : <span id="level-vacancy" class="text-black">Entry Level</span></p>
                </div>
                <div class="col-4" id="status">
                    <p class="text-danger fw-semibold"><i><u>Status: <span id="status-vacancy">Closed</u></i></span></p>
                </div>
            </div>
            <hr style="border-top: 3px solid #000; margin-top: -8px;">
        </div>
        <div class="col-sm-5">
            <div class="row">
                <div class="col-4">
                    <div class="d-grid">
                        <a href="<?= base_url() . 'updatevacancy/' . $id_vacancy; ?>" class="btn btn-primary rounded-5 text-white fw-bold mt-4">Edit</a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="d-grid">
                        <a href="<?= BASE_URL() . 'applicant/' . $id_vacancy ?>" class="btn btn-warning rounded-5 text-grey fw-bold mt-4">Lihat Data Pelamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-10 mt-5" id="deskripsi">
            <p class="fw-semibold" id="deskripsi-vacancy">
                <span class="text-white">
                    Kami sedang mencari talenta yang bersemangat, mempunya kepribadian dan komunikasi yang baik, dapat bekerja sendiri maupun
                    dalam tim, terampil, jujur, religious, tertarik berkarir diperusahaan yang gesit dan juga mau bergabung menjadi bagian tim IT PT. Nippisun
                    Indonesia dengan posisi Network Administrator.
                </span>
            </p>
        </div>
    </div>

    <!-- JOBDESC SECTION -->
    <div class="row mt-5">
        <div class="col-sm-4">
            <h4 class="fw-bold text-dark">Job Description</h4>
            <hr style="width: 164px; border-top: 2px solid #000;">
        </div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-8">
                <ol id="jobdesc-vacancy">
                    <li class="fw-semibold mb-2"></li>
                    <li class="fw-semibold mb-2"></li>
                    <li class="fw-semibold mb-2"></li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Requirement SECTION -->
    <div class="row mt-5">
        <div class="col-sm-4">
            <h4 class="fw-bold text-dark">Requirement</h4>
            <hr style="width: 164px; border-top: 2px solid #000;">
        </div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-8">
                <ol id="persyaratan-vacancy">
                    <li class="fw-semibold mb-2"></li>
                    <li class="fw-semibold mb-2"></li>
                    <li class="fw-semibold mb-2"></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-lg">
        <div class="row justify-content-center my-5">
            <div class="col-sm-6">
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-outline-primary rounded-5 border border-3 border-primary fw-bold mt-4" id="to-divisi">Lihat lebih banyak lowongan di departemen IT</a>
                </div>
            </div>
        </div>
    </div>
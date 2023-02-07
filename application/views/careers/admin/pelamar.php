<div class="section-one pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; height: 4rem;">
                    <div class="card-body">
                        <nav aria-label="breadcrumb" style="margin-left: 32px;">
                            <ol class="breadcrumb mt-1">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url() . 'Admin'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                                <li class="breadcrumb-item active vacancy" data-id="<?= $id_vacancy ?>" aria-current="page"><i>Loading . . . .</i></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-7">
                <div class="row">
                    <h1 class="fw-bold">Data Kandidat</h1>
                    <h1 class="fw-bold vacancy"><i>Loading . . . .</i></h1>
                </div>
            </div>
            <div class="col-sm-5">
                <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 256px;">
            </div>
            <div class="col-sm-2" style="margin-top: -16px; margin-bottom: 32px;">
                <div class="d-grid gap-2">
                    <a class="btn btn-secondary rounded-3" id="detail">Detail Lowongan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card border-0 rounded-4 shadow-lg mb-5">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <a href="<?= base_url() . 'applicant/add/' . $id_vacancy; ?>" class="btn btn-primary mt-3 mb-5" style="margin-left: 32px;">Tambah Data</a>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url() . 'applicant/banned'; ?>" class="text-danger text-end fw-bold mt-3 mb-5" style="margin-left: 32px;">Tak Memenuhi Syarat</a>
                        </div>
                    </div>
                    <div class="container-lg">
                        <div class="table-responsive">
                            <table class="table table-bordered p-3 mt-3" id="tblPelamar">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat, Tgl. Lahir</th>
                                        <th>Email</th>
                                        <th>No. Kontak</th>
                                        <th>Referensi</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Details-->
<div class="modal fade" id="modal-details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fw-bold" id="applicant-name">Modal title</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="fw-semibold text-primary mb-3">Pengalaman Kerja</h4>
                <div class="row justify-content-center mb-5" id="applicant-pengalaman">
                    <div class="col-sm-6">
                        <h5 class="institusi fw-semibold text-black">PT Nippisun Indonesia (8 bulan)</h5>
                        <p><span class="text-black fw-semibold">(Staff IT)</span> - Membuat beberapa sistem di perusahaan sehingga menghemat 2 milyar per-tahun</p>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="institusi fw-semibold text-black">Akram Dev (2 tahun)</h5>
                        <p><span class="text-black fw-semibold">(Programmer)</span> - Membuat beberapa sistem di perusahaan sehingga menghemat 2 milyar per-tahun</p>
                    </div>
                </div>

                <h4 class="fw-semibold text-primary mb-3">Pendidikan</h4>
                <div class="row mb-5" id="applicant-pendidikan">
                    <div class="col-sm-8">
                        <h5 class="institusi fw-semibold text-black">Universitas Bina Sarana Informatika</h5>
                        <p><span class="text-black fw-semibold">(S1 - Teknologi Informasi)</span> - Mendapatkan penghargaan summa-cumlaude di seluruh kampus.</p>
                    </div>
                </div>

                <h4 class="fw-semibold text-primary mb-3">Sertifikasi Keahlian</h4>
                <div class="row mb-5" id="applicant-keahlian">
                    <div class="col-sm-8">
                        <h5 class="institusi fw-semibold text-black">CCNA 1 V.7 - Introduction to Network</h5>
                        <p><span class="text-black fw-semibold">(10 January 2019 - 10 January 2023)</span> - </p> <a class="btn-sm btn btn-secondary" href="#" target="_blank"><i class="bi bi-list-stars"></i> Certificate</a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 text-center">
                        <i style="color: #a30e03; font-size: 5rem;" class="bi bi-trash3-fill"></i>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-lg-12 text-center">
                        <h3 class="fw-bold text-danger">DELETE CONFIRM</h3>
                        <p id="delete-alert"></p>
                    </div>
                </div>
                <div class="row justify-content-center mt-5 mb-4">
                    <div class="col-3">
                        <div class="d-grid">
                            <button class="btn btn-danger btn-lg" id="yes-delete">Yes</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-grid">
                            <button class="btn btn-secondary btn-lg" id="no-delete">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
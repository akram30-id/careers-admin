<div class="container mt-5">
    <div class="row">
        <div class="col-sm-5">
            <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; height: 4rem;">
                <div class="card-body">
                    <nav aria-label="breadcrumb" style="margin-left: 32px;">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() . 'Admin'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Network Administrator</li>
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
                <h1 class="fw-bold">Data Pelamar</h1>
                <h1 class="fw-bold">IT Staff - Network Administrator</h1>
            </div>
        </div>
        <div class="col-sm-5">
            <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 256px;">
        </div>
        <div class="col-sm-2" style="margin-top: -16px; margin-bottom: 32px;">
            <div class="d-grid gap-2">
                <a href="<?= base_url() . 'Admin/detail'; ?>" class="btn btn-secondary rounded-3">Detail Lowongan</a>
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
                            <a href="<?= base_url() . 'Admin/tambah_kandidat'; ?>" class="btn btn-primary mt-3 mb-5" style="margin-left: 32px;">Tambah Data</a>
                        </div>
                        <div class="col-6">
                            <a href="<?= base_url() . 'applicant/banned'; ?>" class="text-danger text-end fw-bold mt-3 mb-5" style="margin-left: 32px;">Tak Memenuhi Syarat</a>
                        </div>
                    </div>
                    <div class="container-lg">
                        <table class="table table-responsive table-bordered p-3 mt-3" id="tblPelamar">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat, Tgl. Lahir</th>
                                    <th>Email</th>
                                    <th>No. Kontak</th>
                                    <th>Pendidikan Terakhir</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>Sertifikasi Keahlian</th>
                                    <th>Referensi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bruno Nash</td>
                                    <td>Malang, 12 Juli 1997</td>
                                    <td>bruno12@mail.com</td>
                                    <td>12345678911</td>
                                    <td><a class="btn btn-primary btn-sm">S1</a></td>
                                    <td><a class="btn btn-primary btn-sm">3 Tahun</a></td>
                                    <td><a class="btn btn-warning btn-sm">Detail</a></td>
                                    <td>Website perusahaan</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mathin Charager</td>
                                    <td>Jakarta, 17 Maret 1998</td>
                                    <td>marthinchara@mail.com</td>
                                    <td>0812212212222</td>
                                    <td><a class="btn btn-primary btn-sm">S1</a></td>
                                    <td><a class="btn btn-primary btn-sm">2 Tahun</a></td>
                                    <td><a class="btn btn-warning btn-sm">Detail</a></td>
                                    <td>Website perusahaan</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nathan Hashton</td>
                                    <td>Bekasi, 22 Februari 1997</td>
                                    <td>nathanstone119@mail.com</td>
                                    <td>0833445566678</td>
                                    <td><a class="btn btn-primary btn-sm">S1</a></td>
                                    <td><a class="btn btn-primary btn-sm">4 Tahun</a></td>
                                    <td><a class="btn btn-warning btn-sm">Detail</a></td>
                                    <td>Website perusahaan</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Neil O’Brian</td>
                                    <td>Bandung, 16 Desember 1997</td>
                                    <td>neilobrian1234@mail.com</td>
                                    <td>0838998122778</td>
                                    <td><a class="btn btn-primary btn-sm">S1</a></td>
                                    <td><a class="btn btn-primary btn-sm">1 Tahun</a></td>
                                    <td><a class="btn btn-warning btn-sm">Detail</a></td>
                                    <td>Website perusahaan</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mb-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-one pt-1">
    <div class="container mt-5">
        <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; max-width: 720px;">
            <div class="card-body">
                <nav aria-label="breadcrumb" style="margin-left: 32px; margin-bottom: -16px;">
                    <ol class="breadcrumb mt-1">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">List Lowongan</a></li>
                        <li class="breadcrumb-item active vacancy" data-id="<?= $id_vacancy ?>" aria-current="page">Network Administrator</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-7">
                <div class="row">
                    <h1 class="fw-bold">Apply Ke Posisi</h1>
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

    <form id="form-add-applicant" class="needs-validation" novalidate>
        <div class="row mb-3">

            <!-- DATA PERSONAL -->
            <div class="col-sm-6 mb-3">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Data Personal</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="mb-4"></div>
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="input-nama" required>
                        <div class="invalid-feedback">
                            Nama Lengkap Masih Kosong
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-8 mb-4">
                                <label for="tempat" class="form-label fw-bold">Tempat Lahir</label>
                                <input type="text" class="form-control" id="input-tempat-lahir" required>
                                <div class="invalid-feedback">
                                    Tempat Lahir Masih Kosong
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="tglLahir" class="form-label fw-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="input-tgl-lahir" required>
                                <div class="invalid-feedback">
                                    Tanggal Lahir Masih Kosong
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label fw-bold">Alamat Email</label>
                            <input type="email" class="form-control" id="input-email" required>
                            <div class="invalid-feedback">
                                Email Masih Kosong
                            </div>
                        </div>
                        <div class=" mt-4 mb-5">
                            <label for="nomor" class="form-label fw-bold">Nomor Kontak</label>
                            <input type="number" min="0" class="form-control" id="input-kontak" required>
                            <div class="invalid-feedback">
                                Nomor Kontak Masih Kosong
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PENDIDIKAN TERAKHIR -->
            <div class="col-sm-6">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Pendidikan Terakhir</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="row mt-4">
                            <div class="col-sm-5 mb-4">
                                <label for="jenjang" class="form-label fw-bold">Jenjang</label>
                                <select name="jenjang" id="input-jenjang" class="form-select" required>
                                    <option value="">-Pilih Jenjang-</option>
                                    <option value="1">SD/Sederajat</option>
                                    <option value="2">SMP/Sederajat</option>
                                    <option value="3">SMA/Sederajat</option>
                                    <option value="4">S1/Sederajat</option>
                                    <option value="5">S2</option>
                                    <option value="6">S3</option>
                                </select>
                                <div class="invalid-feedback">
                                    Jenjang Pendidikan Belum Dipilih
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <label for="prodi" class="form-label fw-bold">Program Studi</label>
                                <input type="text" class="form-control" id="input-prodi" required>
                                <div class="invalid-feedback">
                                    Program Studi Masih Kosong
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="institusi" class="form-label fw-bold">Institusi Pendidikan</label>
                            <input type="text" class="form-control" id="input-institusi-pendidikan" required>
                            <div class="invalid-feedback">
                                Institusi Pendidikan Masih Kosong
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6 mb-3">
                                <label for="mulai" class="form-label fw-bold">Tgl Mulai</label>
                                <input type="date" class="form-control" id="input-mulai-pendidikan" required>
                                <div class="invalid-feedback">
                                    Tanggal Mulai Pendidikan Masih Kosong
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="terakhir" class="form-label fw-bold">Tgl Selesai</label>
                                <input type="date" class="form-control" id="input-berakhir-pendidikan" required>
                                <div class="invalid-feedback">
                                    Tanggal Selesai Pendidikan Masih Kosong
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-1">
                            <div class="col-sm-12">
                                <label class="form-label fw-bold">Pencapaian Selama Pendidikan</label>
                                <textarea class="form-control" id="input-achievement-pendidikan" rows="3" required></textarea>
                                <div class="invalid-feedback">
                                    Pencapaian Pendidikan Masih Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="appliance">
            <!-- PENGALAMAN KERJA -->
            <div class="col-sm-6 mb-3">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Pengalaman Kerja #1</h3>

                        <hr style="border-top: 3px solid #000; margin-top: -4px;">

                        <div class="mt-4 mb-3">
                            <label for="input-institusi" class="form-label fw-bold">Nama Institusi</label>
                            <input type="text" class="form-control input-institusi" id="input-institusi-kerja-1" required>
                            <div class="invalid-feedback">
                                Institusi Kerja Masih Kosong
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                            <input type="text" class="form-control input-jabatan" id="input-jabatan-1" required>
                            <div class="invalid-feedback">
                                Jabatan Masih Kosong
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6 mb-3">
                                <label for="input-mulai" class="form-label fw-bold">Tgl Mulai</label>
                                <input type="date" class="form-control input-mulai" id="input-mulai-kerja-1" required>
                                <div class="invalid-feedback">
                                    Tanggal Mulai Kerja Masih Kosong
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="input-selesai" class="form-label fw-bold">Tgl Berakhir</label>
                                <input type="date" class="form-control" id="input-selesai-kerja-1" required>
                                <div class="invalid-feedback">
                                    Tanggal Berakhir Kerja Masih Kosong
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-5">
                            <label class="form-label fw-bold">Pencapaian Selama Masa Kerja</label>
                            <textarea class="form-control" id="input-achievement-kerja-1" rows="5" required></textarea>
                            <input type="hidden" id="max" value="1">
                            <div class="invalid-feedback">
                                Pencapaian Kerja Masih Kosong
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-inline-flex mt-2 mb-3 align-items-center">
            <div id="appendForm">
                <a style="font-size: 2rem;" class="border-0" style="background-color: transparent;"><i class="fa-solid fa-circle-plus" style="color: #256DD9;"></i></a>
                <a class="fw-bold" style="color: #256DD9; font-size: 14pt; text-decoration: none; margin-left: 8px;">Tambah Pengalaman Kerja</a>
            </div>
        </div>

        <div class="row mt-5">
            <!-- SERTIFIKAT KEAHLIAN -->
            <div class="col-sm-6 mb-3">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Sertifikat Keahlian</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">

                        <div class="my-4">
                            <label for="jenisSertif" class="form-label fw-bold">Jenis Sertifikat</label>
                            <input type="text" class="form-control" id="input-jenis-sertifikat" required>
                            <div class="invalid-feedback">
                                Jenis Sertifikat Masih Kosong
                            </div>
                        </div>

                        <div class="row mb-4">
                            <h5 class="fw-bold">Masa Berlaku</h5>
                            <div class="col-sm-6 mb-3">
                                <label for="mulaiSertif" class="form-label fw-bold">Tgl Berlaku</label>
                                <input type="date" class="form-control" id="input-mulai-sertifikat" required>
                                <div class="invalid-feedback">
                                    Tanggal Berlaku Masih Kosong
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="terakhirSertif" class="form-label fw-bold">Tgl Expired</label>
                                <input type="date" class="form-control" id="input-berakhir-sertifikat" required>
                                <div class="invalid-feedback">
                                    Tanggal Expired Masih Kosong
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="form-label fw-bold">Upload Sertifikat</label>
                            <input class="form-control" type="file" id="upload-sertifikat" required>
                            <small><i>Ukuran max. 2 MB dengan format jpg/jpeg, png, atau pdf</i></small>
                            <div class="invalid-feedback">
                                Belum Upload Sertifikat
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REFERENSI -->
            <div class="col-sm-6">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Referensi</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="row mt-4 mb-5">
                            <div class="col-sm-12">
                                <label for="referensi" class="form-label fw-bold">Darimana Anda Mendengar Tentang Kami?</label>
                                <input type="text" class="form-control" id="input-referensi" required>
                                <div class="invalid-feedback">
                                    Referensi Masih Kosong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5" style="margin-bottom: 256px !important;">
            <div class="col-sm-4">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary rounded-5 fw-bold" type="submit" id="btn-submit-applicant">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 text-center">
                        <i style="color: #0b8000; font-size: 5rem;" class="bi bi-check-circle-fill"></i>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-lg-12 text-center">
                        <h3 class="fw-bold text-success">SUCCESS</h3>
                        <p id="vacancy-alert"></p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3 mb-4">
                    <div class="col-6">
                        <div class="d-grid">
                            <a class="btn btn-success btn-lg" id="success-submit">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
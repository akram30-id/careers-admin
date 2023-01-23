<div class="container mt-5">
    <div class="row">
        <div class="col-sm-5">
            <div class="card border-0 rounded-4 fw-bold" style="background-color: #D9D9D9; height: 4rem;">
                <div class="card-body">
                    <nav aria-label="breadcrumb" style="margin-left: 32px;">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() . 'Careers/vacancies'; ?>" style="text-decoration: none;">List Lowongan</a></li>
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
                <h1 class="fw-bold">Apply Ke Posisi</h1>
                <h1 class="fw-bold">IT Staff - Network Administrator</h1>
            </div>
        </div>
        <div class="col-sm-5">
            <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 256px;">
        </div>
        <div class="col-sm-2" style="margin-top: -16px; margin-bottom: 32px;">
            <div class="d-grid gap-2">
                <a href="<?= base_url() . 'Careers/vacancies'; ?>" class="btn btn-secondary rounded-3">Detail Lowongan</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">

    <form id="section-1">
        <div class="row mb-3">

            <!-- DATA PERSONAL -->
            <div class="col-sm-6 mb-3">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Data Personal</h3>
                        <hr style="border-top: 3px solid #000; margin-top: -4px;">
                        <div class="mb-4"></div>
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama">
                        <div class="row mt-4">
                            <div class="col-sm-8 mb-4">
                                <label for="tempat" class="form-label fw-bold">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat">
                            </div>
                            <div class="col-sm-4">
                                <label for="tglLahir" class="form-label fw-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tglLahir">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="form-label fw-bold">Alamat Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class=" mt-4 mb-5">
                            <label for="nomor" class="form-label fw-bold">Nomor Kontak</label>
                            <input type="number" class="form-control" id="nomor">
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
                                <select name="jenjang" id="" class="form-select">
                                    <option value="">-Pilih Jenjang-</option>
                                    <option value="">SMP/Sederajat</option>
                                    <option value="">SMA/Sederajat</option>
                                    <option value="">S1/Sederajat</option>
                                    <option value="">S2</option>
                                    <option value="">S3</option>
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <label for="prodi" class="form-label fw-bold">Program Studi</label>
                                <input type="text" class="form-control" id="prodi">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="institusi" class="form-label fw-bold">Institusi Pendidikan</label>
                            <input type="text" class="form-control" id="institusi">
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-6 mb-3">
                                <label for="mulai" class="form-label fw-bold">Tgl Mulai</label>
                                <input type="date" class="form-control" id="mulai">
                            </div>
                            <div class="col-sm-6">
                                <label for="terakhir" class="form-label fw-bold">Tgl Berakhir</label>
                                <input type="date" class="form-control" id="terakhir">
                            </div>
                        </div>
                        <div class="row mt-4 mb-1">
                            <div class="col-sm-12">
                                <label class="form-label fw-bold">Pencapaian Selama Pendidikan</label>
                                <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- PENGALAMAN KERJA -->
            <div class="col-sm-6">
                <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                    <div class="card-body">
                        <h3 class="fw-bold text-black">Pengalaman Kerja</h3>

                        <hr style="border-top: 3px solid #000; margin-top: -4px;">

                        <div class="mt-4 mb-3">
                            <label for="institusiKerja" class="form-label fw-bold">Nama Institusi</label>
                            <input type="text" class="form-control" id="institusiKerja">
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan">
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <label for="mulaiKerja" class="form-label fw-bold">Tgl Mulai</label>
                                <input type="date" class="form-control" id="mulaiKerja">
                            </div>
                            <div class="col-sm-6">
                                <label for="terakhirKerja" class="form-label fw-bold">Tgl Berakhir</label>
                                <input type="date" class="form-control" id="terakhirKerja">
                            </div>
                        </div>
                        <div class="mt-4 mb-5">
                            <label class="form-label fw-bold">Pencapaian Selama Masa Kerja</label>
                            <textarea class="form-control" name="deskripsiKerja" rows="5"></textarea>
                        </div>

                        <div id="appliance"></div>

                        <div id="appendForm">
                            <div class="row mt-1 mb-5 align-items-center justify-content-start">
                                <div class="col-1">
                                    <a style="font-size: 24pt;" class="border-0" style="background-color: transparent;"><i class="fa-solid fa-circle-plus fa-2x" style="color: #256DD9;"></i></a>
                                </div>
                                <div class="col-10">
                                    <a class="fw-bold" style="color: #256DD9; font-size: 20pt; text-decoration: none; margin-left: 32px;">Tambah Pengalaman Kerja</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <input type="text" class="form-control" id="jenisSertif">
                        </div>

                        <div class="row mb-4">
                            <h5 class="fw-bold">Masa Berlaku</h5>
                            <div class="col-sm-6">
                                <label for="mulaiSertif" class="form-label fw-bold">Tgl Mulai</label>
                                <input type="date" class="form-control" id="mulaiSertif">
                            </div>
                            <div class="col-sm-6">
                                <label for="terakhirSertif" class="form-label fw-bold">Tgl Berakhir</label>
                                <input type="date" class="form-control" id="terakhirSertif">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea class="form-control" name="deskripsiKerja" rows="5"></textarea>
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
                                <input type="text" class="form-control" id="referensi">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5" style="margin-bottom: 256px !important;">
            <div class="col-sm-4">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary rounded-5 fw-bold" type="submit">Kirim</button>
                </div>
            </div>
        </div>
    </form>
</div>
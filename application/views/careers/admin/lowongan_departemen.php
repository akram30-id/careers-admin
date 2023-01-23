<div class="container-lg">
    <div class="row justify-content-center my-5">
        <div class="col-sm-6">
            <div class="card border-0 rounded-5 fw-bold" style="background-color: #D9D9D9; height: 3rem;">
                <div class="card-body">
                    <nav aria-label="breadcrumb" style="margin-left: 32px; margin-top: -8px;">
                        <ol class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>" style="text-decoration: none;">Career</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() . 'Admin'; ?>" style="text-decoration: none;">List Lowongan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Loker</li>
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
                <div class="col-6">
                    <img src="<?= base_url() . 'assets/img/it.svg'; ?>" style="width: 256px;">
                </div>
                <div class="col-4">
                    <h1 class="fw-bold text-black" style="font-size: 32pt;">IT</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary rounded-5 btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modalTambahLowongan" style="margin-top: -64px;">Tambah Loker</a>
            <div class="modal fade" id="modalTambahLowongan" aria-labelledby="modalTambahLowonganLabel">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="modalTambahLowonganLabel">Tambah Lowongan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="divisi">
                                            <h5 class="fw-bold">Divisi <sup><a href="<?= base_url() . 'Admin/tambah_divisi'; ?>" class="fw-bold" style="text-decoration: none;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Klik untuk tambah divisi.">+</a></sup> </h5>
                                        </label>
                                        <select name="divisi" id="divisi" class="form-select">
                                            <option value="">Pilih Divisi</option>
                                            <option value="IT">IT</option>
                                            <option value="legal">Legal</option>
                                            <option value="hrd">HRD</option>
                                            <option value="produksi">Produksi</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="level">
                                            <h5 class="fw-bold">Level</h5>
                                        </label>
                                        <select name="level" id="level" class="form-select">
                                            <option value="">Pilih Level</option>
                                            <option value="experienced">Experienced</option>
                                            <option value="manager">Manager</option>
                                            <option value="entryLevel">Entry Level</option>
                                            <option value="magang">Magang</option>
                                            <option value="pkl">PKL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="posisi">
                                        <h5 class="fw-bold">Posisi</h5>
                                    </label>
                                    <input type="text" class="form-control" name="posisi" placeholder="Contoh: Staff Akunting">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="descLowongan">
                                        <h5 class="fw-bold">Deskripsi Lowongan</h5>
                                    </label>
                                    <textarea name="descLowongan" id="descLowongan" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <h5 class="fw-bold">Persyaratan</h5>
                                    <div class="row mb-3 mt-3">
                                        <div class="col-5">
                                            <label for="gender">
                                                <p class="fw-bold">Gender</p>
                                            </label>
                                            <select name="gender" id="gender" class="form-select rounded-3" style="margin-top: -16px;">
                                                <option value="">-Pilih gender-</option>
                                                <option value="L">Pria</option>
                                                <option value="P">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="col-5">
                                            <label for="usia">
                                                <p class="fw-bold">Usia</p>
                                            </label>
                                            <div class="input-group" style="margin-top: -16px;">
                                                <input type="number" name="usia" class="form-control" style="border-radius: 10px 0px 0px 10px;">
                                                <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <label for="pendidikan">
                                                <p class="fw-bold">Pendidikan Terakhir</p>
                                            </label>
                                            <select name="gender" id="gender" class="form-select rounded-3" style="margin-top: -16px;">
                                                <option value="">-Pilih Pendidikan-</option>
                                                <option value="smp">SMP/Sederajat</option>
                                                <option value="sma">SMA/Sederajat</option>
                                                <option value="d3">D3</option>
                                                <option value="s1">D4/S1</option>
                                                <option value="s2">S2</option>
                                                <option value="s3">S3</option>
                                            </select>
                                        </div>
                                        <div class="col-7">
                                            <label for="jurusan">
                                                <p class="fw-bold">Jurusan</p>
                                            </label>
                                            <input type="text" name="jurusan" id="jurusan" class="form-control rounded-3" style="margin-top: -16px;" placeholder="Contoh: Teknik Informatika">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-5">
                                            <label for="pendidikan">
                                                <p class="fw-bold">Dosis Vaksinasi</p>
                                            </label>
                                            <select name="vaksin" id="vaksin" class="form-select rounded-3" style="margin-top: -16px;">
                                                <option value="">-Pilih Dosis-</option>
                                                <option value="dosis1">Dosis 1</option>
                                                <option value="dosis2">Dosis 2</option>
                                                <option value="booster">Dosis Booster</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <label for="pengalaman">
                                                <p class="fw-bold">Pengalaman Kerja</p>
                                            </label>
                                            <div class="input-group" style="margin-top: -16px;">
                                                <input type="number" name="pengalaman" class="form-control" style="border-radius: 10px 0px 0px 10px;">
                                                <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <label for="pengalaman">
                                                <p class="fw-bold">Bidang Pengalaman</p>
                                            </label>
                                            <input type="text" name="bidang" id="bidang" class="form-control rounded-3" placeholder="Contoh: Staff Akunting" style="margin-top: -16px;">
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <textarea name="persyaratan" id="persyaratan" class="form-control" style="height: 200px;"></textarea>
                                        <label for="persyaratan">Tambahkan Persyaratan Lainnya Disini</label>
                                    </div>
                                    <small class="fw-bold" style="font-size: 8pt;">Pisahkan tiap poin dengan tanda ;</small>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="jobDetail">
                                        <h5 class="fw-bold">Job Detail</h5>
                                    </label>
                                    <div class="form-floating">
                                        <textarea name="jobdesc" id="jobdesc" class="form-control" style="height: 200px;"></textarea>
                                        <label for="persyaratan">Tuliskan Job Description Disini</label>
                                    </div>
                                    <small class="fw-bold" style="font-size: 8pt;">Pisahkan tiap poin dengan tanda ;</small>
                                </div>
                                <div class="row mb-3 mt-3">
                                    <h5 class="fw-bold">Range Salary</h5>
                                    <div class="col-5">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                            <input type="text" name="minSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Min.">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                            <input type="text" name="maxSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Max.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mt-3">
                                        <label for="jobDetail">
                                            <h5 class="fw-bold">Expired Date</h5>
                                        </label>
                                        <div class="col-6">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap2 mt-5 mt-3">
                                    <button class="btn-mockup btn fw-bold rounded-5 text-white" type="submit">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
<div class="section-one">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center" id="submit-alert"></div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card border-0 shadow-lg p-3" style="border-radius: 32px; width: 1000px; margin-top: 64px;">
                <div class="card-body">
                    <h2 class="fw-bold text-center mt-3 mb-2">Tambah Lowongan</h2>
                    <div class="progress mx-5 mb-5">
                        <div class="progress-bar" role="progressbar" style="width: 16.7%; font-size: 8pt;" aria-valuemin="1" aria-valuemax="6">1/6</div>
                    </div>
                    <div id="vacancy">
                        <form id="form-add-vacancy" novalidate>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="row mt-2 mb-3 justify-content-center">
                                        <!-- DIVISI -->
                                        <div class="col-md-6 mb-3">
                                            <label for="divisi">
                                                <h5 class="fw-bold">Divisi <sup><a href="<?= base_url() . 'divisi'; ?>" class="fw-bold" style="text-decoration: none;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" title="Klik untuk tambah divisi.">+</a></sup> </h5>
                                            </label>
                                            <select form="form-add-vacancy" name="divisi" id="input-divisi" class="form-select" required>
                                                <option value="">Pilih Divisi</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Divisi belum dipilih
                                            </div>
                                        </div>
                                        <!-- LEVEL -->
                                        <div class="col-md-6 mb-3">
                                            <label for="level">
                                                <h5 class="fw-bold">Level</h5>
                                            </label>
                                            <select form="form-add-vacancy" name="level" id="input-level" class="form-select" required>
                                                <option value="">Pilih Level</option>
                                                <option value="5">Manager</option>
                                                <option value="4">Experienced</option>
                                                <option value="3">Entry Level</option>
                                                <option value="2">Magang</option>
                                                <option value="1">PKL</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Level belum dipilih
                                            </div>
                                        </div>
                                    </div>

                                    <!-- POSISI -->
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="posisi">
                                                    <h5 class="fw-bold">Posisi</h5>
                                                </label>
                                                <input form="form-add-vacancy" type="text" id="input-posisi" class="form-control" name="posisi" placeholder="Contoh: Staff Akunting" required>
                                                <div class="invalid-feedback">
                                                    Posisi belum diisi
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DESKRIPSI -->
                                    <div class="row mb-3 justify-content-center">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="descLowongan">
                                                    <h5 class="fw-bold">Deskripsi Lowongan</h5>
                                                </label>
                                                <textarea form="form-add-vacancy" name="descLowongan" id="input-deskripsi" rows="3" class="form-control" required></textarea>
                                                <div class="invalid-feedback">
                                                    Deskripsi belum diisi
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- EXPIRED -->
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jobDetail">
                                                            <h5 class="fw-bold">Expired Date</h5>
                                                        </label>
                                                        <input form="form-add-vacancy" type="date" class="form-control" id="input-expired" required>
                                                        <small>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox" id="expired-date-check">
                                                                <label class="form-check-label" for="expired-date-check">
                                                                    Set Nanti Saja
                                                                </label>
                                                            </div>
                                                        </small>
                                                        <div class="invalid-feedback">
                                                            Expired Date belum diisi
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <!-- BUTTON NEXT -->
                                <div class="d-flex justify-content-between mt-3">
                                    <button class="btn btn-secondary rounded-5 text-white" id="btn-back-home"><i class="bi bi-arrow-left"></i> Back to Home Page</button>
                                    <button form="form-add-vacancy" class="btn btn-mockup rounded-5 text-white" type="submit" id="btn-next-vacancy">Next <i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form id="form-add-persyaratan" novalidate>
                        <div id="persyaratan">
                            <div class="row mt-5 mb-3 justify-content-center">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h5 class="fw-bold mb-2">Persyaratan</h5>

                                        <div class="row mb-3">
                                            <!-- GENDER -->
                                            <div class="col-md-5 mb-3">
                                                <label for="gender">
                                                    <p class="fw-bold">Gender</p>
                                                </label>
                                                <select form="form-add-persyaratan" name="gender" id="input-gender" class="form-select rounded-3" style="margin-top: -16px;" required>
                                                    <option value="">-Pilih gender-</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                    <option value="Semua">Semua Gender</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Gender belum dipilih
                                                </div>
                                            </div>
                                            <!-- USIA -->
                                            <div class="col-md-7">
                                                <label for="usia" style="margin-bottom: -16px;">
                                                    <p class="fw-bold">Usia</p>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="input-group">
                                                            <input form="form-add-persyaratan" type="number" name="min_usia" class="form-control" id="input-min-usia" style="border-radius: 10px 0px 0px 10px;" placeholder="Minimum" required>
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                                            <div class="invalid-feedback">
                                                                Minimum Usia belum diisi
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input type="number" name="max_usia" class="form-control" style="border-radius: 10px 0px 0px 10px;" id="input-max-usia" placeholder="Maximum" required>
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Tahun</span>
                                                            <div class="invalid-feedback">
                                                                Maximum Usia belum diisi
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <small>
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="usia-check">
                                                        <label class="form-check-label" for="usia-check">
                                                            Semua Usia
                                                        </label>
                                                    </div>
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <!-- PENDIDIKAN -->
                                            <div class="col-md-5 mb-2">
                                                <label for="pendidikan">
                                                    <p class="fw-bold">Pendidikan Terakhir</p>
                                                </label>
                                                <select form="form-add-persyaratan" name="pendidikan" id="input-pendidikan" class="form-select rounded-3" style="margin-top: -16px;" required>
                                                    <option value="">-Pilih Pendidikan-</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Pendidikan Terakhir belum dipilih
                                                </div>
                                            </div>
                                            <!-- JURUSAN -->
                                            <div class="col-md-7">
                                                <label for="jurusan">
                                                    <p class="fw-bold">Jurusan</p>
                                                </label>
                                                <input form="form-add-persyaratan" type="text" name="jurusan" id="input-jurusan" class="form-control rounded-3" style="margin-top: -16px;" placeholder="Contoh: Teknik Informatika" required>
                                                <div class="invalid-feedback">
                                                    Jurusan belum diisi
                                                </div>
                                            </div>
                                        </div>

                                        <!-- VAKSIN -->
                                        <div class="row mb-3">
                                            <div class="col-md-5">
                                                <label for="pendidikan">
                                                    <p class="fw-bold">Dosis Vaksinasi</p>
                                                </label>
                                                <select form="form-add-persyaratan" name="vaksin" id="input-vaksin" class="form-select rounded-3" style="margin-top: -16px;" required>
                                                    <option value="">-Pilih Dosis-</option>
                                                    <option value="Dosis 1">Dosis 1</option>
                                                    <option value="Dosis 2">Dosis 2</option>
                                                    <option value="Dosis Booster">Dosis Booster</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Dosis Vaksinasi belum dipilih
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON NEXT PREVIOUS -->
                            <div class="d-flex justify-content-between mx-3">
                                <button class="btn btn-secondary rounded-5 text-white" id="btn-prev-persyaratan"><i class="bi bi-arrow-left"></i> Previous</button>
                                <button class="btn btn-mockup rounded-5 text-white" type="submit" id="btn-next-persyaratan">Next <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <form id="form-add-pengalaman" novalidate>
                        <div id="pengalaman">
                            <div class="row justify-content-center mt-5 mb-3">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <h5 class="fw-bold mb-2">Pengalaman Kerja</h5>
                                        <div class="row mb-3">
                                            <!-- LAMA KERJA -->
                                            <div class="col-md-6 mb-3">
                                                <label for="pengalaman">
                                                    <p class="fw-bold">Lama Kerja</p>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <div class="input-group" style="margin-top: -16px;">
                                                            <input form="form-add-pengalaman" min="0" type="number" name="pengalaman" id="input-min-pengalaman" class="form-control" style="border-radius: 10px 0px 0px 10px;" placeholder="Min." required>
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Thn</span>
                                                            <div class="invalid-feedback">
                                                                Minimum Pengalaman belum diisi
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group" style="margin-top: -16px;">
                                                            <input form="form-add-pengalaman" type="number" name="pengalaman" id="input-max-pengalaman" min="0" class="form-control" style="border-radius: 10px 0px 0px 10px;" placeholder="Max." required>
                                                            <span class="input-group-text" id="basic-addon2" style="border-radius: 0px 10px 10px 0px;">Thn</span>
                                                            <div class="invalid-feedback">
                                                                Maximum Pengalaman belum diisi
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- BIDANG PENGALAMAN -->
                                            <div class="col-md-10 mb-3">
                                                <label for="pengalaman">
                                                    <p class="fw-bold">Bidang Pengalaman</p>
                                                </label>
                                                <input form="form-add-pengalaman" type="text" name="bidang" id="input-bidang-pengalaman" class="form-control rounded-3" placeholder="Contoh: Staff Akunting" style="margin-top: -16px;" required>
                                                <div class="invalid-feedback">
                                                    Bidang Pengalaman belum diisi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- BUTTON NEXT PREVIOUS -->
                                <div class="d-flex justify-content-between mx-3">
                                    <button class="btn btn-secondary rounded-5 text-white" id="btn-prev-pengalaman"><i class="bi bi-arrow-left"></i> Previous</button>
                                    <button class="btn btn-mockup rounded-5 text-white" form="form-add-pengalaman" type="submit" id="btn-next-pengalaman">Next <i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div id="persyaratan-2">
                        <div class="row justify-content-center mt-5 mb-3">
                            <!-- PERSYARATAN TAMBAHAN -->
                            <div class="col-md-10 mb-3">
                                <div id="persyaratan-tambahan">
                                    <label for="persyaratan">
                                        <h4 class="fw-bold">Persyaratan Tambahan</h4>
                                    </label>
                                    <div class="d-flex align-items-center mb-2 mt-3 persyaratan-section">
                                        <input type="text" name="input-persyaratan" class="form-control input-persyaratan" placeholder="Contoh: Mahir menggunakan Ms. Excel" required>
                                    </div>
                                </div>
                                <p id="add-input-persyaratan"><i class="bi bi-plus-circle"></i> Tambah Persyaratan</p>
                            </div>
                        </div>

                        <!-- BUTTON NEXT PREVIOUS -->
                        <div class="d-flex justify-content-between mx-3">
                            <button class="btn btn-secondary rounded-5 text-white" id="btn-prev-persyaratan-2"><i class="bi bi-arrow-left"></i> Previous</button>
                            <button class="btn btn-mockup rounded-5 text-white" id="btn-next-persyaratan-2">Next <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>

                    <div id="jobdesc">
                        <div class="row justify-content-center mt-5 mb-3">
                            <!-- JOB DESCRIPTION -->
                            <div class="col-md-10 mb-3">
                                <div id="jobdesc-tambahan">
                                    <label for="jobdesc">
                                        <h4 class="fw-bold">Job Description</h4>
                                    </label>
                                    <div class="d-flex align-items-center mb-2 mt-3 jobdesc-section">
                                        <input type="text" name="input-jobdesc" class="form-control input-jobdesc mb-2 mt-3" placeholder="Contoh: Bertanggung jawab dalam mengelola data-data pengiriman">
                                    </div>
                                </div>
                                <p id="add-input-jobdesc"><i class="bi bi-plus-circle"></i> Tambah Jobdesc</p>
                            </div>
                        </div>

                        <!-- BUTTON NEXT - PREVIOUS -->
                        <div class="d-flex justify-content-between mx-3">
                            <button class="btn btn-secondary rounded-5 text-white" id="btn-prev-jobdesc"><i class="bi bi-arrow-left"></i> Previous</button>
                            <button class="btn btn-mockup rounded-5 text-white" id="btn-next-jobdesc">Next <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>

                    <form id="form-add-salary" novalidate>
                        <div id="salary">
                            <div class="row justify-content-center mt-5 mb-3">
                                <!-- SALARY -->
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="salary">
                                            <h5 class="fw-bold">Range Salary</h5>
                                        </label>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                                    <input form="form-add-salary" type="text" id="input-min-salary" name="minSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Min." required>
                                                    <div class="invalid-feedback">
                                                        Minimum Salary belum diisi
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon2" style="border-radius: 10px 0px 0px 10px;">Rp. </span>
                                                    <input form="form-add-salary" type="text" id="input-max-salary" name="maxSalary" class="form-control number-separator" style="border-radius: 0px 10px 10px 0px;" placeholder="Max." required>
                                                    <div class="invalid-feedback">
                                                        Maximum Salary belum diisi
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <small>
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="salary-check">
                                                        <label form="form-add-salary" class="form-check-label" for="salary-check">
                                                            Negotiable
                                                        </label>
                                                    </div>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON NEXT - PREVIOUS -->
                            <div class="d-flex justify-content-between mx-3">
                                <button class="btn btn-secondary rounded-5 text-white" id="btn-prev-salary"><i class="bi bi-arrow-left"></i> Previous</button>
                                <button form="form-add-salary" type="submit" class="btn btn-success rounded-5 text-white" id="btn-submit-vacancy">Submit <i class="bi bi-check-lg"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            <a href="<?= BASE_URL() . 'addvacancy' ?>" class="btn btn-success btn-lg">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
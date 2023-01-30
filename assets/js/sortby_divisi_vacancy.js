import { base_server, base_client } from "./config.js";
import { LatestVacancy } from "./latest_vacancy.js";

const SortByDivisi = () => {

    $("#sort-by-divisi").on("change", function () {
        let id_divisi = $("#sort-by-divisi option").filter(':selected').val()

        $("#content-vacancy").html(`<h3 class="fw-bold text-center my-5"><i>Loading . . . .</i></h3>`)

        if (id_divisi != "") {
            $.ajax({
                url: base_server + 'vacancy/s-divisi/' + id_divisi,
                type: 'GET',
                dataType: 'json',
                success: function (result) {
                    const nama_divisi = $("#sort-by-divisi option:selected").text()
                    $("#content-vacancy").html("")
                    if (result.response.status == 200) {
                        $("#input-search-vacancy").val("")
                        $(".alert-vacancy").html("")
                        $("#content-vacancy").html(`
                                <div class="container-lg mt-5" id="${result.response.data[nama_divisi][0].id_divisi}">
                                <div class="d-flex align-items-end">
                                    <img src="${base_client}assets/img/hrd.svg">
                                    <h1 class="text-primary fw-bold" id="divisi" data-id="${result.response.data[nama_divisi][0].id_divisi}" style="margin-bottom: 32px;">${nama_divisi}</h1>
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
                                            <div class="card-body" id="vacancy-${result.response.data[nama_divisi][0].id_divisi}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)

                        let content = ''
                        for (let i = 0; i < result.response.data[nama_divisi].length; i++) {
                            const min_salary = result.response.data[nama_divisi][i].min_salary
                            const max_salary = result.response.data[nama_divisi][i].max_salary
                            const posisi = result.response.data[nama_divisi][i].posisi
                            let level = result.response.data[nama_divisi][i].level
                            const created_at = result.response.data[nama_divisi][i].created_at
                            const id_vacancy = result.response.data[nama_divisi][i].id_vacancy
                            const status = result.response.data[nama_divisi][i].status

                            const origin = new Date(`${created_at}`)
                            const now = new Date()

                            let dateDiff = ''

                            if (origin.getFullYear() == now.getFullYear()) {
                                if (origin.getMonth() == now.getMonth()) {
                                    if (origin.getDate() == now.getDate()) {
                                        if (origin.getHours() == now.getHours()) {
                                            if (origin.getMinutes() == now.getMinutes()) {
                                                dateDiff = `Diupload ${(now.getSeconds()) - (origin.getSeconds())} detik yang lalu`
                                            } else {
                                                dateDiff = `Diupload ${(now.getMinutes()) - (origin.getMinutes())} menit yang lalu`
                                            }
                                        } else {
                                            dateDiff = `Diupload ${(now.getHours()) - (origin.getHours())} jam yang lalu`
                                        }
                                    } else {
                                        dateDiff = `Diupload ${(now.getDate()) - (origin.getDate())} hari yang lalu`
                                    }
                                } else {
                                    dateDiff = `Diupload ${(now.getMonth()) - (origin.getMonth())} bulan yang lalu`
                                }
                            } else {
                                dateDiff = `Diupload ${(now.getFullYear()) - (origin.getFullYear())} tahun yang lalu`
                            }

                            switch (level) {
                                case "1":
                                    level = "PKL"
                                    break;

                                case "2":
                                    level = "Magang"
                                    break;

                                case "3":
                                    level = "Entry Level"
                                    break;

                                case "4":
                                    level = "Experienced"
                                    break;

                                case "5":
                                    level = "Manager"
                                    break;

                                default:
                                    level = ""
                                    break;
                            }

                            let salary = ''
                            if (min_salary == "0" && max_salary == "0") {
                                salary = 'Negotiable Salary'
                            } else {
                                salary = `Rp.${min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")} - Rp.${max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}`
                            }

                            if (status === 'Close') {
                                content = `
                                <div class="row mt-3 justify-content-center align-items-center">
                                    <div class="col-sm-8">
                                        <div class="d-flex justify-content-start">
                                            <h2 class="fw-bold text-danger"><a href="${base_client}admin/detail/${id_divisi}/${id_vacancy}" class="text-decoration-none text-danger">${posisi}</a></h2>
                                        </div>
                                        <div class="d-flex justify-content-start my-3">
                                            <h6 class="fw-semibold text-danger">${salary}</h6>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="d-flex">
                                                    <i class="fa-solid fa-briefcase" style="margin-right: 8px; margin-top: 4px;"></i>
                                                    <p class="fw-semibold">${nama_divisi}</p>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="d-flex">
                                                    <i class="fa-solid fa-signal" style="margin-right: 8px; margin-top: 4px;"></i>
                                                    <p class="fw-semibold">${level}</p>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="d-flex">
                                                    <p class="fw-semibold text-danger"><i>Closed</i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="d-grid gap-2">
                                            <a href="<?= base_url() . 'applicant'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                            <div class="row justify-content-center">
                                                <div class="col-8 d-grid">
                                                    <button class="btn btn-success fw-bold rounded-5 btn-modal-open" data-bs-toggle="modal" data-id="${id_vacancy}" data-bs-target="#openModal-${id_vacancy}" type="button" id="btn-confirm-open">Open</button>
                                                </div>
                                                <!-- Modal Close -->
                                                <div class="modal fade openModal" id="openModal-${id_vacancy}" tabindex="-1" aria-labelledby="openModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-10">
                                                                        <h5 class="modal-title fw-bold" id="openLabel">Ingin Membuka Lowongan <br>${posisi}?</h5>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-5">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 16px;">Tidak</button>

                                                                    <button class="btn btn-success btn-open-vacancy" data-id=${id_vacancy} data-bs-dismiss="modal">Buka</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-grid">
                                                    <button class="btn btn-danger fw-bold rounded-5 btn-modal-delete" data-bs-toggle="modal" data-id="${id_vacancy}" data-bs-target="#deleteModal-${id_vacancy}" type="button"><i class="fa-solid fa-trash"></i></button>
                                                </div>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="deleteModal-${id_vacancy}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-10">
                                                                        <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>${posisi}?</h5>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-5">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 16px;">Tidak</button>

                                                                    <button class="btn btn-danger btn-delete-vacancy" data-id=${id_vacancy} data-bs-dismiss="modal">Hapus</button>
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
                            `
                            } else {
                                content = `
                                    <div class="row mt-3 justify-content-center align-items-center">
                                            <div class="col-sm-8">
                                                <div class="d-flex justify-content-start">
                                                    <h2 class="fw-bold"><a href="${base_client}admin/detail/${id_divisi}/${id_vacancy}" class="text-decoration-none text-black">${posisi}</a></h2>
                                                </div>
                                                <div class="d-flex justify-content-start my-3">
                                                    <h6 class="fw-semibold text-success">${salary}</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="d-flex">
                                                            <i class="fa-solid fa-briefcase" style="margin-right: 8px; margin-top: 4px;"></i>
                                                            <p class="fw-semibold">${nama_divisi}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <div class="d-flex">
                                                            <i class="fa-solid fa-signal" style="margin-right: 8px; margin-top: 4px;"></i>
                                                            <p class="fw-semibold">${level}</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="d-flex">
                                                            <p class="fw-semibold"><i>${dateDiff}</i></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="d-grid gap-2">
                                                    <a href="<?= base_url() . 'applicant'; ?>" class="btn btn-mockup fw-bold text-white rounded-5">Data Pelamar</a>
                                                    <div class="row justify-content-center">
                                                        <div class="col-8 d-grid">
                                                            <a class="btn btn-secondary fw-bold rounded-5 btn-modal-close" data-bs-toggle="modal" data-id="${id_vacancy}" data-bs-target="#closeModal-${id_vacancy}" type="button" id="btn-confirm-close">Close</a>
                                                        </div>
                                                        <!-- Modal Close -->
                                                        <div class="modal fade closeModal" id="closeModal-${id_vacancy}" tabindex="-1" aria-labelledby="closeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-10">
                                                                                <h5 class="modal-title fw-bold" id="closeLabel">Yakin Ingin Menutup Lowongan <br>${posisi}?</h5>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end mt-5">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 16px;">Tidak</button>

                                                                            <button class="btn btn-danger btn-close-vacancy" data-id=${id_vacancy} data-bs-dismiss="modal">Tutup</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 d-grid">
                                                            <button class="btn btn-danger fw-bold rounded-5 btn-modal-delete" data-bs-toggle="modal" data-id="${id_vacancy}" data-bs-target="#deleteModal-${id_vacancy}" type="button"><i class="fa-solid fa-trash"></i></button>
                                                        </div>
                                                        <!-- Modal Delete -->
                                                        <div class="modal fade" id="deleteModal-${id_vacancy}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <div class="row justify-content-between">
                                                                            <div class="col-10">
                                                                                <h5 class="modal-title fw-bold" id="deleteModalLabel">Yakin Ingin Menghapus Lowongan <br>${posisi}?</h5>
                                                                            </div>
                                                                            <div class="col-1">
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-flex justify-content-end mt-5">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-right: 16px;">Tidak</button>

                                                                            <button class="btn btn-danger btn-delete-vacancy" data-id=${id_vacancy} data-bs-dismiss="modal">Hapus</button>
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
                                `
                            }

                            $(`#vacancy-${result.response.data[nama_divisi][0].id_divisi}`).append(content)
                        }

                        $(`#vacancy-${result.response.data[nama_divisi][0].id_divisi}`).append(`
                                <div class="d-flex justify-content-center" style="margin-bottom: -56px;">
                                    <div class="col-sm-3">
                                        <a href="${base_client}admin/listLowonganDepartemen/${result.response.data[nama_divisi][0].id_divisi}" class="btn btn-block btn-lg btn-light fw-bold text-primary rounded-5 shadow">Show More</a>
                                    </div>
                                </div>
                            `)

                    } else {
                        $("#content-vacancy").html(`
                                <div class="container-lg mt-5">
                                <div class="d-flex align-items-end">
                                    <img src="${base_client}assets/img/hrd.svg">
                                    <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">${nama_divisi}</h1>
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
                                            <div class="card-body" id="vacancy-NA">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)

                        let contentNA = `
                                <div class="row mt-3 justify-content-center align-items-center">
                                    <div class="col-sm-8 text-center">
                                        <h3 class="fw-bold my-5"><i>No Vacancy Available</i></h3>
                                    </div>
                                </div>
                            `
                        $(`#vacancy-NA`).append(contentNA)
                    }
                }
            })

        } else {
            $("#content-vacancy").html("")
            $("#input-search-vacancy").val("")
            $("#content-vacancy").replaceWith($("#content-vacancy"), LatestVacancy())
        }
    })
}

SortByDivisi()

export { SortByDivisi }
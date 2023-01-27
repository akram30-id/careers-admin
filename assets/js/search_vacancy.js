import { base_server, base_client } from "./config.js";
import { LatestVacancy } from "./latest_vacancy.js";
import { SortByDivisi } from "./sortby_divisi_vacancy.js";

$(document).ready(function () {

    const SearchVacancy = () => {

        $("#btn-search").on("click", function () {
            const searchValue = $("#input-search-vacancy").val()
            const id_divisi = $("#sort-by-divisi option").filter(':selected').val()

            $("#content-vacancy").html(`<h3 class="fw-bold text-center my-5"><i>Loading . . . .</i></h3>`)

            const ajax = function (id) {
                $.ajax({
                    url: base_server + 'divisi',
                    type: 'GET',
                    dataType: 'json',
                    success: function (result) {
                        if (result.response.success == true) {
                            $.ajax({
                                url: base_server + 'vacancy/s' + id,
                                type: 'GET',
                                dataType: 'json',
                                data: {
                                    search_value: searchValue
                                },
                                success: function (search_result) {
                                    $("#content-vacancy").html("")
                                    let content = ''
                                    if (search_result.response.status == 200) {
                                        $(".alert-vacancy").html(`<h4 class="fw-bold text-center mb-3"><i>Showing result for</i> "${searchValue}"</h4>`)
                                        for (let i = 0; i < result.response.data.length; i++) {

                                            if (search_result.response.data[`${result.response.data[i].nama_divisi}`] != undefined) {
                                                console.info(search_result.response.data[`${result.response.data[i].nama_divisi}`])
                                                $("#content-vacancy").append(`
                                                    <div class="container-lg mt-5" id="${result.response.data[i].id_divisi}">
                                                        <div class="d-flex align-items-end">
                                                            <img src="${base_client}assets/img/hrd.svg">
                                                            <h1 class="text-primary fw-bold" style="margin-bottom: 32px;">${result.response.data[i].nama_divisi}</h1>
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
                                                                    <div class="card-body" id="vacancy-${result.response.data[i].id_divisi}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                `)

                                                for (let j = 0; j < search_result.response.data[`${result.response.data[i].nama_divisi}`].length; j++) {

                                                    const min_salary = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].min_salary
                                                    const max_salary = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].max_salary
                                                    const posisi = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].posisi
                                                    let level = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].level
                                                    const created_at = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].created_at
                                                    const nama_divisi = result.response.data[i].nama_divisi
                                                    const id_vacancy = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].id_vacancy
                                                    const status = search_result.response.data[`${result.response.data[i].nama_divisi}`][j].status

                                                    if (search_result.response.data[`${result.response.data[i].nama_divisi}`][j] == undefined) {
                                                        content = `
                                                            <div class="row mt-3 justify-content-center align-items-center">
                                                                <div class="col-sm-8 text-center">
                                                                    <h3 class="fw-bold my-5"><i>No Vacancy Available</i></h3>
                                                                </div>
                                                            </div>
                                                        `
                                                    } else {

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

                                                        if (status === 'Close') {
                                                            content = `
                                                            <div class="row mt-3 justify-content-center align-items-center">
                                                                <div class="col-sm-8">
                                                                    <div class="d-flex justify-content-start">
                                                                        <h2 class="fw-bold text-danger">${posisi}</h2>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start my-3">
                                                                        <h6 class="fw-semibold text-danger">Rp.${min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")} - Rp.${max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}</h6>
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
                                                                        <h2 class="fw-bold">${posisi}</h2>
                                                                    </div>
                                                                    <div class="d-flex justify-content-start my-3">
                                                                        <h6 class="fw-semibold text-success">Rp.${min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")} - Rp.${max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}</h6>
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

                                                    }
                                                    $(`#vacancy-${result.response.data[i].id_divisi}`).append(content)
                                                }
                                            }
                                        }
                                    } else if (search_result.response.status == 404) {
                                        $(".alert-vacancy").html(`<h4 class="fw-bold text-center mb-3"><i>No Result for </i> "${searchValue}"</h4>`)
                                    } else {
                                        console.info('ERROR')
                                    }
                                }
                            })
                        }
                    }
                })
            }

            if (searchValue != "") {


                if (id_divisi == "" || id_divisi == null) {
                    ajax('')
                } else {
                    ajax(`/${id_divisi}`)
                }
            } else {
                if (id_divisi == "" || id_divisi == null) {
                    $("#content-vacancy").html("")
                    $("#content-vacancy").replaceWith($("#content-vacancy"), LatestVacancy())
                } else {
                    $("#content-vacancy").html("")
                    ajax(`/${id_divisi}`)
                }
            }
        })
    }

    SearchVacancy()

})
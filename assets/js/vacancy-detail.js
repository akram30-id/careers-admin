import { base_client, base_server } from "./config.js";

$(document).ready(function () {

    const VacancyDetail = () => {

        const id_vacancy = $("#vacancy").attr('data-idvacancy')

        console.info(id_vacancy)

        $("#divisi-vacancy").scheletrone()
        $("#level-vacancy").scheletrone()
        $("#status-vacancy").scheletrone()
        $("#deskripsi-vacancy").scheletrone()
        $("#jobdesc-vacancy").scheletrone()
        $("#persyaratan-vacancy").scheletrone()

        $.ajax({
            url: base_server + 'vacancy/id/' + id_vacancy,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                console.info(result)
                if (result.response.status == 200) {
                    $("#divisi-vacancy").html("")
                    $("#level-vacancy").html("")
                    $("#status-vacancy").html("")
                    $("#deskripsi-vacancy").html("")
                    $("#jobdesc-vacancy").html("")
                    $("#persyaratan-vacancy").html("")

                    const data = result.response.data
                    let level = data.vacancy[0].level

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

                    $("#posisi-vacancy").html(data.vacancy[0].posisi)
                    $("#divisi-vacancy").html(data.divisi[0].nama_divisi)
                    $("#level-vacancy").html(level)

                    if (data.vacancy[0].status == "Open") {
                        $("#status").html(`<p class="text-success fw-semibold"><i><u>Status: <span id="status-vacancy"></u></i></span></p>`)
                        if (data.salary[0].min_salary == 0 && data.salary[0].max_salary == 0) {
                            $("#salary-vacancy").html("Negotiable Salary")
                        } else {
                            $("#salary-vacancy").html("Rp. " + data.salary[0].min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - " + "Rp. " + data.salary[0].max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
                        }
                    }

                    if (data.salary[0].min_salary == 0 && data.salary[0].max_salary == 0) {
                        $("#salary-vacancy").html("Negotiable Salary")
                    } else {
                        $("#salary-vacancy").html("Rp. " + data.salary[0].min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " - " + "Rp. " + data.salary[0].max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
                    }

                    $("#status-vacancy").html(data.vacancy[0].status)
                    $("#deskripsi-vacancy").html(data.vacancy[0].deskripsi_lowongan)

                    for (let i = 0; i < data.jobdesc.length; i++) {
                        $("#jobdesc-vacancy").append(`
                            <li class="fw-semibold mb-2">${data.jobdesc[i].deskripsi_jobdesc}</li>
                        `)
                    }

                    const min_usia = data.persyaratan[0].min_usia
                    const max_usia = data.persyaratan[0].max_usia

                    let usia = "Berusia " + min_usia + " - " + max_usia + " tahun"
                    if (min_usia == "0" && max_usia == "0") {
                        usia = ""
                    }

                    let jurusan = data.persyaratan[0].jurusan
                    if (jurusan == "-") {
                        jurusan = ''
                    }

                    $("#persyaratan-vacancy").append(`
                        <li class="fw-semibold mb-2">${data.persyaratan[0].gender}, ${usia}</li>
                        <li class="fw-semibold mb-2">Pendidikan Terakhir ${data.pendidikan[0].pendidikan} ${jurusan}</li>
                        <li class="fw-semibold mb-2">Sudah Vaksin ${data.persyaratan[0].dosis_vaksin}</li>
                    `)
                    for (let j = 0; j < data.tambahan_persyaratan.length; j++) {
                        $("#persyaratan-vacancy").append(`
                            <li class="fw-semibold mb-2">${data.tambahan_persyaratan[j].tambahan_persyaratan}</li>
                        `)
                    }

                    const divisi = data.divisi[0].nama_divisi
                    $("#to-divisi").prop("href", `${base_client}admin/divisi/${data.divisi[0].id_divisi}`).html(`Lihat lebih banyak lowongan di divisi ${divisi}`)

                    $("#nav-divisi").prop("href", `${base_client}admin/divisi/${data.divisi[0].id_divisi}`).html(`${divisi}`)
                } else {

                }
            }
        })

    }

    VacancyDetail()

})
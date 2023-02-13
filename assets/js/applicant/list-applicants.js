import { applicant_server, base_client } from "../config.js";

const id_vacancy = $(".vacancy").attr('data-id')

$("#banned").hide()
$("#qualified").show()
$("#btn-show-qualified").hide()

const showApplicants = $('#tbl-applicant-qualified').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        //panggil method ajax list dengan ajax
        "url": applicant_server + 'applicant/list/' + id_vacancy + '/qualified',
        "type": "GET"
    }
});

const showApplicantsBanned = $('#tbl-applicant-banned').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
        //panggil method ajax list dengan ajax
        "url": applicant_server + 'applicant/list/' + id_vacancy + '/disqualified',
        "type": "GET"
    }
});

$("#btn-show-banned").on("click", function () {

    $("#btn-show-banned").hide()
    $("#btn-show-qualified").show()

    $("#banned").show()
    $("#qualified").hide()

})

$("#btn-show-qualified").on("click", function () {

    $("#btn-show-banned").show()
    $("#btn-show-qualified").hide()

    $("#banned").hide()
    $("#qualified").show()
})

$(".table-responsive").on("click", ".btn-show-details", function () {

    const id_applicant = $(this).data('id')

    $.ajax({
        url: applicant_server + 'applicant/id/' + id_applicant,
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            if (result.response.status == 200) {
                $("#applicant-name").text("")
                $("#applicant-name").text(result.response.data.nama)

                let yearStart = 0
                let yearEnd = 0
                let monthStart = 0
                let monthEnd = 0

                const month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                let workExp = ''

                $("#applicant-pengalaman").html("")

                for (let i = 0; i < result.response.data.pengalaman.length; i++) {
                    yearStart = new Date(`${result.response.data.pengalaman[i].tgl_mulai}`)
                    yearEnd = new Date(`${result.response.data.pengalaman[i].tgl_selesai}`)

                    monthStart = new Date(`${result.response.data.pengalaman[i].tgl_mulai}`)
                    monthEnd = new Date(`${result.response.data.pengalaman[i].tgl_selesai}`)

                    if (yearStart.getFullYear() == yearEnd.getFullYear()) {
                        workExp = `${month[monthStart.getMonth()]} ${yearStart.getFullYear()} - ${month[monthEnd.getMonth()]} ${yearEnd.getFullYear()}`
                    } else {
                        workExp = `${month[monthStart.getMonth()]} ${yearStart.getFullYear()} - ${month[monthEnd.getMonth()]} ${yearEnd.getFullYear()}`
                    }

                    $("#applicant-pengalaman").append(`
                        <div class="col-sm-6">
                            <h5 class="institusi fw-semibold text-black">${result.response.data.pengalaman[i].institusi_kerja} <span class="fs-6 fw-semibold">(${workExp})</span></h5>
                            <p><span class="text-black fw-semibold">${result.response.data.pengalaman[i].jabatan_kerja}</span> - ${result.response.data.pengalaman[i].achievement_kerja}</p>
                        </div>
                    `)

                }

                let pendidikan = result.response.data.pendidikan[0].jenjang_pendidikan

                switch (pendidikan) {
                    case "1":
                        pendidikan = "SD"
                        break;

                    case "2":
                        pendidikan = "SMP"
                        break;

                    case "3":
                        pendidikan = "SMA/SMK"
                        break;

                    case "4":
                        pendidikan = "S1"
                        break;

                    case "5":
                        pendidikan = "S2"
                        break;

                    case "6":
                        pendidikan = "S3"
                        break;
                }

                $("#applicant-pendidikan").html(`
                    <div class="col-sm-8">
                        <h5 class="institusi fw-semibold text-black">${result.response.data.pendidikan[0].institusi_pendidikan}</h5>
                        <p><span class="text-black fw-semibold">(${pendidikan} - ${result.response.data.pendidikan[0].prodi_pendidikan})</span> - ${result.response.data.pendidikan[0].achievement_pendidikan}.</p>
                    </div>
                `)

                const tgl_sertif_berlaku = new Date(result.response.data.keahlian[0].tgl_berlaku)
                const tgl_sertif_expired = new Date(result.response.data.keahlian[0].tgl_expired)

                const berlaku = `${tgl_sertif_berlaku.getDate()} ${month[tgl_sertif_berlaku.getMonth()]} ${tgl_sertif_berlaku.getFullYear()}`
                const expired = `${tgl_sertif_expired.getDate()} ${month[tgl_sertif_expired.getMonth()]} ${tgl_sertif_expired.getFullYear()}`

                $("#applicant-keahlian").html(`
                    <div class="col-sm-8">
                        <h5 class="institusi fw-semibold text-black">${result.response.data.keahlian[0].jenis_sertifikat}</h5>
                        <p><span class="text-black fw-semibold">(${berlaku} - ${expired})</span> </p> <a class="btn-sm btn btn-secondary" href="${applicant_server}assets/sertifikat/${result.response.data.keahlian[0].file_sertifikat}" target="_blank"><i class="bi bi-list-stars"></i> Certificate</a>
                    </div>
                `)

            } else {
                alert(result.response.message)
            }
        }
    })

})

const info = () => {
    $.ajax({
        url: applicant_server + 'info/vacancy/' + id_vacancy,
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            if (result.response.status == 200) {
                $(".vacancy").text(result.response.data.posisi)
                $("#detail").prop('href', base_client + 'admin/detail/' + result.response.data.id_divisi + '/' + id_vacancy)
            } else {
                alert('Internal Server Error')
            }
        }
    })
}

info()

export { showApplicants, showApplicantsBanned }
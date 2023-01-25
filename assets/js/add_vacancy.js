import { base_server, base_client } from "./config.js"

$(document).ready(function () {

    const divisi_server_url = base_server + 'divisi/'
    const pendidikan_server_url = base_server + 'pendidikan/'

    const intiState = () => {
        $('#vacancy').show()
        $('#persyaratan').hide()
        $('#pengalaman').hide()
        $('#persyaratan-2').hide()
        $('#jobdesc').hide()
        $('#salary').hide()

        $('#expired-date-check').change(function () {
            if ($('#expired-date-check').is(':checked') == true) {
                $('#input-expired').val(null).prop('disabled', true)
            } else {
                $('#input-expired').prop('disabled', false)
            }
        })

        validationVacancy()

        // set date min today
        const today = new Date().toISOString().split('T')[0]
        $("#input-expired").prop('min', today)

        // button back and delete data session server
        $('#btn-back-home').on("click", function (event) {
            $.ajax({
                url: base_server + 'vacancy',
                type: 'DELETE',
                success: window.location.href = base_client
            })
        })

    }

    const state2 = (id_vacancy) => {
        $('#vacancy').hide()
        $('#persyaratan').show()
        $('#pengalaman').hide()
        $('#persyaratan-2').hide()
        $('#jobdesc').hide()
        $('#salary').hide()

        $('#usia-check').change(function () {
            if ($('#usia-check').is(':checked') == true) {
                $('#input-min-usia').val(0).prop('disabled', true)
                $('#input-max-usia').val(0).prop('disabled', true)
            } else {
                $('#input-min-usia').val("").prop('disabled', false)
                $('#input-max-usia').val("").prop('disabled', false)
            }
        })

        $("#input-pendidikan").change(function () {
            if ($("#input-pendidikan option").filter(':selected').val() == "NPI_EDU_ALL" || $("#input-pendidikan option").filter(':selected').val() == "NPI_EDU_SD" || $("#input-pendidikan option").filter(':selected').val() == "NPI_EDU_SLTP") {
                $("#input-jurusan").prop("disabled", true)
                $("#input-jurusan").val("-")
            } else {
                $("#input-jurusan").prop("disabled", false)
                $("#input-jurusan").val("")
            }
        })

        if (id_vacancy != "" || id_vacancy != null || id_vacancy != undefined) {
            validationPersyaratan(id_vacancy)
        }

        $('#btn-prev-persyaratan').on("click", function (event) {
            intiState()
            $(".progress-bar").css({ 'width': `15%` }).text("1/6")
            event.preventDefault()
        })
    }

    const state3 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#pengalaman').show()
        $('#persyaratan-2').hide()
        $('#jobdesc').hide()
        $('#salary').hide()

        validationPengalaman()

        $('#btn-prev-pengalaman').on("click", function (event) {
            state2()
            $(".progress-bar").css({ 'width': `30%` }).text("2/6")
            event.preventDefault()
        })
    }

    const state4 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#pengalaman').hide()
        $('#persyaratan-2').show()
        $('#jobdesc').hide()
        $('#salary').hide()

        $('#btn-next-persyaratan-2').on("click", function (event) {
            persyaratanTambahan()
            event.preventDefault()
        })

        $('#btn-prev-persyaratan-2').on("click", function (event) {
            state3()
            $(".progress-bar").css({ 'width': `45%` }).text("3/6")
            event.preventDefault()
        })
    }

    let order_syarat = 0
    $("#add-input-persyaratan").css({ 'cursor': 'pointer' }).on("click", function () {
        order_syarat++
        $("#persyaratan-tambahan").append(`
                <div id="section-${order_syarat}" class="d-flex align-items-center mb-2 mt-3">
                    <input type="text" name="input-persyaratan" class="form-control input-persyaratan" placeholder="Contoh: Mahir menggunakan Ms. Excel">
                    <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-${order_syarat}').remove()"></i>
                </div>
            `)
    })
    order_syarat = order_syarat

    const state5 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#pengalaman').hide()
        $('#persyaratan-2').hide()
        $('#jobdesc').show()
        $('#salary').hide()

        $('#btn-next-jobdesc').on("click", function (event) {
            jobDescription()
            event.preventDefault()
        })

        $('#btn-prev-jobdesc').on("click", function (event) {
            state4()
            $(".progress-bar").css({ 'width': `60%` }).text("4/6")
            event.preventDefault()
        })
    }

    let order_jobdesc = 0
    $("#add-input-jobdesc").css({ 'cursor': 'pointer' }).on("click", function () {
        order_jobdesc++
        $("#jobdesc-tambahan").append(`
            <div id="section-jobdesc-${order_jobdesc}" class="d-flex align-items-center mb-2 mt-3">
                <input type="text" name="input-jobdesc" class="form-control input-jobdesc" placeholder="Contoh: Bertanggung jawab dalam mengelola data-data adminsitrasi">
                <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-jobdesc-${order_jobdesc}').remove()"></i>
            </div>
        `)
    })
    order_jobdesc = order_jobdesc

    const state6 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#pengalaman').hide()
        $('#persyaratan-2').hide()
        $('#jobdesc').hide()
        $('#salary').show()

        $('#salary-check').change(function () {
            if ($('#salary-check').is(':checked') == true) {
                $('#input-min-salary').val(0).prop('disabled', true)
                $('#input-max-salary').val(0).prop('disabled', true)
            } else {
                $('#input-min-salary').val("").prop('disabled', false)
                $('#input-max-salary').val("").prop('disabled', false)
            }
        })

        $('#btn-prev-salary').on("click", function (event) {
            state5()
            $(".progress-bar").css({ 'width': `75%` }).text("5/6")
            event.preventDefault()
        })

        validationSalary()
    }

    function divisiList() {

        $.ajax({
            url: divisi_server_url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                if (result.response.success == true) {
                    for (let i = 0; i < result.response.data.length; i++) {
                        $("#input-divisi").append(`
                        <option value="${result.response.data[i].id_divisi}">${result.response.data[i].nama_divisi}</option>
                    `)
                    }
                } else {

                }
            }
        })

    }

    function pendidikanList() {
        $.ajax({
            url: pendidikan_server_url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
                if (result.response.success == true) {
                    for (let i = 0; i < result.response.data.length; i++) {
                        $("#input-pendidikan").append(`
                            <option value="${result.response.data[i].id_pendidikan}">${result.response.data[i].pendidikan}</option>
                        `)
                    }
                } else {
                    alert(result.response.message)
                }
            }
        })
    }

    // Validation input on VANCANCY form section
    const validationVacancy = () => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('#form-add-vacancy')

        let id_vacancy = ''

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    const divisi = $("#input-divisi").val()
                    const level = $("#input-level").val()
                    const posisi = $("#input-posisi").val()
                    const deskripsi = $("#input-deskripsi").val()
                    const expired = $("#input-expired").val()

                    $.ajax({
                        url: base_server + 'vacancy/main',
                        type: 'GET',
                        dataType: 'json',
                        success: function (result) {
                            if (result.response.success == false) {
                                ajaxRequest('POST')
                            } else {
                                ajaxRequest('PUT')
                            }
                        }
                    })

                    const ajaxRequest = (method) => {
                        $.ajax({
                            url: base_server + 'vacancy/main',
                            type: method,
                            dataType: 'json',
                            data: {
                                id_divisi: divisi,
                                level: level,
                                posisi: posisi,
                                deskripsi: deskripsi,
                                expired_at: expired
                            },
                            success: function (result) {
                                if (result.response.success == true) {
                                    id_vacancy = result.response.id_vacancy
                                    state2(id_vacancy)
                                    $(".progress-bar").css({ 'width': `30%` }).text("2/6")
                                } else {
                                    alert(result.response.message)
                                }
                            }
                        })
                    }
                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    // Validation input on PERSYARATAN form section
    const validationPersyaratan = (id_vacancy) => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('#form-add-persyaratan')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {

                    const data = {
                        gender: $("#input-gender").val(),
                        min_usia: $("#input-min-usia").val(),
                        max_usia: $("#input-max-usia").val(),
                        jurusan: $("#input-jurusan").val(),
                        vaksin: $("#input-vaksin").val(),
                        id_pendidikan: $("#input-pendidikan").val(),
                    }

                    $.ajax({
                        url: base_server + 'vacancy/main',
                        type: 'GET',
                        dataType: 'json',
                        success: function (result) {
                            if (result.response.id_persyaratan == null || result.response.id_persyaratan == '' || result.response.id_persyaratan == undefined) {
                                ajaxRequest('POST')
                            } else {
                                ajaxRequest('PUT')
                            }
                            state3()
                        }
                    })

                    const ajaxRequest = (method) => {
                        $.ajax({
                            url: base_server + 'vacancy/persyaratan',
                            type: method,
                            dataType: 'json',
                            data: {
                                gender: data.gender,
                                min_usia: data.min_usia,
                                max_usia: data.max_usia,
                                jurusan: data.jurusan,
                                vaksin: data.vaksin,
                                id_pendidikan: data.id_pendidikan
                            },
                            success: function (result) {
                                if (result.response.success == true) {
                                    state3()
                                    $(".progress-bar").css({ 'width': `45%` }).text("3/6")
                                } else {
                                    alert(result.response.message)
                                }
                            }
                        })
                    }

                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    const validationPengalaman = () => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('#form-add-pengalaman')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {

                    const data = {
                        min_lama_pengalaman: $("#input-min-pengalaman").val(),
                        max_lama_pengalaman: $("#input-max-pengalaman").val(),
                        bidang_pengalaman: $("#input-bidang-pengalaman").val(),
                    }

                    $.ajax({
                        url: base_server + 'vacancy/main',
                        type: 'GET',
                        dataType: 'json',
                        success: function (result) {
                            if (result.response.id_persyaratan != null || result.response.id_persyaratan != '' || result.response.id_persyaratan != undefined) {
                                $.ajax({
                                    url: base_server + 'vacancy/pengalaman',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: data,
                                    success: function (result) {
                                        if (result.response.success == true) {
                                            state4()
                                            $(".progress-bar").css({ 'width': `60%` }).text("4/6")
                                        } else {
                                            alert(result.response.message)
                                        }
                                    }
                                })
                            } else {
                                alert(result.response.message)
                            }
                        }
                    })
                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    const persyaratanTambahan = () => {

        let tambahan = []
        $('.input-persyaratan').each(function () {
            if ($(this).val() != undefined || $(this).val() != null || $(this).val() != "") {
                tambahan.push($(this).val())
            }
        })
        tambahan = tambahan.toString()
        $.ajax({
            url: base_server + 'vacancy/persyaratanTambahan',
            type: 'POST',
            dataType: 'json',
            data: {
                tambahan_persyaratan: tambahan
            },
            success: function (result) {
                if (result.response.success == true) {
                    state5()
                    $(".progress-bar").css({ 'width': `75%` }).text("5/6")
                } else {
                    alert(result.response.message)
                }
            }
        })
    }

    const jobDescription = () => {

        let jobdesc = []
        $('.input-jobdesc').each(function () {
            if ($(this).val() != undefined || $(this).val() != null || $(this).val() != "") {
                jobdesc.push($(this).val())
            }
        })
        jobdesc = jobdesc.toString()
        $.ajax({
            url: base_server + 'vacancy/jobdesc',
            type: 'POST',
            dataType: 'json',
            data: {
                jobdesc: jobdesc
            },
            success: function (result) {
                if (result.response.success == true) {
                    state6()
                    $(".progress-bar").css({ 'width': `100%` }).text("6/6")
                } else {
                    alert(result.response.message)
                }
            }
        })

    }

    // Validation input on SALARY form section
    const validationSalary = () => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('#form-add-salary')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                $("#btn-submit-vacancy").prop('disabled', 'true').text('Processing . . .')
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    console.info('complete')
                    const data = {
                        min_salary: $("#input-min-salary").val(),
                        max_salary: $("#input-max-salary").val(),
                    }
                    $.ajax({
                        url: base_server + 'vacancy/main',
                        type: 'GET',
                        dataType: 'json',
                        success: function (result) {
                            if (result.response.id_vacancy != null || result.response.id_vacancy != '' || result.response.id_vacancy != undefined) {
                                ajaxRequest(data)
                            } else {
                                alert('Vacancy not found on session server')
                            }
                        }
                    })

                    const ajaxRequest = (data) => {
                        $.ajax({
                            url: base_server + 'vacancy/salary',
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            success: function (result) {
                                if (result.response.success == true) {
                                    $.ajax({
                                        url: base_server + 'vacancy',
                                        type: 'POST',
                                        dataType: 'json',
                                        success: function (result) {
                                            if (result.response.success == true) {
                                                $("#exampleModal").modal("show")
                                                const id_vacancy = result.response.id_vacancy
                                                $("#vacancy-alert").html(`<p>Lowongan berhasil ditambahkan. <a href="${base_client}/admin/detail/${id_vacancy}" class="fw-bold"><u>Lihat Disini</u></a></p>`)
                                            } else {
                                                alert('Failed insert all session saved')
                                            }
                                        },
                                    })
                                }
                            },
                        })
                    }

                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    intiState()
    divisiList()
    pendidikanList()

})
import { base_server, base_client } from "./config.js"

$(document).ready(function () {

    const divisi_server_url = base_server + 'divisi/'
    const pendidikan_server_url = base_server + 'pendidikan/'

    const id_vacancy = $("#vacancy").attr("data-id")

    $("#state-title").text("Update Lowongan")

    let id_divisi = ''
    let id_level = ''
    let id_pendidikan = ''
    $.ajax({
        url: base_server + 'vacancy/u/' + id_vacancy,
        type: 'POST',
        dataType: 'json',
        success: function (result) {
            if (result.response.status == 200) {
                $.ajax({
                    url: base_server + 'vacancy/u/' + id_vacancy,
                    type: 'GET',
                    dataType: 'json',
                    success: function (result_update) {
                        if (result_update.response.status == 200) {
                            const data = result_update.response.data
                            const session = result_update.response.session
                            console.info(data)
                            console.info(session)

                            id_divisi = data.vacancy[0].id_divisi
                            id_level = data.vacancy[0].level
                            id_pendidikan = data.persyaratan[0].id_pendidikan

                            // divisi set value
                            $.ajax({
                                url: divisi_server_url,
                                type: 'GET',
                                dataType: 'json',
                                success: function (result) {
                                    if (result.response.success == true) {
                                        for (let i = 0; i < result.response.data.length; i++) {
                                            if (result.response.data[i].id_divisi == id_divisi) {
                                                $("#input-divisi").append(`
                                                    <option value="${result.response.data[i].id_divisi}" selected>${result.response.data[i].nama_divisi}</option>
                                                `)
                                            } else {
                                                $("#input-divisi").append(`
                                                    <option value="${result.response.data[i].id_divisi}">${result.response.data[i].nama_divisi}</option>
                                                `)
                                            }
                                        }
                                    } else {

                                    }
                                }
                            })

                            // pendidikan set value
                            $.ajax({
                                url: pendidikan_server_url,
                                type: 'GET',
                                dataType: 'json',
                                success: function (result) {
                                    if (result.response.success == true) {
                                        for (let i = 0; i < result.response.data.length; i++) {
                                            if (result.response.data[i].id_pendidikan == id_pendidikan) {
                                                $("#input-pendidikan").append(`
                                                    <option value="${result.response.data[i].id_pendidikan}" selected>${result.response.data[i].pendidikan}</option>
                                                `)
                                            } else {
                                                $("#input-pendidikan").append(`
                                                    <option value="${result.response.data[i].id_pendidikan}">${result.response.data[i].pendidikan}</option>
                                                `)
                                            }
                                        }
                                    } else {
                                        alert(result.response.message)
                                    }
                                }
                            })

                            //level set value
                            // $(`#input-level option[value='${id_level}']`).prop('selected', true)
                            $(`#input-level`).val(`${id_level}`)

                            // posisi set value
                            $("#input-posisi").val(`${data.vacancy[0].posisi}`)

                            // deskripsi set value
                            $("#input-deskripsi").val(`${data.vacancy[0].deskripsi_lowongan}`)

                            // expired set value
                            if (data.vacancy[0].expired_at == "0000-00-00" || data.vacancy[0].expired_at == null) {
                                $("#expired-date-check").prop("checked", true)
                                $("#input-expired").prop("disabled", true)
                            } else {
                                $("#input-expired").val(`${data.vacancy[0].expired_at}`)
                            }

                            // gender set value
                            $(`#input-gender option[value='${data.persyaratan[0].gender}']`).prop('selected', true)

                            // usia set value
                            $("#input-min-usia").val(`${data.persyaratan[0].min_usia}`)
                            $("#input-max-usia").val(`${data.persyaratan[0].max_usia}`)

                            // jurusan set value
                            $("#input-jurusan").val(`${data.persyaratan[0].jurusan}`)

                            // vaksin set value
                            $("#input-vaksin").val(`${data.persyaratan[0].dosis_vaksin}`)

                            // pengalaman set value
                            $("#input-min-pengalaman").val(`${data.pengalaman[0].min_lama_pengalaman}`)
                            $("#input-max-pengalaman").val(`${data.pengalaman[0].max_lama_pengalaman}`)

                            // bidang pengalaman set value
                            $("#input-bidang-pengalaman").val(`${data.pengalaman[0].bidang_pengalaman}`)

                            // persyaratan tambahan set value
                            $("#input-persyaratan").val(`${data.tambahan_persyaratan[0].tambahan_persyaratan}`)
                            let order_syarat = 0
                            for (let i = 1; i < data.tambahan_persyaratan.length; i++) {
                                order_syarat = i
                                $("#persyaratan-tambahan").append(`
                                    <div id="section-${order_syarat}" class="d-flex align-items-center mb-2 mt-3">
                                        <input type="text" name="input-persyaratan" class="form-control input-persyaratan" placeholder="Contoh: Mahir menggunakan Ms. Excel" value="${data.tambahan_persyaratan[i].tambahan_persyaratan}">
                                        <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-${order_syarat}').remove()"></i>
                                    </div>
                                `)
                            }

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

                            // jobdesc set value
                            $("#input-jobdesc").val(`${data.jobdesc[0].deskripsi_jobdesc}`)
                            let order_jobdesc = 0
                            for (let i = 1; i < data.jobdesc.length; i++) {
                                order_jobdesc = i
                                $("#jobdesc-tambahan").append(`
                                    <div id="section-jobdesc-${order_jobdesc}" class="d-flex align-items-center mb-2 mt-3">
                                        <input type="text" name="input-jobdesc" class="form-control input-jobdesc" placeholder="Contoh: Bertanggung jawab dalam mengelola data-data adminsitrasi" value="${data.jobdesc[i].deskripsi_jobdesc}">
                                        <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-jobdesc-${order_jobdesc}').remove()"></i>
                                    </div>
                                `)
                            }

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

                            // salary set value
                            if (data.salary[0].min_salary == 0 && data.salary[0].max_salary == 0) {
                                $("#salary-check").prop("checked", true)
                                $("#input-min-salary").prop("disabled", true)
                                $("#input-max-salary").prop("disabled", true)

                                $("#input-max-salary").val(0)
                                $("#input-min-salary").val(0)
                            } else {
                                $("#input-min-salary").val(`${data.salary[0].min_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}`)
                                $("#input-max-salary").val(`${data.salary[0].max_salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}`)
                            }

                            // continue submit
                            $(".success-submit").prop("href", `${base_client}admin/detail/${data.vacancy[0].id_divisi}/${id_vacancy}`)
                            $("#vacancy-alert").html(`<p>Lowongan berhasil diupdate. <a href="${base_client}admin/detail/${data.vacancy[0].id_divisi}/${id_vacancy}" class="fw-bold success-submit"><u>Lihat Disini</u></a></p>`)
                        }
                    }
                })
            } else {
                alert('Internal Server Error')
            }
        }
    })

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
                                    // SUBMIT ALL PROGRESS
                                    $.ajax({
                                        url: base_server + 'vacancy',
                                        type: 'PUT',
                                        dataType: 'json',
                                        success: function (result) {
                                            if (result.response.success == true) {
                                                const id_vacancy = result.response.id_vacancy
                                                $("#exampleModal").modal("show")
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

})
import { base_server, base_client } from "./config.js"

$(document).ready(function () {


    const divisi_server_url = base_server + 'divisi/'
    const pendidikan_server_url = base_server + 'pendidikan/'

    const intiState = () => {
        $('#vacancy').show()
        $('#persyaratan').hide()
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

        // set date min today
        const today = new Date().toISOString().split('T')[0]
        $("#input-expired").prop('min', today)

        // button back and delete data session server
        $('#btn-back-home').on("click", function (event) {
            $.ajax({
                url: base_server + 'vacancy',
                type: 'DELETE',
                success: window.history.back()
            })
        })

    }

    const state2 = (id_vacancy) => {
        $('#vacancy').hide()
        $('#persyaratan').show()
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

        if (id_vacancy != "" || id_vacancy != null || id_vacancy != undefined) {
            validationPersyaratan(id_vacancy)
        }
    }

    const state3 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#persyaratan-2').show()
        $('#jobdesc').hide()
        $('#salary').hide()

        let order = 0
        $("#add-input-persyaratan").css({ 'cursor': 'pointer' }).on("click", function () {
            order++
            $("#persyaratan-tambahan").append(`
                <div id="section-${order}" class="d-flex align-items-center mb-2 mt-3">
                    <input type="text" name="input-persyaratan" class="form-control input-persyaratan" placeholder="Contoh: Mahir menggunakan Ms. Excel">
                    <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-${order}').remove()"></i>
                </div>
            `)
        })
        order = order
    }

    const state4 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
        $('#persyaratan-2').hide()
        $('#jobdesc').show()
        $('#salary').hide()

        let order = 0
        $("#add-input-jobdesc").css({ 'cursor': 'pointer' }).on("click", function () {
            order++
            $("#jobdesc-tambahan").append(`
                <div id="section-jobdesc-${order}" class="d-flex align-items-center mb-2 mt-3">
                    <input type="text" name="input-jobdesc" class="form-control input-jobdesc" placeholder="Contoh: Mahir menggunakan Ms. Excel">
                    <i class="bi bi-x-lg text-danger" style="margin-left: 8px;" onclick="document.getElementById('section-jobdesc-${order}').remove()"></i>
                </div>
            `)
        })
        order = order
    }

    const state5 = () => {
        $('#vacancy').hide()
        $('#persyaratan').hide()
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
                    const appendProgressBar = parseInt($(".progress-bar")[0].style.width) + 25
                    console.info('clicked')
                    $(".progress-bar").css({ 'width': `${appendProgressBar}%` }).text(`${(appendProgressBar - 9)}%`)
                    // state2()
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

        console.info(id_vacancy)

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    const appendProgressBar = parseInt($(".progress-bar")[0].style.width) + 25
                    console.info('clicked')
                    $(".progress-bar").css({ 'width': `${appendProgressBar}%` }).text(`${(appendProgressBar - 9)}%`)
                    // state3()

                    const data = {
                        gender: $("#input-gender").val(),
                        min_usia: $("#input-min-usia").val(),
                        max_usia: $("#input-max-usia").val(),
                        jurusan: $("#input-jurusan").val(),
                        vaksin: $("#input-vaksin").val(),
                        id_pendidikan: $("#input-pendidikan").val(),
                    }

                    
                    console.info(data)
                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
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
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    console.info('complete')
                    $("#btn-submit-vacancy").prop('disabled', 'true').text('Processing . . .')
                    event.preventDefault()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    validationVacancy()
    validationSalary()

    // button navigation on vacancy
    // $('#btn-next-vacancy').on("click", function (event) {
    //     state2()
    //     event.preventDefault()
    // })

    $('#btn-prev-persyaratan').on("click", function (event) {
        intiState()
        event.preventDefault()
    })

    // button navigation on persyaratan-2
    $('#btn-next-persyaratan-2').on("click", function (event) {
        const appendProgressBar = parseInt($(".progress-bar")[0].style.width) + 25
        console.info('clicked')
        $(".progress-bar").css({ 'width': `${appendProgressBar}%` }).text(`${(appendProgressBar - 9)}%`)
        state4()
        event.preventDefault()
    })

    $('#btn-prev-persyaratan-2').on("click", function (event) {
        state2()
        event.preventDefault()
    })

    // button navigation on jobdesc
    $('#btn-next-jobdesc').on("click", function (event) {
        $(".progress-bar").css({ 'width': "100%" }).text("100%")
        state5()
        event.preventDefault()
    })

    $('#btn-prev-jobdesc').on("click", function (event) {
        state3()
        event.preventDefault()
    })

    // button navigation on jobdesc
    // $('#btn-submit-vacancy').on("click", function (event) {
    //     // state5()
    //     event.preventDefault()
    // })

    $('#btn-prev-salary').on("click", function (event) {
        state4()
        event.preventDefault()
    })

    intiState()
    divisiList()
    pendidikanList()

})
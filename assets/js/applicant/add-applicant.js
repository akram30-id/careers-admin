import { applicant_server } from '../config.js'
import { base_client } from '../config.js'

$(document).ready(function () {

    const AddApplicant = () => {

        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        const form_data = new FormData()

                        // data personal
                        const nama = $("#input-nama").val()
                        const tempat_lahir = $("#input-tempat-lahir").val()
                        const tgl_lahir = $("#input-tgl-lahir").val()
                        const email = $("#input-email").val()
                        const kontak = $("#input-kontak").val()

                        // data pendidikan
                        const jenjang = $("#input-jenjang").val()
                        const prodi = $("#input-prodi").val()
                        const institusi_pendidikan = $("#input-institusi-pendidikan").val()
                        const input_mulai_pendidikan = $("#input-mulai-pendidikan").val()
                        const input_berakhir_pendidikan = $("#input-berakhir-pendidikan").val()
                        const input_achievement_pendidikan = $("#input-achievement-pendidikan").val()

                        // data pengalaman
                        const max = $("#max").val()

                        let form = []
                        let pengalaman = []
                        let formPushed = ''
                        let pengalamanConverted = ''

                        for (let i = 1; i <= max; i++) {
                            form.push($(`#input-institusi-kerja-${i}`).val())
                            form.push($(`#input-jabatan-${i}`).val())
                            form.push($(`#input-mulai-kerja-${i}`).val())
                            form.push($(`#input-selesai-kerja-${i}`).val())
                            form.push($(`#input-achievement-kerja-${i}`).val())
                            formPushed = form.toString().replace(/\,/g, '$')
                            pengalaman.push(formPushed)
                            form = []
                        }

                        pengalamanConverted = pengalaman.toString().replace(/\,/g, ';')

                        // data keahlian
                        const jenis_sertfikat = $("#input-jenis-sertifikat").val()
                        const mulai_sertifikat = $("#input-mulai-sertifikat").val()
                        const berakhir_sertifikat = $("#input-berakhir-sertifikat").val()
                        const file_sertifikat = $("#upload-sertifikat")[0].files[0]

                        // data referensi
                        const referensi = $("#input-referensi").val()

                        const id_vacancy = $(".vacancy").attr('data-id')

                        form_data.append('nama', nama)
                        form_data.append('tempat_lahir', tempat_lahir)
                        form_data.append('tgl_lahir', tgl_lahir)
                        form_data.append('email', email)
                        form_data.append('kontak', kontak)
                        form_data.append('id_loker', id_vacancy)
                        form_data.append('jenjang', jenjang)
                        form_data.append('prodi', prodi)
                        form_data.append('institusi_pendidikan', institusi_pendidikan)
                        form_data.append('tgl_mulai_pendidikan', input_mulai_pendidikan)
                        form_data.append('tgl_selesai_pendidikan', input_berakhir_pendidikan)
                        form_data.append('achievement_pendidikan', input_achievement_pendidikan)
                        form_data.append('pengalaman', pengalamanConverted)
                        form_data.append('jenis_sertifikat', jenis_sertfikat)
                        form_data.append('tgl_berlaku', mulai_sertifikat)
                        form_data.append('tgl_expired', berakhir_sertifikat)
                        form_data.append('file', file_sertifikat)
                        form_data.append('referensi', referensi)

                        $.ajax({
                            url: applicant_server + 'apply',
                            type: 'POST',
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            data: form_data,
                            success: function (result) {
                                if (result.response.status == 201) {
                                    $("#exampleModal").modal("show")
                                    $("#success-submit").prop('href', `${base_client}/applicant/${id_vacancy}`)
                                    $("#vacancy-alert").text("Kandidat Berhasil Ditambahkan")
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
        })()

    }

    AddApplicant()

})
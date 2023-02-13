import { applicant_server, base_client } from '../config.js'

$(document).ready(function () {

    const Main = () => {
        let order = 1
        $("#appendForm").click(function () {
            order++
            $("#appliance").append(`
                <div class="col-sm-6 mb-3" id="form-${order}">
                    <div class="card border-0 shadow-lg p-4" style="border-radius: 16px;">
                        <div class="card-body">

                            <div class="row justify-content-between align-items-center">
                                <div class="col-10">
                                    <h3 class="fw-bold text-black">Pengalaman Kerja #${order} </h3>
                                </div>
                                <div class="col-2">
                                    <i class="bi bi-x-circle remove-form" style="color: red; font-size: 20pt; cursor: pointer;" onclick="document.getElementById('form-${order}').remove();"></i>
                                </div>
                            </div>
    
                            <hr style="border-top: 3px solid #000; margin-top: -4px;">
    
                            <div class="mt-4 mb-3">
                                <label for="input-institusi" class="form-label fw-bold">Nama Institusi</label>
                                <input type="text" class="form-control input-institusi" id="input-institusi-kerja-${order}" required>
                                <div class="invalid-feedback">
                                    Institusi Kerja Wajib diisi
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="jabatan" class="form-label fw-bold">Jabatan</label>
                                <input type="text" class="form-control input-jabatan" id="input-jabatan-${order}" required>
                                <div class="invalid-feedback">
                                    Jabatan Wajib diisi
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6 mb-3">
                                    <label for="input-mulai" class="form-label fw-bold">Tgl Mulai</label>
                                    <input type="date" class="form-control input-mulai" id="input-mulai-kerja-${order}" required>
                                    <div class="invalid-feedback">
                                        Tanggal Mulai Kerja Wajib diisi
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="input-selesai" class="form-label fw-bold">Tgl Berakhir</label>
                                    <input type="date" class="form-control" id="input-selesai-kerja-${order}" required>
                                    <div class="invalid-feedback">
                                        Tanggal Berakhir Kerja Wajib diisi
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-5">
                                <label class="form-label fw-bold">Pencapaian Selama Masa Kerja</label>
                                <textarea class="form-control" id="input-achievement-kerja-${order}" rows="5" required></textarea>
                                <input type="hidden" id="max" value="1">
                                <div class="invalid-feedback">
                                    Pencapaian Kerja Wajib diisi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
            $("#max").val(order)

            $(".remove-form").on("click", function () {
                order--
            })

        }).css({ 'cursor': 'pointer' });

        order = order

        const id_vacancy = $(".vacancy").attr('data-id')

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
    }

    Main()
});

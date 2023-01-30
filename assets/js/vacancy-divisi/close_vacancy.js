import { base_server } from "../config.js";
import { Main } from "./main.js";

$(document).ready(function () {

    const CloseVacancy = () => {

        $("#vacancy-divisi-content").on("click", ".btn-modal-close", function (event) {
            let id_vacancy = $(this).data('id')

            $(".btn-close-vacancy").on("click", function () {
                $.ajax({
                    url: base_server + 'vacancy/status',
                    type: 'PUT',
                    dataType: 'json',
                    data: {
                        id_vacancy: id_vacancy,
                        status: 'Close'
                    },
                    success: function (result) {
                        $(".alert-vacancy").html("")
                        id_vacancy = null
                        if (result.response.status == 200) {
                            alert('Tutup Lowongan Berhasl!')
                        } else {
                            alert(result.response.message)
                        }
                        $("#vacancy-divisi-content").html("")
                        $("#vacancy-divisi-content").replaceWith($("#vacancy-divisi-content"), Main())
                    }
                })
                console.info(id_vacancy)
                $(".btn-close-vacancy").off('click')
            })
        })

    }

    CloseVacancy()

})
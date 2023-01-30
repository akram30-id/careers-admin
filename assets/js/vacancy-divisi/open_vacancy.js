import { base_server } from "../config.js";
import { Main } from "./main.js";

$(document).ready(function () {

    const OpenVacancy = () => {

        $("#vacancy-divisi-content").on("click", ".btn-modal-open", function (event) {
            let id_vacancy = $(this).data('id')

            $(".btn-open-vacancy").on("click", function () {
                $.ajax({
                    url: base_server + 'vacancy/status',
                    type: 'PUT',
                    dataType: 'json',
                    data: {
                        id_vacancy: id_vacancy,
                        status: 'Open'
                    },
                    success: function (result) {
                        $(".alert-vacancy").html("")
                        id_vacancy = null
                        if (result.response.status == 200) {
                            alert('Buka Lowongan Berhasl!')
                        } else {
                            alert(result.response.message)
                        }
                        $("#vacancy-divisi-content").html("")
                        $("#vacancy-divisi-content").replaceWith($("#vacancy-divisi-content"), Main())
                    }
                })
                $(".btn-open-vacancy").off('click')
            })
        })

    }

    OpenVacancy()

})
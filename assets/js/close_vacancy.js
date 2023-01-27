import { base_server } from "./config.js";
import { LatestVacancy } from "./latest_vacancy.js";
import { SortByDivisi } from "./sortby_divisi_vacancy.js";

$(document).ready(function () {

    const CloseVacancy = () => {

        $("#content-vacancy").on("click", ".btn-modal-close", function (event) {
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
                        $("#content-vacancy").html("")
                        $("#content-vacancy").replaceWith($("#content-vacancy"), LatestVacancy())
                    }
                })
                $(".btn-close-vacancy").off('click')
            })
        })

    }

    CloseVacancy()

})
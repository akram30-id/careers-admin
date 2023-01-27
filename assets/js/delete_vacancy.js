import { base_server } from "./config.js";
import { LatestVacancy } from "./latest_vacancy.js";

$(document).ready(function () {

    const DeleteVacancy = () => {


        $("#content-vacancy").on("click", ".btn-modal-delete", function (event) {
            let id_vacancy = $(this).data('id')

            $(".btn-delete-vacancy").on("click", function () {
                $.ajax({
                    url: base_server + 'vacancy/d/' + id_vacancy,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function (result) {
                        id_vacancy = null
                        $(".alert-vacancy").html("")
                        if (result.response.status == 200) {
                            alert('Hapus Lowongan Berhasl!')
                        } else {
                            alert(result.response.message)
                        }
                        $("#content-vacancy").html("")
                        $("#content-vacancy").replaceWith($("#content-vacancy"), LatestVacancy())
                    }
                })
                $(".btn-delete-vacancy").off('click')
            })
        })

    }

    DeleteVacancy()

})
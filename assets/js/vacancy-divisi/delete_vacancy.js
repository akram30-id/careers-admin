import { base_server } from "../config.js";
import { Main } from "./main.js";

$(document).ready(function () {

    const DeleteVacancy = () => {


        $("#vacancy-divisi-content").on("click", ".btn-delete", function (event) {
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
                        $("#vacancy-divisi-content").html("")
                        $("#vacancy-divisi-content").replaceWith($("#vacancy-divisi-content"), Main())
                    }
                })
                $(".btn-delete-vacancy").off('click')
            })
        })

    }

    DeleteVacancy()

})
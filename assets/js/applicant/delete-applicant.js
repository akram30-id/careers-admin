import { applicant_server } from "../config.js";
import { showApplicants } from "./list-applicants.js";

$(document).ready(function () {

    const DeleteApplicant = () => {

        $("#tblPelamar").on("click", ".btn-delete-personal", function () {

            let id_personal = $(this).data('id')

            $("#deleteModal").modal('show')

            $("#delete-alert").html(`
                <p>Apakah Anda Yakin Ingin Menghapus?</p>
            `)

            $("#yes-delete").on("click", function () {
                console.info(id_personal)
                if (id_personal != null) {
                    $.ajax({
                        url: applicant_server + 'applicant',
                        type: 'DELETE',
                        dataType: 'json',
                        data: {
                            id_personal: id_personal
                        },
                        success: function (result) {
                            $("#deleteModal").modal('hide')
                            showApplicants.clear().draw()
                        }
                    })
                }
            })

            $("#no-delete").on("click", function () {
                $("#deleteModal").modal('hide')
                id_personal = null
            })

        })

    }

    DeleteApplicant()

})
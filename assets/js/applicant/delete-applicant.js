import { applicant_server } from "../config.js";
import { showApplicants, showApplicantsBanned } from "./list-applicants.js";

$(document).ready(function () {

    const DeleteApplicant = () => {

        $(".table-responsive").on("click", ".btn-delete-personal", function () {

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
                            showApplicants.clear().draw()
                            showApplicantsBanned.clear().draw()
                        }
                    })
                }
            })

            $("#no-delete").on("click", function () {
                id_personal = null
            })

        })

    }

    DeleteApplicant()

})
import { base_server, base_client } from "../config.js";

$(document).ready(function () {

    $("#btn-change-password").on("click", function () {

        const oldPassword = $("#old-password").val()
        const newPassword = $("#new-password").val()
        const confirmPassword = $("#confirm-password").val()

        if (newPassword != confirmPassword) {
            alert('Password Baru dan Konfirmasi Password Tidak Sama')
        } else {
            $.ajax({
                url: base_server + 'auth',
                type: 'PUT',
                dataType: 'json',
                data: {
                    old_password: oldPassword,
                    new_password: newPassword
                },
                success: function (result) {
                    if (result.response.status == 200) {
                        alert(result.response.message)
                        $("#old-password").val("")
                        $("#new-password").val("")
                        $("#confirm-password").val("")
                    } else {
                        alert(result.response.message)
                    }
                }
            })

        }

    })

    const visible = (pwd) => {
        $(`#${pwd}-password`).prop("type", "text")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye-slash"></i>`)
        $(this).prop("class", "btn btn-warning")
    }

    const invisible = (pwd) => {
        $(`#${pwd}-password`).prop("type", "password")
        $(this).html("")
        $(this).html(`<i class="bi bi-eye"></i>`)
        $(this).prop("class", "btn btn-outline-warning")
    }

    $("#btn-pwd-old-visible").on("click", function (event) {
        if ($("#old-password").prop("type") == "password") {
            visible('old')
        } else {
            invisible('old')
        }
        event.preventDefault()
    })

    $("#btn-pwd-new-visible").on("click", function (event) {
        if ($("#new-password").prop("type") == "password") {
            visible('new')
        } else {
            invisible('new')
        }
        event.preventDefault()
    })

    $("#btn-pwd-confirm-visible").on("click", function (event) {
        if ($("#confirm-password").prop("type") == "password") {
            visible('confirm')
        } else {
            invisible('confirm')
        }
        event.preventDefault()
    })

})
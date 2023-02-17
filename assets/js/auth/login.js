import { base_server, base_client } from "../config.js";

$(document).ready(function () {

    $("#btn-login").on("click", function (event) {

        const username = $("#username").val()
        const password = $("#password").val()

        $(this).prop("disabled", true).text("Signing In . . . . . .")

        $.ajax({
            url: base_server + 'auth',
            type: 'POST',
            dataType: 'json',
            data: {
                username: username,
                password: password
            },
            success: function (result) {
                if (result.response.status == 200) {
                    window.location.href = base_client
                } else {
                    $("#btn-login").css({"background-color": "#bf0016"}).text(result.response.message)
                    setTimeout(() => {
                        $("#btn-login").css({"background-color": "#014199"}).prop("disabled", false).text("Login")
                    }, 2000);
                }
            }
        })

        event.preventDefault()

    })

    $("#btn-pwd-visible").on("click", function (event) {

        if ($("#password").prop("type") == "password") {
            $("#password").prop("type", "text")
            $(this).html("")
            $(this).html(`<i class="bi bi-eye-slash"></i>`)
            $(this).prop("class", "btn btn-primary")
        } else {
            $("#password").prop("type", "password")
            $(this).html("")
            $(this).html(`<i class="bi bi-eye"></i>`)
            $(this).prop("class", "btn btn-outline-primary")
        }

        event.preventDefault()

    })

})
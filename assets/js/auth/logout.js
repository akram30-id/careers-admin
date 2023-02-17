import { base_server, base_client } from "../config.js";

$(document).ready(function () {

    $("#btn-logout").on("click", function (event) {

        $.ajax({
            url: base_server + 'auth',
            type: 'DELETE',
            dataType: 'json',
            success: function (result) {
                if (result.response.status == 200) {
                    window.location.href = base_client + 'auth'
                } else {
                    alert(result.response.message)
                }
            }
        })

        event.preventDefault()

    })

})
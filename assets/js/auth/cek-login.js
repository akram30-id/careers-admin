import { base_server, base_client } from "../config.js"

$(document).ready(function () {
    const cekLogin = () => {
    
        $.ajax({
            url: base_server + 'auth',
            dataType: 'json',
            type: 'GET',
            success: function (result) {
                const session = result.response.session
                if (session === null) {
                    window.location.href = base_client + 'auth'
                }
            }
        })
    
    }
    
    cekLogin()
})
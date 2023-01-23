import { base_server, base_client } from "./config.js"

$(document).ready(function () {

    const server_url = base_server + 'divisi/'
    const client_url = base_client + 'divisi/'

    const showDivisi = $('#tblDivisi').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            //panggil method ajax list dengan ajax
            "url": server_url + 'ajax_list',
            "type": "POST"
        }
    });

    function addDivisi() {

        if ($("#namaDivisi").val() == "") {
            $("#alert-divisi").html(`
                <i>Tidak boleh kosong.</i>
            `)
            setTimeout(() => {
                $("#alert-divisi").html("")
            }, 5000);
        } else {
            $.ajax({
                url: server_url,
                type: 'POST',
                dataType: 'json',
                data: {
                    'nama_divisi': $("#namaDivisi").val()
                },
                success: function (result) {
                    if (result.response.status == 200) {
                        $("#btn-add-divisi").css({ 'background-color': '#41cc16', 'border-color': '#41cc16' })
                        $("#btn-add-divisi").text('Success!')
                        setTimeout(() => {
                            $("#btn-add-divisi").css({ 'background-color': '#062173', 'border-color': '#062173' })
                            $("#btn-add-divisi").text('Tambah Divisi')
                        }, 1000);
                        showDivisi.clear().draw()
                        $("#namaDivisi").val("")
                    } else if (result.response.status == 501) {
                        alert(result.response.message)
                    } else {
                        alert('Internal Server Error')
                    }
                }
            })
        }

    }

    function deleteDivisi(id) {
        $.ajax({
            url: server_url + "i/" + id,
            type: 'DELETE',
            dataType: 'json',
            data: {
                'id_divisi': id
            },
            success: function (result) {
                if (result.response.success == true) {
                    alert(result.response.message)
                    showDivisi.clear().draw()
                } else {
                    alert(result.response.message)
                }
            }
        })
    }

    function updateDivisi(id, newDivisi) {
        $.ajax({
            url: server_url + "i/" + id,
            type: 'PUT',
            dataType: 'json',
            data: {
                'nama_divisi': newDivisi
            },
            success: function (result) {
                if (result.response.success == true) {
                    alert(result.response.message)
                    showDivisi.clear().draw()
                } else {
                    alert(result.response.message)
                }
            }

        })
    }

    // button tambah divisi
    $("#btn-add-divisi").on("click", function (event) {
        addDivisi()
        event.preventDefault()
    })

    // button delete divisi
    $("#tblDivisi").on("click", ".btn-delete-divisi", function (event) {
        const id = $(this).data('id')
        if (confirm('Apakah anda ingin yakin ingin menghapus divisi ini?') == true) {
            deleteDivisi(id)
        }
        event.preventDefault()
    })

    // button edit divisi
    $("#tblDivisi").on("click", ".btn-edit-divisi", function (event) {
        const id = $(this).data('id')
        const newDivisi = prompt("Update Nama Divisi")
        if (newDivisi != null) {
            updateDivisi(id, newDivisi)
        } else {
            alert('Tidak jadi ya? Baiklah.')
        }
        event.preventDefault()
    })
})
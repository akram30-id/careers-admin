<div class="section-end">
    <div class="container-lg">
        <div class="row my-3 justify-content-evenly">
            <div class="col-sm-4">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-body">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15862.529425776183!2d107.08599297696247!3d-6.311933326910079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69900539377c49%3A0xc7ad2ba3ff35c307!2sPT.%20NIPPISUN%20INDONESIA!5e0!3m2!1sid!2sid!4v1654748828464!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <h4 class="text-start mt-5"><b>PT. Nippisun Indonesia Factory 1</b></h4>
                <p class="text-start">PT. Nippisun Indonesia, Blok I Jl. Sulawesi No.1-1, Gandamekar, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Barat 17530.</p>
                <h4 class="text-start mt-5"><b>PT. Nippisun Indonesia Factory 2</b></h4>
                <p class="text-start">PT. Nippisun Indonesia, Jl. Irian Blok PP, Jatiwangi, Kecamatan Cikarang Barat, Kabupaten Bekasi, Jawa Barat 17530.</p>
            </div>
        </div>
        <p class="text-center mt-5">&copy;2022 Nippisun Indonesia</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="<?= BASE_URL() . 'assets/fontawesome/js/all.js'; ?>"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="<?= base_url() . 'assets/js/number-thousand-separator/easy-number-separator.js'; ?>"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 50,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        direction: "vertical",
        spaceBetween: 50,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    $(document).ready(function() {
        $('#tblPelamar').DataTable();
    })
</script>

<script type="module" src=<?= BASE_URL() . "assets/js/config.js" ?>></script>

<script type="module" src=<?= BASE_URL() . "assets/js/auth/cek-login.js" ?>></script>
<script type="module" src=<?= BASE_URL() . "assets/js/auth/logout.js" ?>></script>
<script type="module" src=<?= BASE_URL() . "assets/js/auth/change-password.js" ?>></script>

<?php if (isset($ajax_url)) {
    foreach ($ajax_url as $ajax) {
?>
    
    <script type="<?= $ajax['type'] ?>" src="<?= BASE_URL() . $ajax['src'] ?>"></script>

<?php }
} else {
    echo "";
}
?>
</body>

</html>
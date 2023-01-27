<!-- <div class="content"> -->
<div class="section-one pt-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="alert-vacancy"></div>
                <!-- SEARCH BOX -->
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body my-3">
                        <div class="container">
                            <div class="row justify-content-between mt-3 mx-3">
                                <div class="col-sm-3 align-items-center text-center mb-2">
                                    <form id="search-form">
                                        <select class="form-select rounded-5" aria-label="Default select example" id="sort-by-divisi">
                                            <option value="">Semua Divisi</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-sm-6 align-items-center text-center">
                                    <div class="mb-3 input-group">
                                        <input class="form-control" form="search-form" style="border-radius: 32px 0px 0px 32px;" type="text" placeholder="Search" aria-label="Search" id="input-search-vacancy" aria-describedby="btn-search">
                                        <button class="btn btn-primary" form="search-form" style="border-radius: 0px 32px 32px 0px;" type="button" id="btn-search">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn text-white fw-bold rounded-5 btn-warning" href="<?= BASE_URL() . 'addvacancy' ?>">Buka Lowongan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content-vacancy"></div>
</div>
<!-- </div> -->
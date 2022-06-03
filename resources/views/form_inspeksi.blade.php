<style>
    .simpan_btn {
        background: #2e3092;
    }

    .reset_btn {
        border-color: #2e3092;
    }

    .reset_btn:hover {
        background: #2e3092;
        color: white;
    }

    .form-select {
        min-width: 100%;
    }
</style>
<div class="inspeksi container-fluid mt-3 ml-3 mb-5">
    <div class="judul_inspeksi">
        <h4 class="mb-2">Form Inspeksi APD</h4>
    </div>
    <p>Enter the required information below</p>
    <form>
        <div class="data-pekerja">
            <div class="card-body mt-3 shadow rounded">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Workshop</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="workshop" class="form-control" placeholder="Workshop 3" readonly>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" placeholder="Syahrul Romadoni" readonly>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Bagian</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="bagian" class="form-control" placeholder="Pengelasan" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Tanggal</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>NPP</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="npp" class="form-control" placeholder="855566" readonly>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Pekerjaan</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Welder" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="apd-wajib">
            <!-- HELMET-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Helmet</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="helm-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!--Chin Strap -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Chin Strap</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-lg" aria-label="chin-strap">
                                            <option value="">Layak</option>
                                            <option value="">Tidak Layak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--Expired Date -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Expired</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-lg" aria-label="exp-date">
                                            <option value="">Layak</option>
                                            <option value="">Tidak Layak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!--Shell -->
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Shell</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-select form-select-lg" aria-label="shell">
                                    <option value="">Layak</option>
                                    <option value="">Tidak Tidak Layak</option>
                                </select>
                            </div>
                        </div>

                        <!--Suspension -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Suspension</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="suspension">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--Stiker -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Stiker</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="stiker">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEPATU-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Sepatu</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="sepatu-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!--Outsol -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Out Sol</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-lg" aria-label="outsol">
                                            <option value="">Layak</option>
                                            <option value="">Tidak Layak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Steel Toe Cap -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Steel Toe Cap</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="steel-toe">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SERAGAM-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Seragam</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="seragam-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!--Kain -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Kain</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-lg" aria-label="kain">
                                            <option value="">Layak</option>
                                            <option value="">Tidak Layak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!--Reflektor -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Reflektor</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="reflektor">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('apd_pengelasan')
        <div class="tambahan_keterangan">
            <!-- Keterangan dan Dokumentasi-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Dokumentasi</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Keterangan -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Keterangan</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="keterangan" class="form-control" placeholder="Tulis keterangan disini">
                                </div>
                            </div>

                            <!--Dokumentasi -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Dokumentasi</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="" class=" float-right">
            <button class="btn text-light simpan_btn mt-3" type="button">Simpan</button>
        </a>
        <a href="" class=" float-right">
            <button class="btn mr-2 reset_btn mt-3" type="button">Reset</button>
        </a>
    </form>
</div>
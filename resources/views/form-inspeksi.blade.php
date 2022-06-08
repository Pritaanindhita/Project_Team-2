@extends('layout/main')

@section('konten')

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
    <form method="post" action="">
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

        <div class="apd-pengelasan">
            <!-- SARUNG TANGAN LAS-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Sarung Tangan Las</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="las-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--KONDISI -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Kondisi</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="kondisi">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KAP LAS-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Kap Las</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="kap-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--Shell Kap -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Shell</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="shell-kap">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!--Suspension-->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Suspension</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="suspension-kap">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--Kaca Kap -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Kaca</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="kaca-kap">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- APRON-->
            <div class="card-body mt-3 shadow rounded">
                <h4>Apron</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="apron-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <!--Apron Dada -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Apron Dada</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-select form-select-lg" aria-label="apron-dada">
                                            <option value="">Layak</option>
                                            <option value="">Tidak Layak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Apron Lengan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Apron Lengan</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="apron-lengan">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MASKER RESPIRATOR -->
            <div class="card-body mt-3 shadow rounded">
                <h4>Masker Respirator</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!--Ada/Tidak -->
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Ada/Tidak</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="respirator-ada-tidak">
                                        <option value="">Ada</option>
                                        <option value="">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Headband -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Headband</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="headband">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <!--Cartridge-->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Cartridge</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="cartridge">
                                        <option value="">Layak</option>
                                        <option value="">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--MASK -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Mask</label>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select form-select-lg" aria-label="mask">
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
                                        <input type="file" name="dokumentasi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="/form" class="btn text-light simpan_btn mt-3 float-right" type="submit">Simpan</a>
        <a href="" class="btn mr-2 reset_btn mt-3 float-right" type="reset">Reset</a>
    </form>
</div>
@endsection
@extends('layout/main')

@section('konten')

<style>
    .simpan_btn {
        background: #2e3092;
    }

    .reset_btn {
        border-color: #2e3092;
    }

    .btn-back {
        background-color: #A0A1D5;
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
        <h4 class="mb-2">
            <a class="btn btn-back rounded text-light"><i class="fa-solid fa-arrow-left"></i></a> Detail Inspeksi
        </h4>
    </div>
    <form method="post" action="">
        <div class="data-pekerja">
            <div class="card-body mt-3 shadow rounded">
                <div class="row">
                    <div class="col-md-6">
                        <!--Workshop-->
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Workshop</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="workshop" class="form-control" placeholder="Workshop 3" readonly>
                            </div>
                        </div>

                        <!--Nama-->
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Nama</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" placeholder="Syahrul Romadoni" readonly>
                            </div>
                        </div>

                        <!--Bagian-->
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
                        <!--Tanggal-->
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>Tanggal</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" name="tanggal" class="form-control" placeholder="" readonly>
                            </div>
                        </div>

                        <!--NPP-->
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <label>NPP</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="npp" class="form-control" placeholder="855566" readonly>
                            </div>
                        </div>

                        <!--Pekerjaan-->
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
                                    <input type="text" name="keadaan" class="form-control" placeholder="" readonly>
                                </div>
                            </div>

                            <!--Chin Strap -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Chin Strap</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="chin-strap" class="form-control" placeholder="" readonly>
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
                                        <input type="text" name="exp-date" class="form-control" placeholder="" readonly>
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
                                <input type="text" name="shell" class="form-control" placeholder="" readonly>
                            </div>
                        </div>

                        <!--Suspension -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <label>Suspension</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="suspension" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="stiker" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-sepatu" class="form-control" placeholder="" readonly>
                                </div>
                            </div>

                            <!--Outsol -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Out Sol</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="outsol" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="steel-toe" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-seragam" class="form-control" placeholder="" readonly>
                                </div>
                            </div>

                            <!--Kain -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Kain</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="kain" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-reflektor" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-sarung-tangan-las" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="kondisi-sarung-tangan-las" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-kap-las" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="shell-kap" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="suspension-kap" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="kaca-kap" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-apron" class="form-control" placeholder="" readonly>
                                </div>
                            </div>

                            <!--Apron Dada -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Apron Dada</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="apron-dada" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="apron-lengan" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keadaan-respirator" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="headband" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="cartridge" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="mask" class="form-control" placeholder="" readonly>
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
                                    <input type="text" name="keterangan" class="form-control" readonly>
                                </div>
                            </div>

                            <!--Dokumentasi -->
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label>Dokumentasi</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <img src="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
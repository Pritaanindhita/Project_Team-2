@extends('layout/main')
@section('konten')

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

@endsection
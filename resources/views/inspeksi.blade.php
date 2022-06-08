@extends('layout/main')

@section('konten')

<div class="inspeksi container-fluid mt-3 ml-3">
    <div class="judul_inspeksi">
        <h2 class="mb-2">Inspeksi Alat Pelindung Diri (APD)</h2>
    </div>
    <p>PT Barata Indonesia (Persero)</p>
    <div class="card-body mt-5 shadow">
        <p>Cari nama pekerja dan mulailah inspeksi</p>
        <form id="inspeksi_nama" method="get">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                                <label>Nama</label>
                            </div>
                            <div class="col-sm-10">
                                <input list="pekerja" placeholder="Cari nama pekerja.." class="search_nama">
                                <datalist id="pekerja">
                                    <option value="Syahrul Romadoni - 124443">
                                    <option value="Prita Anindhita - 12134">
                                    <option value="Syahrul Rizal - 12224">
                                </datalist>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="/form" class="btn text-light simpan_btn mt-3 float-right" type="submit" style="background-color: #2e3092;">Mulai Inspeksi</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
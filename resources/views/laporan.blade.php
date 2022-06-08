@extends('layout/main')

@section('konten')

<style>
    .btn-tgl {
        background-color: #2e3092;
    }

    .btn-print {
        text-decoration: none;
        color: #2e3092;
        font-size: large;
    }

    .card {
        width: 100%;
    }

    .btn-detail {
        background-color: #2e3092;
    }
</style>
<div class="laporan container-fluid mt-3 ml-3">
    <form method="get" id="pilih-tanggal" action="">
        <div class="row mt-3">
            <div class="col-lg-8">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Tanggal Awal</h5>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="tanggal-awal" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Tanggal Akhir</h5>
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="tanggal-akhir" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <a class="btn text-light btn-tgl" name="btn-tgl" href="">Tampilkan</a>
                            <a class="btn-print btn ml-3" name="btn-print" href=""><i class="fa-solid fa-print"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </form>

    <table class="table table-bordered text-center mx-auto mt-5">
        <thead>
            <th>Nomor</th>
            <th>Workshop</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Pekerjaan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a class="btn btn-detail btn-sm text-light"><i class="fa-solid fa-circle-info"></i> Detail</a>
                <a class="btn btn-danger btn-sm text-light"><i class="fa-solid fa-trash-can"></i> Hapus</a>
            </td>
        </tbody>
    </table>

</div>
@endsection
@extends('layout/main')

@section('konten')
<div class="tabel-inspeksi">
    <table id="hasilInspeksi" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Inspeksi</th>
                <th>NPP</th>
                <th>ID Pekerjaan</th>
                <th>ID Master Sub APD</th>
                <th>ID Petugas Inspeksi</th>
                <th>Tanggal Inspeksi</th>
                <th>Kondisi</th>
                <th>Keterangan</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $('#hasilInspeksi').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": "http://192.168.5.4:8000/apdinspeksi",
            "type": "GET"
        },
        "columns": [{
                "data": null,
                "sortable": false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                "data": "apdinspeksi_id"
            },
            {
                "data": "NPPPekerja"
            },
            {
                "data": "pekerjaan_id"
            },
            {
                "data": "mastersubapd_id"
            },
            {
                "data": "petugasinspeksi_id"
            },
            {
                "data": "TanggalInspeksi"
            },
            {
                "data": "Kondisi"
            },
            {
                "data": "Keterangan"
            },
            {
                "data": "Foto"
            },
        ]
    });
</script>

@endsection